@extends('auth.master')

@section('title', 'Login')

@section('content')
    <div class="login-logo">
        <img width="152" class="my-5" src="{{ asset('img/auth-logo.png') }}"><br>

        <h5 class="mt-3">Login to start your session</h5>
    </div>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-envelope-square mx-auto"></i>
                </span> 
            </div>

            <input id="email" type="email" placeholder="E-mail address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-lock mx-auto"></i>
                </span> 
            </div>

            <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        </div>

        <div class="d-inline-block">
            <div class="icheck-material">
                <input type="checkbox" id="remember" name="remember" checked>
                <label for="remember">Remember me</label>
            </div>
        </div>

        <button type="submit" class="btn btn-warning btn-block mt-3 mb-3"><b>Login</b></button>
        <a href="{{ route('register') }}" class="text-underline"><b>Register a new membership</b></a>

        <div class="mt-3">
            <a href="{{ route('jokes.index') }}" class="text-underline"><b>Step in as a guest</b></a>
        </div>
    </form>
@endsection