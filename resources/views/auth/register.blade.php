@extends('layouts.app')

@section('content')
<div class="form">
    <div class="main">
        <h1>Negosville</h1>
        <h2>Sign up</h2>
        <p>Registrate para crear una cuenta</p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="line">
            <label for="name"><i class="fas fa-user"></i></label>

            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            <label for="surname"><i class="fas fa-user"></i></label>

            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
            @error('surname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            <label for="nick"><i class="fas fa-at"></i></label>

            <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ old('nick') }}" required autocomplete="nick" autofocus>
            @error('nick')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            <label for="birthdate"><i class="fas fa-calendar-alt"></i></label>

            <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="birthdate" autofocus>
            @error('birthdate')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="line">
            <label for="email"><i class="far fa-envelope"></i></label>
            
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="line">
            <label for="password"><i class="fas fa-lock"></i></label>

            
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            
        </div>
        <div class="line">
            <label for="password-confirm"><i class="fas fa-lock"></i></label>

           
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            
        </div>
        
        
        <input type="submit" value="Register">
                
            
    </form>
    <div class="sign_up">
            <p>I have an account?</p>
            <a href="">Sign in here</a>
        </div>
</div>
</div>
@endsection
