@extends('layouts.app')

@section('content')
<section>
    @include('includes.message')
        <h2>Buscar localidad:</h2>
        <aside class="aside-location">
            <label for="posts">Ordenar publicaciones</label>

            <select id="posts">
                <option value="relevantes">Más relevantes</option>
                <option value="recientes">Recientes</option>
                <option value="antiguos">Antiguos</option>                
            </select>

            <h2>Ubicación</h2>
            <a href="">Capital Federal</a>
        </aside>
        <article class="article-location">
            @foreach($images as $image)
            <div class="carta">
                <a href="{{ route('card.index', ['id' => $image->id]) }}">
                    <img src="{{ route('card.image', ['filename' => $image->image_path]) }}">
                    <h3>{{$image->title}}</h3>
                    <p>Categoria: <span>{{$image->category}}</span></p>
                    <p>{{$image->description}}</p>
                </a>
            </div>

            @endforeach
        </article>
    </section>
@endsection
