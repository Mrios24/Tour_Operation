<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Chofer;

class ChoferTest extends TestCase
{
    //test
    public function test_obtenerCodigo()
    {

        $chofer = new Chofer('CHO-0001', 'Fabian Rodriguez', 'Chofer terrrestre');

        $codigo = $chofer->obtenerCodigo();

        $this->assertEquals($codigo, 'CHO-0001');
    }

    public function test_ActualizarCodigo()
    {

        $chofer = new Chofer('CHO-0001', 'Fabian Rodriguez', 'Chofer terrrestre');

        $codigo = $chofer->ActualzarCodigo('CHO-0002');

        $this->assertEquals($codigo, 'CHO-0002');
    }
}