<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>

    @auth 
        <p>Bienvenido {{auth()->user()->name}}, estas autenticado a la pagina</p>
        <a href="{{ route("logout") }}">Cerrar sesion</a>
    @endauth
    
    @guest
        <p>Para ver el contenido <a href="{{route('login.show')}}">Inicia sesion</a></p>
    @endguest
</body>
</html>