<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
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
            'cedula' => $this->faker->bothify('#-####-####'),
            'nombre' => $this->faker->name(),
            'edad' => $this->faker->bothify('##'),
            'telefono' => $this->faker->bothify('####-####'),
            'email' => $this->faker->email(),
            'direccion' => $this->faker->address()


        ];
    }
}