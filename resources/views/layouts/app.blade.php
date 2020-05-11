<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>


        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('css/forms.css') }}" rel="stylesheet">

        <script src="https://kit.fontawesome.com/9039d5884e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header id="header">
            <div class="center">
                <div id="logo">

                    <span id="brand">
                        <strong>Negosville</strong>
                    </span>
                </div>
                <nav class="navbar-expand-md" id="menu">
                    <!-- Authentication Links -->
                    <ul>
                    <li>
                        <a href="{{ url('/')}}">Inicio</a>
                    </li>
                    <li>
                        <a href="{{ route('location.index') }}">Localidad</a>
                    </li>
                    <li>
                        <a href="{{ route('help.index') }}">Ayuda</a>
                    </li>
                    @guest
                    
                        <li>
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    </ul>
                    @endif
                    @else
                    <li>
                        <a href="{{ route('card.create') }}">Publicar</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('perfil') }}">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
                </nav>
            </div>
        </header>
        <main class="py-4">
            @yield('content')
        </main>

    </body>
</html>
