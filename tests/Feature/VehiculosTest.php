<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use app\Models;
use App\Models\Vehiculos;

class VehiculosTest extends TestCase
{
    /**@test */
    public function test_obtenerCodigo()
    {

        $vehiculo = new Vehiculos('VEH-0001', 'Buseta', 'terrrestre');

        $codigo = $vehiculo->obtenerCodigo();

        $this->assertEquals($codigo, 'VEH-0001');
    }

    public function test_ActualizarCodigo()
    {

        $vehiculo = new Vehiculos('VEH-0001', 'Buseta', 'terrrestre');

        $codigo = $vehiculo->ActualzarCodigo('VEH-0002');

        $this->assertEquals($codigo, 'VEH-0002');
    }
}