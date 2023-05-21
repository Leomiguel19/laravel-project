@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <div class="row"> 
            <div class="container d-flex justify-content-center">
                <div class="col-12 col-md-4 p-3 mt-5 shadow p-3 mb-5 bg-body rounded bg-light">
                    <h1 class="h3 my-4 fw-bold text-center">Iniciar sesión</h1>
            
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="testusername" placeholder="Username" required="required">
                        <label for="floatingName">Correo o nombre de usuario</label>
                    </div>
                    
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="test@1234" placeholder="Password" required="required">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
                </div>
            </div>
        </div>
    </form>
@endsection