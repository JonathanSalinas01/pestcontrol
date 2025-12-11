@extends('adminlte::page')

@section('title', 'Actualizar Stock')

@section('content_header')
    <h1>Gestión de Inventario</h1>
@stop

@section('content')
    {{-- Mensaje de éxito si existe --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="mb-3">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{ route('panelProductos') }}" class="btn btn-outline-success btn-sm">Agregar nuevo producto</a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-secondary btn-sm disabled">Actualizar Stock</a>
            </li>
        </ul>
    </div>

    <div class="card">
        <div class="card-header bg-dark">
            <h3 class="card-title">Listado de Productos</h3>
        </div>
        <div class="card-body p-0">
            <ul class="list-group list-group-flush">
                @forelse($productos as $producto)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            
                            <div>
                                <h5 class="mb-1 font-weight-bold">{{ $producto->nombre }}</h5>
                                <p class="mb-0 text-muted">
                                    Stock actual: 
                                    <span class="badge {{ $producto->stock > 0 ? 'badge-info' : 'badge-danger' }}">{{ $producto->stock }}</span>
                                </p>
                            </div>

                            <div style="width: 250px;"> <form action="{{ route('productos.actualizarStock', $producto->id_producto) }}" method="POST" class="d-flex">
                                    @csrf
                                    @method('PATCH')
                                    
                                    <div class="input-group input-group-sm">
                                        <input type="number" 
                                               name="nuevo_stock" 
                                               class="form-control" 
                                               value="{{ $producto->stock }}" 
                                               min="0"
                                               required>
                                        <span class="input-group-append">
                                            <button type="submit" class="btn btn-primary btn-flat">Actualizar</button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </li>
                @empty
                    <li class="list-group-item text-center">No hay productos registrados.</li>
                @endforelse
            </ul>
        </div>
    </div>
@stop

        {{-- <div class="mb-3">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{ route('panelProductos') }}" class="btn btn-success btn-sm">Agregar nuevo producto</a>
            </li>
            <li class="list-inline-item">
                <a href="#" class="btn btn-outline-secondary btn-sm">Actualizar Stock</a>
            </li>
        </ul>
    </div> --}}