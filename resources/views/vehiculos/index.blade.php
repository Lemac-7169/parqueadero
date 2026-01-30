@extends('layouts.app')
@section('titulo', 'Vehículos')
@section('contenido')
    <div class="d-flex justify-content-between mb-3">
        <h1>Vehículos</h1>
        <a href="{{ route('vehiculos.create') }}" class="btn
btn-primary">Nuevo</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</t
                <th>Propietario</th>
                <th>Ingreso</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->tipo }}</td>
                    <td>{{ $vehiculo->propietario ?? '-' }}</td>
                    <td>{{ $vehiculo->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a href="{{ route('vehiculos.edit', $vehiculo) }}"
                           class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('vehiculos.destroy', $vehiculo)
}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Eliminar?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
