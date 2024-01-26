<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sexo'=> $this->faker->text(10),
            'pretencionEconomica'=> $this->faker->numerify('#####'),
            'telefono'=> $this->faker->text(10),
            'telefono2'=> $this->faker->text(10),
            'domicilio'=> $this->faker->text(10),
            'user_id'=> rand(7,9),
            'escolaridad_id'=> rand(1,10),
            'municipio_id'=> rand(1,2400), 
            
        ];
    }
}
