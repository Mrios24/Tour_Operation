<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VehiculosFactory extends Factory
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
            'detalle' => $this->faker->name(),
            'tipo_vehiculo' => $this->faker->name()

        ];
    }
}