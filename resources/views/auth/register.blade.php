@extends('auth.master')

@section('title', 'Register')

@section('content')
    <div class="login-logo">
        <img width="152" class="my-5" src="{{ asset('img/auth-logo.png') }}"><br>

        <h5 class="mt-3">Register a new membership</h5>
    </div>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-user mx-auto"></i>
                </span> 
            </div>

            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter Your Full Name" required> 
            
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

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
        
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="input-group mb-3">
            <div class="input-group-append">
                <span class="input-group-text bg-white">
                    <i class="fa fa-lock mx-auto"></i>
                </span> 
            </div>
            
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            
            @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        <button id="submit" type="submit" class="btn btn-warning btn-block mt-3 mb-3"><b>Register</b></button>
        <a href="{{ route('login') }}" class="text-underline"><b>I already have a membership</b></a>

        <div class="mt-3">
            <a href="{{ route('jokes.index') }}" class="text-underline"><b>Step in as a guest</b></a>
        </div>
    </form>
@endsection