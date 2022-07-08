<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Cliente;


class clienteTest extends TestCase
{
    //test
    public function test_obtenerCedula()
    {

        $cliente = new Cliente('11813029', 'Mauricio', 24, '60672958', 'maurios24@gmail.com', 'Filadelfia, Carrillo');

        $cedula = $cliente->obtenerCedula();

        $this->assertEquals($cedula, '11813029');
    }

    public function test_obtenerNombre()
    {

        $cliente = new Cliente('509895648', 'Carlos', 21, '85698745', 'carlosRodri@gmail.com', 'San Jose, San Jose');

        $nombre = $cliente->obtenerNombre();

        $this->assertEquals($nombre, 'Carlos');
    }

    public function test_actualizarNombre()
    {

        $cliente = new Cliente('509895648', 'Carlos', 21, '85698745', 'carlosRodri@gmail.com', 'San Jose, San Jose');

        $nombre = $cliente->actualizarNombre('Fabian');

        $this->assertEquals($nombre, 'Fabian');
    }
}