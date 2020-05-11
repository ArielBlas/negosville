@extends('layouts.app')

@section('content')


<div class="form">
    <div class="main">
        <h1>Negosville</h1>
        <h2>Sign in</h2>
        <p>Enter your details below to continue</p>
    </div>


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="line">
            <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->
            <label for="email"><i class="far fa-envelope"></i></label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="line">                            
            <label for="password"><i class="fas fa-lock"></i></label>


            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="helpers">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <label  for="remember">
                {{ __('Remember Me') }}
            </label>

            @if (Route::has('password.request'))
            <a  href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>

        <input type="submit" value="Login">


    </form>

    <div class="sign_up">
        <p>Don´t have an account?</p>
        <a href="{{ route('register') }}">Sign up here</a>
    </div>
</div>



@endsection
