@extends('layouts.master')

@section('content')
    <div class="col-md-12 justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Country Create Form') }}</div>

            <div class="card-body">

                <form class="g-3" action="{{ route('countries.store') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="country_code" class="col-md-4 col-form-label text-md-right">{{ __('Country Code') }}</label>

                        <div class="col-md-6">
                            <input id="country_code" type="text" class="form-control @error('country_code') is-invalid @enderror"
                                name="country_code" value="{{ old('country_code') }}" required autocomplete="country_code"
                                autofocus>

                            @error('country_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-right">{{ __('Country Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
