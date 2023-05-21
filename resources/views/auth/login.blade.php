@extends('layouts.auth-master')

@section('content')  
    <div class="container">
        <div class="row d-flex justify-content-center"> 
            <div class="col-12 col-md-4 p-3 mt-5 shadow p-3 mb-5 bg-body rounded bg-light">
                <form method="post" action="{{ route('login.perform') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <h1 class="h3 my-4 fw-bold text-center">Iniciar sesión</h1>
                    @include('layouts.partials.messages')
                    <div class="form-group form-floating mb-3">
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                        <label for="floatingName">Correo o nombre de usuario</label>
                    </div>
                    
                    <div class="form-group form-floating mb-3">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
@endsection