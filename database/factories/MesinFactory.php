<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MesinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // di field apa aja 
            'nama_mesin' => $this->faker->citySuffix,
            'type_mesin' => $this->faker->streetName,
        ];
    }
}
