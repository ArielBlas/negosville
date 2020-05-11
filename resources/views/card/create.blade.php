@extends('layouts.app')

@section('content')
<div class="form">
    <div class="main">
        <h2>Publicar negocio</h2>
    </div>


    <form method="POST" action="{{ route('card.save') }}" enctype="multipart/form-data">
        @csrf

        <div class="line">
            <label for="title"><i>1.</i></label>

            <input id="title" type="text" placeholder="Titulo" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

            @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="line">
            <label for="category"><i>2.</i></label>

            <input id="category" type="text" placeholder="Categoria" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

            @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <div class="line">
            <label for="image_path"><i>3.</i></label>

            <input id="image_path" type="file" placeholder="Imagen" class="form-control @error('image_path') is-invalid @enderror" name="image_path" value="{{ old('image_path') }}" required autocomplete="image_path" autofocus>

            @error('image_path')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="line">
            <label for="description"><i>4.</i></label>

            <textarea id="description" type="text" placeholder="Descripción" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>

            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
        <input type="submit" value="Publicar">


    </form>
</div>
@endsection