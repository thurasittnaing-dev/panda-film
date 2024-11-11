<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $user;

    public function __construct(UserInterface $userInterface)
    {
        $this->user = $userInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->user->list();
        return view('backend.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.form', [
            'user' => null,
            'route' => route('users.store'),
            'method' => 'POST',
            'label' => 'Create User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        [$status, $message] = $this->user->storeOrUpdate($request->validated());
        return redirect()->route('users.index')->with($status, $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('backend.user.form', [
            'user' => $user,
            'route' => route('users.update', $user),
            'method' => 'PUT',
            'label' => 'Update User'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        [$status, $message] = $this->user->storeOrUpdate($request->validated(), $user);
        return redirect()->route('users.index')->with($status, $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        [$status, $message] = $this->user->delete($user);
        return redirect()->route('users.index')->with($status, $message);
    }
}
