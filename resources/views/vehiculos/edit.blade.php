@extends('layouts.app')
@section('titulo', 'Editar Vehículo')
@section('contenido')
    <h1>Editar Vehículo</h1>
    <form action="{{ route('vehiculos.update', $vehiculo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Placa *</label>
            <input type="text" name="placa" class="form-control" value="{{
$vehiculo->placa }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo *</label>
            <select name="tipo" class="form-select" required>
                <option value="Automóvil" {{ $vehiculo->tipo == 'Automóvil' ?
'selected' : '' }}>Automóvil</option>
                <option value="Motocicleta" {{ $vehiculo->tipo == 'Motocicleta'
? 'selected' : '' }}>Motocicleta</option>
                <option value="Camioneta" {{ $vehiculo->tipo == 'Camioneta' ?
'selected' : '' }}>Camioneta</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Propietario</label>
            <input type="text" name="propietario" class="form-control"
                   value="{{ $vehiculo->propietario }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Observaciones</label>
            <textarea name="observaciones" class="form-control" rows="3">{{
$vehiculo->observaciones }}</textarea>
        </div>
        <a href="{{ route('vehiculos.index') }}" class="btn
btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection
