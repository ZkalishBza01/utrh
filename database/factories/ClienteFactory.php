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
            'giro'=> $this->faker->text(20),
            'user_id'=> rand(10,12),
        ];
    }
}
