<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];
    static public function getVehiculos()
    {
        return self::all();
    }
    static public function getVehiculosById($id)
    {
        return self::find($id);
    }
    static public function createVehiculo($data)
    {
        return self::create($data);
    }
    static public function updateVehiculo(Vehiculo $vehiculo, $data)
    {
        return $vehiculo->update($data);
    }
    static public function deleteVehiculo(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
    }
}
