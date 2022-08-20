<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JahitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_toko' => $this->faker->company(),
            'harga' => $this->faker->numerify('#####'),
            'ukuran' => $this->faker->randomElement(['S','M','L','XL','XXL']),
            'jenis' => $this->faker->sentence(2, true)
        ];
    }
}
