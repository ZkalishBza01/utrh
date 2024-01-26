<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VacanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->text(50),
            'descripcion'=> $this->faker->text(100),
            'observaciones'=> $this->faker->text(800),
            'sueldo'=> $this->faker->numerify('#####-#####'),
            'municipio_id'=> rand(1,100),
            'reclutador_id'=> rand(4,6),
            'cliente_id'=> rand(1,11),

        ];
    }
}
