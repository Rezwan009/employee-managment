@extends('layouts.master')

@section('content')
    <!-- Page Heading -->
    <div class="col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h6 mb-0 text-gray-800">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('countries.index') }}">Countries</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data</li>
                </ol>
            </nav>
        </h1>
    </div>
    <div class="col-md-12 justify-content-center">
        <div class="card">
            @include('partials.message')
            <div class="card-header">{{ __('Country List') }}
                <div class="card-tools float-right">
                    <a href="{{ route('countries.create') }}"><i class="fas fa-plus-square"></i> Create New Country</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#S.No</th>
                            <th scope="col">Country Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($countries as $country)
                            <tr>
                                <th scope="row">{{ $country->id }}</th>
                                <td>{{ $country->country_code }}</td>
                                <td>{{ $country->name }}</td>
                                <td class="d-flex justify-content-betweein align-item-center">
                                    <div>
                                        <a href="{{ route('countries.edit', $country->id) }}/"><i class="fas fa-user-edit"></i></a>
                                    </div>
                                    <div>
                                        <form action="{{ route('countries.destroy', $country->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs py-0">
                                                <span>
                                                    <i class="fas fa-trash">
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
