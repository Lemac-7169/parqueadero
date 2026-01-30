<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VehiculoController;

Route::get('/', function () {

    return redirect()->route('vehiculos.index');

});

Route::resource('vehiculos', VehiculoController::class);
