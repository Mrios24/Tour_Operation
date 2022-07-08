<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePago extends Model
{
    use HasFactory;
    public $codigo;
    public $tipoPago;

    public function __construct($codigo, $tipoPago)
    {
        $this->codigo = $codigo;
        $this->tipoPago = $tipoPago;
    }

    public function obtenerCodigo()
    {
        return $this->codigo;
    }

    public function obtenerTipoPago()
    {
        return $this->tipoPago;
    }

    public function actualizarTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;
        return $this->tipoPago;
    }
}