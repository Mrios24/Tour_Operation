<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\TipoDePago;

class TipoDePagoTest extends TestCase
{
    //test
    public function test_obtenerCodigo()
    {

        $tipoPago = new TipoDePago('PA-0001', 'Tarjeta');

        $codigo = $tipoPago->obtenerCodigo();

        $this->assertEquals($codigo, 'PA-0001');
    }

    public function test_obtenerTipoPago()
    {

        $tipoPago = new TipoDePago('PA-0002', 'Efectivo');

        $tipoDePago = $tipoPago->obtenerTipoPago();

        $this->assertEquals($tipoDePago, 'Efectivo');
    }

    public function test_actualizarTipoDePago()
    {

        $tipoPago = new TipoDePago('PA-0001', 'Tarjeta');

        $tipoDePago = $tipoPago->actualizarTipoPago('Transferencia bancaria');

        $this->assertEquals($tipoDePago, 'Transferencia bancaria');
    }
}