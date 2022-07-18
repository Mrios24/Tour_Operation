<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Chofer;

class ChoferTest extends TestCase
{
    /**@test */
    public function test_un_chofer_tiene_path()
    {
        $chofer = Chofer::factory()->create();


        $this->assertEquals($chofer->path(), '/chofer/' . $chofer->id);
    }

    /**@test */
    public function test_puedo_ver_un_chofer()
    {
        $chofer = Chofer::factory()->create();

        $response = $this->get($chofer->path());

        $response->assertStatus(200)
            ->assertSee($chofer->code);
    }
}