@extends('layouts.auth-master')

@section('content')
    <div class="row"> 
        <div class="container d-flex justify-content-center">
            <div class="col-12 col-md-6 p-3 mt-5 shadow p-3 mb-5 bg-body rounded bg-light">
                <h1 class="h3 my-4 fw-bold text-center">Registrarse</h1>
                <form method="post" action="{{ route('register.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Juan Perez" required="required" autofocus>
                        <label for="floatingEmail">Nombre completo</label>
                    </div>
                    <div class="form-group form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                        <label for="floatingEmail">Correo electronico</label>
                    </div>
            
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Nombre de usuario</label>
                    </div>
                    
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
            
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                        <label for="floatingConfirmPassword">Confirmar Contraseña</label>
                    </div>
            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection