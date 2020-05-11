@extends('layouts.app')

@section('content')
<!-- SECTION -->
    <section>
        <article class="card_center"> 

            <div class="main_image">
                <img src="{{ route('card.image', ['filename' => $image->image_path]) }}">
            </div>
            <div class="card_description">
                <h2>{{$image->title}}</h2>
                <p>Categoria: <span>{{$image->category}}</span></p>
                <p class="card_text">{{$image->description}}</p>
                
            </div>          

        </article>
        
    </section>
@endsection