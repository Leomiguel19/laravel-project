<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Ingrese su nombre" value="test">
        <input type="email" name="email" placeholder="Ingrese su correo" value="test@email.com">
        <input type="password" name="password" placeholder="Ingrese su contraseña" value="test@1234">
        <input type="password" name="password_confirmation" placeholder="Ingrese su contraseña" value="test@1234">
        <input type="phone" name="phone" placeholder="Ingrese su telefono" value="4120950165">
        {{-- <input type="file" name="image" placeholder="Ingrese su imagen de perfil"> --}}
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>