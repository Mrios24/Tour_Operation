<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function path()
    {
        return '/vehiculo/' . $this->id;
    }
}