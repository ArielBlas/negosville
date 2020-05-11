<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negosville</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/9039d5884e.js" crossorigin="anonymous"></script>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    <!-- SLIDER -->
    <div id="slider">
        <div class="fondo"> 
            <h2>Busca una manera de encontrar el negocio que vos quieras</h2>
            <p>Encontralo a través de esta pagina.</p>
            <a href="location.html">Buscar</a>
            
        </div>
        <div style="height: 150px; overflow: hidden; margin-top: 170px;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div>

    <!-- SECTION -->
    <section>
        <h2>Los lugares mas visitados</h2>
        <article>
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
    <div class="clearfix"></div>
    <div style="height: 150px; overflow: hidden; margin-top: 120px;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.99 C150.00,150.00 349.21,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #1f1f1f;"></path></svg></div>

    <div class="contact">
        <span><i class="fas fa-map-marker-alt"></i>Argentina, CABA</span>
        <span><i class="fas fa-phone-alt"></i>11 5019 9099</span>
        <span><i class="fas fa-envelope"></i>arielwalconblas@gmail.com</span>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="linea"></div>
        <div>Copyright &copy; 2020 Negosville. All Rights Reserved</div>
    </footer>

</body>
</html>
@endsection