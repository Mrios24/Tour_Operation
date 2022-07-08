<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Models;
use App\Models\Reservaciones;

class ReservasTest extends TestCase
{
    /**@test */
    public function test_obtenerCodigo()
    {

        $reporte = new Reservaciones('RES-0001', '541256987', 'SER-0001', 'PAG-0001', 'PRO-0001', 'NINGUNA', '2020-07-07 00:38', '2020-07-07 00:38');

        $codigo = $reporte->obtenerCodigo();

        $this->assertEquals($codigo, 'RES-0001');
    }

    public function test_ActualizarCodigo()
    {

        $reporte = new Reservaciones('RES-0001', '541256987', 'SER-0001', 'PAG-0001', 'PRO-0001', 'NINGUNA', '2020-07-07 00:38', '2020-07-07 00:38');

        $codigo = $reporte->ActualzarCodigo('RES-0002');

        $this->assertEquals($codigo, 'RES-0002');
    }
}