<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Models;
use App\Models\Reporte;

class ReportesTest extends TestCase
{
    /**@test */
    public function test_obtenerCodigo()
    {

        $reporte = new Reporte('REP-0001', 'COM-0001', 'GAS-0001', 'SER-0001');

        $codigo = $reporte->obtenerCodigo();

        $this->assertEquals($codigo, 'REP-0001');
    }

    public function test_ActualizarCodigo()
    {

        $reporte = new Reporte('REP-0001', 'COM-0001', 'GAS-0001', 'SER-0001');

        $codigo = $reporte->ActualzarCodigo('REP-0002');

        $this->assertEquals($codigo, 'REP-0002');
    }
}