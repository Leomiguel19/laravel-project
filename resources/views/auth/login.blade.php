<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('login') }}" class="container w-25">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />


        <h1 class="h3 mb-3 fw-normal">Login</h1>

        {{-- @include('layouts.partials.messages') --}}

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="testusername" 
                placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            {{-- @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif --}}
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="test@1234"
                placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            {{-- @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif --}}
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        {{-- @include('auth.partials.copy') --}}
    </form>
</body>

</html>
