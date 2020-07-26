@extends('layouts.app')
@section('style')
   <style>
       body{
           background-image: url('/media/login.jpeg');
           background-size:cover;
           background-repeat: no-repeat;
       }
    </style> 
@endsection
@section('content')
<div class="container my-5 py-5">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header"><h1>{{ __('Register') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right text-white"><h6>{{ __('Name') }}</h6></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="borderbox w-75 bg-transparent @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-white"><h6>{{ __('E-Mail Address') }}</h6></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="borderbox w-75 bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-white"><h6>{{ __('Password') }}</h6></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="borderbox w-75 bg-transparent @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right text-white"><h6>{{ __('Confirm Password') }}</h6></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="borderbox w-75 bg-transparent" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
