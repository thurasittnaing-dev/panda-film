<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Services\UserService;

class UserRepository implements UserInterface
{
  private $service;

  public function __construct(UserService $userService)
  {
    $this->service = $userService;
  }

  public function list()
  {
    $query = User::with(['createdByUser', 'updatedByUser'])
      ->latest()
      ->paginate(10)
      ->withQueryString();

    return [
      'indexer' => getIndexer(10),
      'count' => $query->total(),
      'users' => $query,
    ];
  }

  public function storeOrUpdate($data, $user = null)
  {
    return $this->service->storeOrUpdate($data, $user);
  }

  public function delete($user)
  {
    return $this->service->delete($user);
  }
}
