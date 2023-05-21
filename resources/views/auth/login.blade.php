@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}" class="container w-25">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        
        <h1 class="h3 my-4 fw-normal text-center">Iniciar sesión</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="testusername" placeholder="Username" required="required">
            <label for="floatingName">Correo o nombre de usuario</label>
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="test@1234" placeholder="Password" required="required">
            <label for="floatingPassword">Contraseña</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
@endsection