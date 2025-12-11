@extends('adminlte::page')

@section('title', 'Gestion de Productos')

@section('content_header')
    <h1>Gestión de productos</h1>
@endsection

{{-- Eliminamos la sección vacía y movemos el contenido abajo --}}

@section('content')
    {{-- AQUÍ: Menú de opciones antes de la tarjeta --}}
    <div class="mb-3">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="#" class="btn btn-success btn-sm">Agregar nuevo producto</a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-outline-secondary btn-sm">Actualizar Stock</a>
            </li>
        </ul>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Inicio del Formulario --}}
    <div class="card">
        <div class="card-body">
            <h2>Agregar nuevo producto</h2>
            <form action="{{ route('productos.store') }}" method="POST" class="mt-5">
                @csrf
                <div class="mb-3">
                    <label for="nombreProducto" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nombreProducto" name="nombreProducto" required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="precioProducto" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precioProducto" name="precioProducto"
                                step="0.01" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="stockProducto" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stockProducto" name="stockProducto" required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="descripcionProducto" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcionProducto" name="descripcionProducto" rows="3" required></textarea>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-success">Agregar Producto</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('js')
    <script>
        console.log('Hola!');
    </script>
@endsection