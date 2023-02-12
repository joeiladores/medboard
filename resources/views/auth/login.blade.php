@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container main">
        <div class="row image-row rounded-4">
            <div class="col-md-6 side-image bg-transparent">
            </div>
            <div class="col-md-6 right">
                <!-- Login Form -->
                <div>
                    <h4 class="text-center mb-4">Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf                        

                        <div class="row mb-3">

                            @if( session('error') )
                            <div class="col-12 px-5 mb-3">
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            </div>
                            @endif

                            <div class="col-12 px-5 mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 px-5 mt-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 px-5 mt-3">
                                <div class="form-check col d-flex flex-row justify-content-between">
                                    <div class="align-middle">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>                                   
                                </div>
                            </div>

                            <div class="d-grid px-5 mt-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <a class="btn btn-link fs-6 text-decoration-none" href="{{ route('password.request') }}"><span>{{ __('Forgot Your Password?') }}</span>
                                    </a>

                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection