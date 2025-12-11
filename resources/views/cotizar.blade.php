<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8cc79aff1.js" crossorigin="anonymous"></script>
    <title>Cotizar - PestControl</title>
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
                    <a class="navbar-brand" href="{{ route('servicios') }}">Servicios</a>
                    <a class="navbar-brand" href="{{ route('productos') }}">Productos</a>
                    <a class="navbar-brand" href="{{ route('contacto') }}">Contacto</a>
                </div>

                <a href="#"><button type="button" class="btn btn-success">Cotizar ahora</button></a>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h1 class="fw-bold text-center">Cotización en línea</h1>
            <h2 class="text-center">Responda estas preguntas y obtenga un presupuesto estimado al instante.</h2>
        </section>
        <section class="d-flex justify-content-center align-items-center mt-5 ">
            {{-- BLOQUE PARA MOSTRAR ERRORES --}}
            @if ($errors->any())
                <div class="alert alert-danger w-75">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- BLOQUE DE PRUEBA: VER SI LLEGA EL PRECIO --}}
            @if (session('precio_calculado'))
                <div class="alert alert-success w-75">
                    TEST: El precio calculado es: {{ session('precio_calculado') }}
                </div>
            @endif

            {{-- 1. CAMBIO AQUÍ: Agregamos la ruta y el método POST --}}
            <form action="{{ route('cotizar.calcular') }}" method="post" class="w-75 d-flex flex-column gap-4">

                {{-- 2. CAMBIO AQUÍ: Token de seguridad obligatorio en Laravel --}}
                @csrf

                <label for="espacio" class="fw-bold fs-4">1. Tipo de espacio</label>
                <select class="form-select" aria-label="Default select example" name="espacio" required>
                    <option selected disabled value="">Seleccionar tipo de espacio</option>
                    @foreach ($servicios as $servicio)
                        <option value="{{ $servicio->id_servicios }}">{{ $servicio->nombre }}</option>
                    @endforeach
                </select>

                <label for="tamaño" class="fw-bold fs-4">2. Tamaño del lugar (en m^2)</label>
                <input type="number" class="form-control" id="tamaño" name="tamaño"
                    placeholder="Ingrese el tamaño en m^2. Ejemplo: 50" required>

                <label class="fw-bold fs-4 mb-3">3. Seleccione las plagas detectadas</label>

                <div class="row g-3">
                    @foreach ($plagas as $plaga)
                        <div class="col-6 col-md-4 col-lg-3">
                            <input type="checkbox" class="btn-check" name="plagas[]" value="{{ $plaga->id_plaga }}"
                                id="plaga_{{ $plaga->id_plaga }}" autocomplete="off">

                            <label
                                class="btn btn-outline-success w-100 py-3 h-100 d-flex flex-column align-items-center justify-content-center"
                                for="plaga_{{ $plaga->id_plaga }}">
                                <span class="fw-bold">{{ $plaga->plaga }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-success mt-3 w-100">Obtener cotización</button>
            </form>
        </section>
    </main>
    <footer>
        <section class="azul-footer text-white text-center text-md-start mt-5 py-4">
            <div class="container-fluid px-5">
                <div class="d-flex justify-content-between align-items-start flex-wrap">
                    <div class="col-md-3 mb-4">
                        <h6 class="fw-bold mb-4 fs-2">PestControl</h6>
                        <p class="fs-5">Modernizando el control de plagas con tecnología y profesionalismo.</p>
                        <div>
                            <a href="#!" class="text-white me-4"><i class="fab fa-facebook-f fs-4"></i></a>
                            <a href="#!" class="text-white me-4"><i class="fab fa-twitter fs-4"></i></a>
                            <a href="#!" class="text-white me-4"><i class="fab fa-instagram fs-4"></i></a>
                        </div>
                    </div>

                    <div class="col-md-3 mb-4 text-left ">
                        <h6 class="fw-bold mb-4 fs-4">Navegación</h6>
                        <p><a href="{{ route('home') }}" class="text-decoration-none text-white">Inicio</a></p>
                        <p><a href="{{ route('acerca') }}" class="text-decoration-none text-white">Sobre nosotros</a>
                        </p>
                        <p><a href="{{ route('servicios') }}" class="text-decoration-none text-white">Servicios</a></p>
                        <p><a href="{{ route('productos') }}" class="text-decoration-none text-white">Productos</a></p>
                    </div>

                    <div class="col-md-3 mb-4 text-left">
                        <h6 class="fw-bold mb-4 fs-4">Soporte</h6>
                        <p><a href="{{ route('contacto') }}" class="text-decoration-none text-white">Contacto</a></p>
                        <p><a href="#!" class="text-decoration-none text-white">Cotizar</a></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    {{-- 3. MODAL DE RESULTADO (Oculto por defecto) --}}
    <div class="modal fade" id="modalPrecio" tabindex="-1" aria-labelledby="modalPrecioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="modalPrecioLabel">¡Cotización Lista!</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <i class="fas fa-calculator text-success mb-3" style="font-size: 3rem;"></i>
                    <h4>Estimado del servicio:</h4>

                    {{-- Mostramos el precio si la sesión lo tiene --}}
                    @if (session('precio_calculado'))
                        <h1 class="display-4 fw-bold text-success my-3">
                            ${{ number_format(session('precio_calculado'), 0, ',', '.') }}
                        </h1>
                    @endif

                    <p class="text-muted small">Este precio incluye visita técnica, insumos y garantía.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>

                    {{-- FORMULARIO OCULTO PARA GUARDAR --}}
                    <form action="{{ route('cotizar.guardar') }}" method="POST">
                        @csrf
                        {{-- Aquí pasamos el precio que está en la sesión al controlador --}}
                        <input type="hidden" name="precio_estimado" value="{{ session('precio_calculado') }}">

                        <button type="submit" class="btn btn-primary">Agendar Ahora</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- 4. JAVASCRIPT DE BOOTSTRAP --}}
    {{-- IMPORTANTE: Necesitas el JS de Bootstrap para que el modal funcione. --}}
    {{-- Si tienes el archivo descargado usa esta línea: --}}


    {{-- Si NO tienes el archivo JS descargado, borra la linea de arriba y usa esta CDN: --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    {{-- 5. SCRIPT DE ACTIVACIÓN AUTOMÁTICA --}}
    @if (session('precio_calculado'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Selecciona el modal por su ID
                var modalElement = document.getElementById('modalPrecio');
                // Crea una instancia de Bootstrap Modal
                var myModal = new bootstrap.Modal(modalElement);
                // Muestralo
                myModal.show();
            });
        </script>
    @endif

</body>

</html>
