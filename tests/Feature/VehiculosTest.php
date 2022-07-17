<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use app\Models;
use App\Models\Vehiculos;
use App\Http\Controllers\VehiculosController;

class VehiculosTest extends TestCase
{
    /**@test */
    public function test_un_vehiculo_tiene_path()
    {
        $vehiculo = Vehiculos::factory()->create();


        $this->assertEquals($vehiculo->path(), '/vehiculo/' . $vehiculo->id);
    }

    /**@test */
    public function test_puedo_ver_un_vehiculo()
    {
        $vehiculo = Vehiculos::factory()->create();

        $response = $this->get($vehiculo->path());

        $response->assertStatus(200)
            ->assertSee($vehiculo->code);
    }
}