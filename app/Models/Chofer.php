<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chofer extends Model
{
    use HasFactory;
    public $codigo;
    public $nombre;
    public $tipoChofer;

    public function __construct($codigo, $nombre, $tipoChofer)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->tipoChofer = $tipoChofer;
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