<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8cc79aff1.js" crossorigin="anonymous"></script>
    <title>Acerca de - PestContrl</title>
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
    <main>
        <h1 class="fw-bold text-center">Sobre PestControl</h1>
        <section class="d-flex flex-column justify-content-center align-items-center my-5">
            <article>
                <div class="card mb-3" style="max-width: 950px; border-radius: 30px; min-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-start p-3">
                            <img src="{{ asset('images/fumigando cocina.png') }}" alt="personas fumigando cocina"
                                class="img-fluid rounded" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold fs-4">Nuestra historia</h5>
                                <p class="card-text fs-5">
                                    Nacimos de la necesidad de modernizar el control de plagas en hogares y negocios. Lo
                                    que comenzó como un pequeño emprendimiento familiar, hoy es una empresa líder en el
                                    sector, gracias a nuestro compromiso con la calidad y la innovación.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="card mb-3" style="max-width: 950px; border-radius: 30px; min-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-start p-3">
                            <img src="{{ asset('images/fumigando plantas.png') }}" alt="personas fumigando plantas"
                                class="img-fluid rounded" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold fs-4">Misión</h5>
                                <p class="card-text fs-5">
                                    Optimizar la operatividad de nuestros clientes mediante un sistema que integre
                                    atención al cliente, cotizaciones y control de inventario, brindando un servicio
                                    ágil, transparente y eficiente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="card mb-3" style="max-width: 950px; border-radius: 30px; min-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-start p-3">
                            <img src="{{ asset('images/fumigando fabrica.png') }}" alt="personas fumigando fabrica"
                                class="img-fluid rounded" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold fs-4">Visión</h5>
                                <p class="card-text fs-5">
                                    Posicionarnos como líderes en el mercado de control de plagas a través de la
                                    transformación digital, siendo un referente de profesionalismo y confianza.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <article>
                <div class="card mb-3" style="max-width: 950px; border-radius: 30px; min-height: 300px;">
                    <div class="row g-0">
                        <div class="col-md-4 d-flex justify-content-center align-items-start p-3">
                            <img src="{{ asset('images/fumigando cocina.png') }}" alt="personas fumigando cocina"
                                class="img-fluid rounded" />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-success fw-bold fs-4">Valores</h5>
                                <p class="card-text fs-5">
                                    Nacimos de la necesidad de modernizar el control de plagas en hogares y negocios. Lo
                                    que comenzó como un pequeño emprendimiento familiar, hoy es una empresa líder en el
                                    sector, gracias a nuestro compromiso con la calidad y la innovación.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>


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
