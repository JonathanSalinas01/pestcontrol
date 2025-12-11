@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido al panel de Administación, {{ Auth::user()->name }}
        
    
@stop

@section('content')
    <br>
    <h3 class="mb-4">¿Qué deseas ver hoy?</h3>
    
    <section>
        <div class="container-fluid">
            <div class="row">
                
                {{-- TARJETA 1: Productos más vendidos --}}
                <div class="col-md-6 mb-3">
                    {{-- El 'a' envuelve todo para que sea un gran botón --}}
                    {{-- Pon aquí la ruta real, ej: route('productos.index') --}}
                    <a href="{{ url('/panelReportes') }}" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow hover-card bg-warning text-white">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center p-5">
                                {{-- Icono grande --}}
                                <i class="fas fa-star fa-4x mb-3"></i>
                                <h2 class="card-title fw-bold">Productos más vendidos</h2>
                                <p class="card-text">Ver el reporte de ventas</p>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- TARJETA 2: Ver cotizaciones --}}
                <div class="col-md-6 mb-3">
                    {{-- Pon aquí la ruta real, ej: route('cotizaciones.index') --}}
                    <a href="{{ url('/panelCotizaciones') }}" class="text-decoration-none text-dark">
                        <div class="card h-100 shadow hover-card bg-info text-white">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center p-5">
                                {{-- Icono grande --}}
                                <i class="fas fa-chart-line fa-4x mb-3"></i>
                                <h2 class="card-title fw-bold">Cotizaciones realizadas</h2>
                                <p class="card-text">Revisar cotizaciones pendientes</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Un poco de CSS extra para que se mueva al pasar el mouse --}}
    <style>
        .hover-card {
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .hover-card:hover {
            transform: translateY(-10px); /* Efecto de levantar */
            opacity: 0.9;
        }
    </style>
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop