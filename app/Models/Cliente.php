<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Cliente extends Model
{
    use HasFactory;

    public $cedula;
    public $nombre;
    public $edad;
    public $telefono;
    public $email;
    public $direccion;


    public function __construct($cedula, $nombre, $edad, $telefono, $email, $direccion)
    {
        $this->cedula = $cedula;
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->telefono = $telefono;
        $this->email = $email;
        $this->direccion = $direccion;
    }

    public function actualizarNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this->nombre;
    }

    public function obtenerCedula()
    {
        return $this->cedula;
    }



    public function obtenerEdad()
    {
        return $this->edad;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
}