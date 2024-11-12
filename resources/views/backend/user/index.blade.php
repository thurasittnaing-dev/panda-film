@extends('layouts.app')

@section('title', 'User List')


@section('css')
@endsection

@section('content')
    <div class="py-3">
        @php
            $headers = ['#', 'Username', 'Full Name', 'Created By', 'Updated By', 'Created at', 'Action'];
        @endphp

        <x-form.messages />

        @include('backend.user.filter')

        <x-form.table :headers="$headers" :total="$count" label="Total Users">
            <x-slot name="button">
                <a href="{{ route('users.create') }}" class="btn btn-sm btn-dark"><i class="bi bi-plus"></i> Add New</a>
            </x-slot>

            <x-slot name="tbody">
                @forelse ($users as $user)
                    <tr>
                        <td>{{ ++$indexer }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->fullname }}</td>
                        <td>{{ $user->createdByUser->fullname }}</td>
                        <td>{{ $user->updatedByUser?->fullname }}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item ta-delete-btn" href="{{ route('users.edit', $user) }}">Edit
                                        </a>
                                        <a class="dropdown-item ta-delete-btn" href="#"
                                            onClick="handleDelete('{{ $user->id }}')">Delete
                                        </a>
                                        {{-- Delete Form --}}
                                        <form id="delete-form-{{ $user->id }}"
                                            action="{{ route('users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" align="center">No Result</td>
                    </tr>
                @endforelse
            </x-slot>

            @if ($users->hasPages())
                <x-slot name="tfooter">
                    {{ $users->links() }}
                </x-slot>
            @endif
        </x-form.table>
    </div>
@endsection


@section('js')
    <script>
        const handleDelete = (id) => {
            if (confirm('Are you sure?')) {
                $(`#delete-form-${id}`).submit();
            }
        }
    </script>
@endsection
