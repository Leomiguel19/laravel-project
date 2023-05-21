@extends('layouts.auth-master')

@section('content')
    <h1>Home</h1>

    @auth 
        <p>Bienvenido {{auth()->user()->name}}, estas autenticado a la pagina</p>
        <a href="{{ route("logout.perform") }}">Cerrar sesion</a>
    @endauth

    @guest
        <p>Para ver el contenido <a href="{{route('login.perform')}}">Inicia sesion</a></p>
    @endguest
@endsection
