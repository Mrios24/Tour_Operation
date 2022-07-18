<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GastosFactory extends Factory
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
            'tipo_gasto' => $this->faker->bothify('????'),
            'fecha' => $this->faker->date(),
            'descripcion' => $this->faker->name(),
            'vehiculo' => $this->faker->bothify('???-####')


        ];
    }
}