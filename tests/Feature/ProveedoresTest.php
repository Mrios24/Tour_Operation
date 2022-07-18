<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Proveedores;


class ProveedoresTest extends TestCase
{

    /**@test */
    public function test_un_proveedor_tiene_path()
    {
        $proveedor = Proveedores::factory()->create();


        $this->assertEquals($proveedor->path(), '/proveedor/' . $proveedor->id);
    }

    /**@test */
    public function test_puedo_ver_un_proveedor()
    {
        $proveedor = Proveedores::factory()->create();

        $response = $this->get($proveedor->path());

        $response->assertStatus(200)
            ->assertSee($proveedor->code);
    }
}