<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Gastos;

class GastosTest extends TestCase
{
    //test
    public function test_obtenerCodigo()
    {

        $gastos = new Gastos('GAS-0001', 'Pago de Empleados', '2022-07-07', 'Pago de planilla a los empleados', 'No APLICA');

        $codigo = $gastos->obtenerCodigo();

        $this->assertEquals($codigo, 'GAS-0001');
    }

    public function test_ActualizarCodigo()
    {

        $gastos = new Gastos('GAS-0001', 'Pago de Empleados', '2022-07-07', 'Pago de planilla a los empleados', 'No APLICA');

        $codigo = $gastos->ActualzarCodigo('GAS-0002');

        $this->assertEquals($codigo, 'GAS-0002');
    }
}