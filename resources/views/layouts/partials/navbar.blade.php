<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white fs-4">LARAVEL APPLICATION</a></li>
            </ul>

            @auth

                <div class="text-center px-4">
                    {{ auth()->user()->name }}
                </div>
                <div class="text-end px-4">
                    <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Cerrar sesión</a>
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Iniciar sesión</a>
                    <a href="{{ route('register.perform') }}" class="btn btn-warning">Registrarse</a>
                </div>
            @endguest
        </div>
    </div>
</header>
