<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;
    public $codigo;
    public $comisiones;
    public $codigo_gastos;
    public $codigo_servicios;

    public function __construct($codigo, $comisiones, $codigo_gastos, $codigo_servicios)
    {
        $this->codigo = $codigo;
        $this->comisiones = $comisiones;
        $this->codigcodigo_gastoso = $codigo_gastos;
        $this->codigo_servicios = $codigo_servicios;
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