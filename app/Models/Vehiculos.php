<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    public $codigo;
    public $nombre;
    public $tipoVehiculo;

    public function __construct($codigo, $nombre, $tipoVehiculo)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->tipoVehiculo = $tipoVehiculo;
    }

    public function obtenerCodigo()
    {
        return $this->codigo;
    }

    public function ActualzarCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this->codigo;
    }
}