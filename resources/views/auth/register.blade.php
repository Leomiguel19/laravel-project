@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}" class="container w-25">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
        <h1 class="h3 my-4 fw-normal text-center">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Juan Perez" required="required" autofocus>
            <label for="floatingEmail">Name</label>
        </div>
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
@endsection