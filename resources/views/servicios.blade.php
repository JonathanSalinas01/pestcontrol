<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8cc79aff1.js" crossorigin="anonymous"></script>
    <title>Servicios - PestControl</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo-pest control.png') }}" alt="logo de PestControl" width="150"
                        height="150">
                </a>

                <div class="d-flex justify-content-center align-items-center gap-4">
                    <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
                    <a class="navbar-brand text-center" href="{{ route('acerca') }}">Sobre<br>nosotros</a>
                    <a class="navbar-brand" href="#">Servicios</a>
                    <a class="navbar-brand" href="{{ route('productos') }}">Productos</a>
                    <a class="navbar-brand" href="{{ route('contacto') }}">Contacto</a>
                </div>
                <a href="{{ route('cotizar') }}"><button type="button" class="btn btn-success">Cotizar
                        ahora</button></a>

            </div>
        </nav>
    </header>
    <main>
        <section>
            <h1 class="fw-bold text-center">Nuestros servicios</h1>
            <h2 class="text-center">Ofrecemos soluciones adaptadas a cada necesidad, garantizando ambientes libres de
                plagas de forma segura y profesional.</h2>
        </section>
        <section class="container mt-5 mb-5">
            <div class="row">
                @foreach ($servicios as $servicio)
                    <div class="col-12 col-md-6 d-flex">
                        <article class="w-100">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <img src="{{ $servicio->imagen }}" alt="{{ $servicio->nombre }}"
                                            class="img-fluid rounded p-1" />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bolder">{{ $servicio->nombre }}</h5>
                                            <p class="card-text">
                                                {{ $servicio->descripcion }}
                                            </p>
                                            <a href="{{route('cotizar')}}" class="text-decoration-none"><button class="btn btn-success ms-auto d-block">Cotizar ahora</button></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
    <footer>
        <section class="azul-footer text-white text-center text-md-start mt-5 py-4">
            <div class="container-fluid px-5">
                <div class="d-flex justify-content-between align-items-start flex-wrap">
                    <!-- Columna izquierda -->
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-bold mb-4 fs-2">PestControl</h6>
                        <p class="fs-5">Modernizando el control de plagas con tecnología y profesionalismo.</p>
                        <div>
                            <a href="#!" class="text-white me-4"><i class="fab fa-facebook-f fs-4"></i></a>
                            <a href="#!" class="text-white me-4"><i class="fab fa-twitter fs-4"></i></a>
                            <a href="#!" class="text-white me-4"><i class="fab fa-instagram fs-4"></i></a>
                        </div>
                    </div>

                    <!-- Columna centro -->
                    <div class="col-md-3 mb-4 text-left ">
                        <h6 class="fw-bold mb-4 fs-4">Navegación</h6>
                        <p><a href="{{ route('home') }}" class="text-decoration-none text-white">Inicio</a></p>
                        <p><a href="{{ route('acerca') }}" class="text-decoration-none text-white">Sobre nosotros</a>
                        </p>
                        <p><a href="#!" class="text-decoration-none text-white">Servicios</a></p>
                        <p><a href="{{ route('productos') }}" class="text-decoration-none text-white">Productos</a></p>
                    </div>

                    <!-- Columna derecha -->
                    <div class="col-md-3 mb-4 text-left">
                        <h6 class="fw-bold mb-4 fs-4">Soporte</h6>
                        <p><a href="{{ route('contacto') }}" class="text-decoration-none text-white">Contacto</a></p>
                        <p><a href="{{ route('cotizar') }}" class="text-decoration-none text-white">Cotizar</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
