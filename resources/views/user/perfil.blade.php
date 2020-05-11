@extends('layouts.app')

@section('content')
<section>
        <article class="perfil">
            
            @include('includes.avatar')
            <div class="perfil_description">
                <h3>{{Auth::user()->name.' '.Auth::user()->surname}}</h3>
                <p>{{'@'.Auth::user()->nick}}</p>
            </div>
            <a href="{{ route('config') }}" class="config">Configurar perfil</a>
        </article>
    </section>
@endsection