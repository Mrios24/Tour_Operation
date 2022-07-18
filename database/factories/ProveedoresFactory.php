<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'codigo' => $this->faker->bothify('???-####'),
            'nombre' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telefono' => $this->faker->bothify('####-####'),
            'detalle' => $this->faker->address()


        ];
    }
}