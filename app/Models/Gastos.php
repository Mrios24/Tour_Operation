<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gastos extends Model
{
    use HasFactory;
    public $codigo;
    public $tipoGasto;
    public $fecha;
    public $descripcion;
    public $vehiculo;

    public function __construct($codigo, $tipoGasto, $fecha, $descripcion, $vehiculo)
    {
        $this->codigo = $codigo;
        $this->tipoGasto = $tipoGasto;
        $this->fecha = $fecha;
        $this->descripcion = $descripcion;
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