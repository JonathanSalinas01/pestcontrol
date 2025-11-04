<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8cc79aff1.js" crossorigin="anonymous"></script>
    <title>PestControl</title>
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-around align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/logo-pest control.png') }}" alt="Bootstrap" width="150"
                        height="150">
                </a>
                <div class="container d-flex justify-content-center align-items-center gap-4">
                    <a class="navbar-brand" href="#">Inicio</a>
                    <a class="navbar-brand text-center" href="#">Sobre<br>nosotros</a>
                    <a class="navbar-brand" href="#">Servicios</a>
                    <a class="navbar-brand" href="#">Productos</a>
                    <a class="navbar-brand" href="#">Contacto</a>
                </div>
                <div>
                    <button type="button" class="btn btn-success">Cotizar ahora</button>
                </div>
            </div>
        </nav>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center mt-5">
        <section>
            <div class="card mb-3 text-bg-success" style="max-width: 950px; border-radius: 30px; min-height: 400px;">
                <div class="row g-0 h-100 p-3">
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="card-body">
                            <h1 class="card-title fs-1 fw-bold">Soluciones efectivas contra plagas</h1>
                            <p class="card-text fs-4 fw-medium mt-4">Protegemos su hogar, negocio, silos y embarcaciones
                                con
                                tecnología avanzada
                                y servicio profesional.</p>
                            <button type="button" class="btn btn-light btn-lg fw-bolder text-success mt-4">
                                Obtené cotización rápida
                            </button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/fumigando arboles.png') }}" class="img-fluid rounded h-100"
                            style="object-fit: cover;" alt="hombre fumigando árboles">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="m-5 text-center fw-bold p-3">¿Por qué elegir PestControl?</h2>
            <div class="card-group mt-4 p-3">
                <div class="card justify-content-center align-items-center border-0 p-3">
                    <i class="fa-regular fa-clock fs-1 d-flex text-success"></i>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title fw-bolder">Cotización rápida</h5>
                        <p class="card-text fs-5">Nuestro sistema calcula su presupuesto al instante. Sin demoras ni
                            esperas.</p>
                    </div>
                </div>
                <div class="card justify-content-center align-items-center border-0 p-3">
                    <i class="fa-solid fa-award fs-1 text-success"></i>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title fw-bolder">Técnicos certificados</h5>
                        <p class="card-text fs-5">Equipo profesional y calificado para garantizar un trabajo seguro y
                            eficiente.</p>
                    </div>
                </div>
                <div class="card justify-content-center align-items-center border-0 p-3">
                    <i class="fa-solid fa-boxes-packing fs-1 text-success"></i>
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <h5 class="card-title fw-bolder">Gestión de stock</h5>
                        <p class="card-text fs-5">Contamos con inventario propio de productos profesionales, también
                            disponibles para la venta.</p>
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
                </div>

                <!-- Columna centro -->
                <div class="col-md-3 mb-4 text-left ">
                    <h6 class="fw-bold mb-4 fs-4">Navegación</h6>
                    <p><a href="#!" class="text-decoration-none text-white">Inicio</a></p>
                    <p><a href="#!" class="text-decoration-none text-white">Sobre nosotros</a></p>
                    <p><a href="#!" class="text-decoration-none text-white">Servicios</a></p>
                    <p><a href="#!" class="text-decoration-none text-white">Productos</a></p>
                </div>

                <!-- Columna derecha -->
                <div class="col-md-3 mb-4 text-left">
                    <h6 class="fw-bold mb-4 fs-4">Soporte</h6>
                    <p><a href="#!" class="text-decoration-none text-white">Contacto</a></p>
                    <p><a href="#!" class="text-decoration-none text-white">Cotizar</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>



</body>

</html>
