@extends('adminlte::page')

@section('title', 'Lista de Cotizaciones')

@section('content_header')
    <h1>Gestión de Cotizaciones</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Listado Completo</h3>
        </div>

        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th>Precio Est.</th>
                    </tr>
                </thead>
<tbody>
    @forelse ($cotizaciones as $cotizacion)
        <tr>
            <td>{{ $cotizacion->id_cotizacion }}</td>
            <td>{{ $cotizacion->fecha }}</td>
            <td>
                {{-- Formulario update status --}}
                <form action="{{ route('cotizaciones.updateStatus', $cotizacion->id_cotizacion) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    {{-- Select con lógica para detectar el estado actual EN MAYÚSCULAS --}}
                    <select name="estado"
                            class="form-control form-control-sm font-weight-bold
                            {{ $cotizacion->estado == 'ACEPTADO' ? 'text-success border-success' :
                              ($cotizacion->estado == 'RECHAZADO' ? 'text-danger border-danger' : 'text-warning border-warning') }}"
                            onchange="this.form.submit()">

                        <option value="PENDIENTE" {{ $cotizacion->estado == 'PENDIENTE' ? 'selected' : '' }}>
                            PENDIENTE
                        </option>

                        <option value="ACEPTADO" {{ $cotizacion->estado == 'ACEPTADO' ? 'selected' : '' }}>
                            ACEPTADO
                        </option>

                        <option value="RECHAZADO" {{ $cotizacion->estado == 'RECHAZADO' ? 'selected' : '' }}>
                            RECHAZADO
                        </option>
                    </select>
                </form>
            </td>
            <td>${{ $cotizacion->precio_estimado }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">No hay cotizaciones registradas.</td>
        </tr>
    @endforelse
</tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- Aquí podrías agregar estilos extra si los necesitas --}}
@stop

@section('js')
    <script>
        console.log("Vista de cotizaciones cargada correctamente");
    </script>
@stop
