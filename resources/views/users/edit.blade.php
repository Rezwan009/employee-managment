@extends('layouts.master')

@section('content')
    <div class="col-md-12 justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('User Update Form') }}</div>

            <div class="card-body">
                <form class="g-3" action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                        <div class="col-md-6">
                            <input id="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror"
                                name="user_name" value="{{ old('user_name', $user->user_name) }}" required
                                autocomplete="user_name" autofocus>

                            @error('user_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="first_name"
                            class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                        <div class="col-md-6">
                            <input id="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                value="{{ old('first_name', $user->first_name) }}" required autocomplete="first_name"
                                autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror"
                                name="last_name" value="{{ old('last_name', $user->last_name) }}" required
                                autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update User') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
