@extends('layouts.auth-master')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center"> 
            <div class="col-12 col-md-6 p-3 mt-5">
                <div class="card">
                    <h1 class="h3 my-4 fw-bold text-center">Crear cuenta</h1>
                    <div class="card-body">
                        <form method="post" action="{{ route('register.perform') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                
                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Juan Perez" required="required" autofocus>
                                <label for="floatingEmail">Nombre completo</label>
                                @if ($errors->has('name'))
                                    <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group form-floating mb-3">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                                <label for="floatingEmail">Correo electronico</label>
                                @if ($errors->has('email'))
                                    <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                    
                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                                <label for="floatingName">Nombre de usuario</label>
                                @if ($errors->has('username'))
                                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
        
                            <div class="form-group form-floating mb-3">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Ingrese su telefono" required="required" autofocus>
                                <label for="floatingEmail">Telefono</label>
                                @if ($errors->has('phone'))
                                    <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            
                            <div class="form-group form-floating mb-3">
                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                                <label for="floatingPassword">Contraseña</label>
                                @if ($errors->has('password'))
                                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                    
                            <div class="form-group form-floating mb-3">
                                <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
                                <label for="floatingConfirmPassword">Confirmar Contraseña</label>
                                @if ($errors->has('password_confirmation'))
                                    <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                                
                            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection