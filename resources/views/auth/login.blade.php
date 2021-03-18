@extends('layouts.auth_layout')

@section('title', 'Login')

@section('content')
<div class="container my-5">
    <div class="row shadow">
        <div class="col-lg-6 col-md-6 col-12 p-0">
            <div class="card border-0">
                <div class="card-body text-center">
                    <div id="loginSec" class="d-flex flex-column justify-content-center align-items-center">
                        <h2>Sign In</h2>
                        <p>Login using your email</p>
                        

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{--<div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>--}}
                           {{--<div class="form-group">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>--}}
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-warning">
                                    Sign In
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 p-0">
            <div class="card border-0">
                <div class="card-body bg-warning text-white">
                    <div id="registerSec" class="d-flex flex-column justify-content-center align-items-center">
                        <h2>Welcome Dear Client!</h2>
                        <p>Enter your personal details and start journey with us</p>
                        <a href="{{route('register')}}" class="btn btn-outline-light">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
