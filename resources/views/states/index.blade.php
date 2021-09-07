@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h6 mb-0 text-gray-800">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('states.index') }}">States</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </h1>
    </div>
    <div class="col-md-12 justify-content-center">
        <div class="card">
            @include('partials.message')
            <div class="card-header">{{ __('State List') }}
                <div class="card-tools float-right">
                    <a href="{{ route('states.create') }}"><i class="fas fa-plus-square"></i> Create New States</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">State Name</th>
                            <th scope="col">Country Name</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($states as $state)
                            <tr>
                                <th scope="row">{{ $state->id }}</th>
                                <td>{{ $state->name }}</td>
                                <td>{{ $state->country->name }}</td>
                                <td class="d-flex justify-content-betweein align-item-center">
                                    <div>
                                        <a href="{{ route('states.edit', $state->id) }}/"><i class="fas fa-user-edit fa-lg"></i></a>
                                    </div>
                                    <div>
                                        <form action="{{ route('states.destroy', $state->id) }}" method="POST">
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
