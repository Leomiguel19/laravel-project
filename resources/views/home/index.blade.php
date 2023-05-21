@extends('layouts.auth-master')

@section('content')

<div class="row">
    <div class="container pt-5">
        <h1>Home</h1>

        @auth 
            <p>Bienvenido <strong>{{auth()->user()->name}}</strong>, estas autenticado a la pagina</p>
            <a href="{{ route("logout.perform") }}">Cerrar sesion</a>
        @endauth
    
        @guest
            <p>Para ver el contenido <a href="{{route('login.perform')}}">Inicia sesion</a></p>
        @endguest
    </div>
</div>
    
@endsection
