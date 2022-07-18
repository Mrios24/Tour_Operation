<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Cliente;


class clienteTest extends TestCase
{

    /**@test */
    public function test_un_cliente_tiene_path()
    {
        $cliente = Cliente::factory()->create();


        $this->assertEquals($cliente->path(), '/cliente/' . $cliente->id);
    }

    /**@test */
    public function test_puedo_ver_un_cliente()
    {
        $cliente = Cliente::factory()->create();

        $response = $this->get($cliente->path());

        $response->assertStatus(200)
            ->assertSee($cliente->code);
    }
}