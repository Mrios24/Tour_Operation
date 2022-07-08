<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Models;
use App\Models\Servicio;

class ServicioTest extends TestCase
{
    /**@test */
    public function test_obtenerCodigo()
    {

        $servicio = new Servicio('SER-0001', 'EN PROCESO', 'PAS-0001', 'VUE-0001', 'Servicio de transporte', 'CHO-0001', 'VEH-0001');

        $codigo = $servicio->obtenerCodigo();

        $this->assertEquals($codigo, 'SER-0001');
    }

    public function test_ActualizarCodigo()
    {

        $servicio = new Servicio('SER-0001', 'EN PROCESO', 'PAS-0001', 'VUE-0001', 'Servicio de transporte', 'CHO-0001', 'VEH-0001');

        $codigo = $servicio->ActualzarCodigo('SER-0002');

        $this->assertEquals($codigo, 'SER-0002');
    }
}