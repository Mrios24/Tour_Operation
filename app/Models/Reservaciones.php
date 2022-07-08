<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    use HasFactory;
    public $codigo;
    public $cedula;
    public $codigo_servicio;
    public $codigo_tipoPago;
    public $codigo_proveedor;
    public $observaciones;
    public $fecha_hora_servicio;
    public $fecha_hora_reserva;


    public function __construct($codigo, $cedula, $codigo_servicio, $codigo_tipoPago, $codigo_proveedor, $observaciones, $fecha_hora_servicio, $fecha_hora_reserva)
    {
        $this->codigo = $codigo;
        $this->cedula = $cedula;
        $this->codigo_servicio = $codigo_servicio;
        $this->codigo_tipoPago = $codigo_tipoPago;
        $this->codigo_proveedor = $codigo_proveedor;
        $this->observaciones = $observaciones;
        $this->fecha_hora_servicio = $fecha_hora_servicio;
        $this->fecha_hora_reserva = $fecha_hora_reserva;
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