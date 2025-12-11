<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8cc79aff1.js" crossorigin="anonymous"></script>
    <title>Contacto - PestControl</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{ asset('images/logo-pest control.png') }}" alt="logo de PestControl" width="150"
                        height="150">
                </a>

                <div class="d-flex justify-content-center align-items-center gap-4">
                    <a class="navbar-brand" href="{{route('home')}}">Inicio</a>
                    <a class="navbar-brand text-center" href="{{route('acerca')}}">Sobre<br>nosotros</a>
                    <a class="navbar-brand" href="{{route('servicios')}}">Servicios</a>
                    <a class="navbar-brand" href="{{route('productos')}}">Productos</a>
                    <a class="navbar-brand" href="#">Contacto</a>
                </div>

                <a href="{{route('cotizar')}}"><button type="button" class="btn btn-success">Cotizar ahora</button></a>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h1 class="fw-bold text-center">Contacto</h1>
        </section>
        <section class="container mt-5 mb-5">
            <div class="row justify-content-center align-items-start">

                <div class="col-md-6 mb-4">
                    
                    {{-- MENSAJE DE ÉXITO --}}
                    @if (session('info'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>¡Éxito!</strong> {{ session('info') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- INICIO DEL FORMULARIO --}}
                    {{-- Agregamos la ruta en el action --}}
                    <form action="{{ route('contacto.store') }}" method="POST" class="p-3 border rounded shadow-sm">
                        
                        {{-- TOKEN DE SEGURIDAD OBLIGATORIO --}}
                        @csrf

                        <label for="nombre" class="fw-bold fs-5">Nombre completo</label>
                        <input type="text" class="form-control mb-3 @error('nombre') is-invalid @enderror" 
                               id="nombre" name="nombre" value="{{ old('nombre') }}"
                               placeholder="Ingrese su nombre completo">
                        
                        {{-- Mostrar error de validación --}}
                        @error('nombre')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror

                        <label for="email" class="fw-bold fs-5">Correo electrónico</label>
                        <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email') }}"
                               placeholder="Ingrese su correo electrónico">

                        @error('email')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror

                        <label for="mensaje" class="fw-bold fs-5">Mensaje</label>
                        <textarea class="form-control mb-3 @error('mensaje') is-invalid @enderror" 
                                  id="mensaje" name="mensaje" rows="4" 
                                  placeholder="Escriba su mensaje aquí">{{ old('mensaje') }}</textarea>

                        @error('mensaje')
                            <span class="text-danger small">{{ $message }}</span>
                        @enderror

                        <button type="submit" class="btn btn-success w-100 mt-2">Enviar mensaje</button>
                    </form>
                    {{-- FIN DEL FORMULARIO --}}

                </div>

                <div class="col-md-5 text-center">
                    <h2 class="fw-bold mb-4">Otras formas de contactarnos</h2>

                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <i class="fa-solid fa-location-dot fs-2 me-3 text-success"></i>
                        <div>
                            <h4 class="m-0">Dirección</h4>
                            <p class="fs-5 m-0">Avenida Siempre Viva 742</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center mb-3">
                        <i class="fa-solid fa-phone fs-2 me-3 text-success"></i>
                        <div>
                            <h4 class="m-0">Teléfono</h4>
                            <p class="fs-5 m-0">+1 234 567 890</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-envelope fs-2 me-3 text-success"></i>
                        <div>
                            <h4 class="m-0">Correo electrónico</h4>
                            <p class="fs-5 m-0">contacto@pestcontrol.com</p>
                        </div>
                    </div>
                </div>

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
                        <p><a href="{{route('home')}}" class="text-decoration-none text-white">Inicio</a></p>
                        <p><a href="{{route('acerca')}}" class="text-decoration-none text-white">Sobre nosotros</a></p>
                        <p><a href="{{route('servicios')}}" class="text-decoration-none text-white">Servicios</a></p>
                        <p><a href="{{route('productos')}}" class="text-decoration-none text-white">Productos</a></p>
                    </div>

                    <!-- Columna derecha -->
                    <div class="col-md-3 mb-4 text-left">
                        <h6 class="fw-bold mb-4 fs-4">Soporte</h6>
                        <p><a href="#!" class="text-decoration-none text-white">Contacto</a></p>
                        <p><a href="{{route('cotizar')}}" class="text-decoration-none text-white">Cotizar</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
