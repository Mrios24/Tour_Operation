<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Gastos;

class GastosTest extends TestCase
{
    /**@test */
    public function test_un_gasto_tiene_path()
    {
        $gastos = Gastos::factory()->create();


        $this->assertEquals($gastos->path(), '/gastos/' . $gastos->id);
    }

    /**@test */
    public function test_puedo_ver_un_gasto()
    {
        $gastos = Gastos::factory()->create();

        $response = $this->get($gastos->path());

        $response->assertStatus(200)
            ->assertSee($gastos->code);
    }
}