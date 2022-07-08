<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Proveedores;


class ProveedoresTest extends TestCase
{
    //test
    public function test_obtenerCodigo()
    {

        $proveedor = new Proveedores('PRO-0001', 'TicoTours', 'ticotours@gmail.com', '26655889', 'Empresa de toures acuaticos');

        $codigo = $proveedor->obtenerCodigo();

        $this->assertEquals($codigo, 'PRO-0001');
    }

    public function test_obtenerNombre()
    {

        $proveedor = new Proveedores('PRO-0002', 'GuanacasteTours', 'guanatours@gmail.com', '41569874', 'Empresa de toures terrestres');

        $nombre = $proveedor->obtenerNombre();

        $this->assertEquals($nombre, 'GuanacasteTours');
    }

    public function test_actualizarNombre()
    {

        $proveedor = new Proveedores('PRO-0002', 'GuanacasteTours', 'guanatours@gmail.com', '41569874', 'Empresa de toures terrestres');

        $nombre = $proveedor->actualizarNombre('GuanaTours');

        $this->assertEquals($nombre, 'GuanaTours');
    }
}