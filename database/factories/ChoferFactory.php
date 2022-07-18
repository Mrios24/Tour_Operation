<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChoferFactory extends Factory
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
            'tipo_Chofer' => $this->faker->name()

        ];
    }
}