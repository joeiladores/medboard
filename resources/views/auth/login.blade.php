@extends('layouts.app')

@section('content')
<div class="wrapper">
    <div class="container main">
        <div class="row image-row rounded-">
            <div class="col-md-6 side-image">
            </div>
            <div class="col-md-6 right">
                <!-- Login Form -->
                <div>
                    <h4 class="text-center mb-4">Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if( session('error') )
                        <div class="alert alert-danger my-3" role="alert">
                            {{ session('error') }}
                        </div>
                        @endif

                        <div class="row mb-3">
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
                                    <div>
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <a class="btn btn-link align-self-end" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 px-5 mt-3">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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