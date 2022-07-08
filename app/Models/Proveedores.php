<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    public $codigo;
    public $nombre;
    public $email;
    public $telefono;
    public $detalle;

    public function __construct($codigo, $nombre, $email, $telefono, $detalle)
    {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->detalle = $detalle;
    }

    public function obtenerCodigo()
    {
        return $this->codigo;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function actualizarNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this->nombre;
    }
}