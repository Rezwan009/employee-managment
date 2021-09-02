@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h6 mb-0 text-gray-800">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </h1>
    </div>
    <div class="col-md-12 justify-content-center">
        <div class="card">
            @include('partials.message')
            <div class="card-header">{{ __('User List') }}
                <div class="card-tools float-right">
                    <a href="{{ route('users.create') }}"><i class="fas fa-plus-square"></i> Create New User</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#S.No</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joining Date</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td class="d-flex justify-content-betweein align-item-center">
                                    <div>
                                        <a href="{{ route('users.edit', $user->id) }}/"><i class="fas fa-user-edit fa-lg"></i></a>
                                    </div>
                                    <div>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs py-0">
                                                <span>
                                                    <i class="fas fa-trash fa-lg">
                                                    </i>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td> <i class="fas fa-folder-minus"></i> No record found</td>
                            </tr>

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
