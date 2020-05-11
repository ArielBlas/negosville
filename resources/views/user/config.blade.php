@extends('layouts.app')

@section('content')
<div class="form">
    <div class="main">
        <h2>Configuración de perfil</h2>
    </div>

    @include('includes.message')

    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
        @csrf

        <div class="line">
            <label for="name"><i class="fas fa-user"></i></label>
            <input id="name" type="text" placeholder="Nombre" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="line">
            <label for="surname"><i class="fas fa-user"></i></label>
            <input id="surname" type="text" placeholder="Apellido" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname }}" required autocomplete="surname" autofocus>
            @error('surname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            <label for="nick"><i class="fas fa-at"></i></label>
            <input id="nick" type="text" placeholder="Nickname" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ Auth::user()->nick }}" required autocomplete="nick" autofocus>
            @error('nick')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            <label for="email"><i class="far fa-envelope"></i></label>
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            @include('includes.avatar')            
            <label for="image"><i class="fas fa-calendar-alt"></i></label>
            <input id="image" type="file" placeholder="Imagen" class="form-control @error('image') is-invalid @enderror" name="image" value="" required autocomplete="image" autofocus>
            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <input type="submit" value="Guardar cambios">


    </form>
</div>
@endsection