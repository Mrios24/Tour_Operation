<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    public $codigo;
    public $estado;
    public $numeroDePasajero;
    public $numeroDeVuelo;
    public $descripcion;
    public $chofer;
    public $vehiculo;

    public function __construct($codigo, $estado, $numeroDePasajero, $numeroDeVuelo, $descripcion, $chofer, $vehiculo)
    {
        $this->codigo = $codigo;
        $this->estado = $estado;
        $this->numeroDePasajero = $numeroDePasajero;
        $this->numeroDeVuelo = $numeroDeVuelo;
        $this->descripcion = $descripcion;
        $this->chofer = $chofer;
        $this->vehiculo = $vehiculo;
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