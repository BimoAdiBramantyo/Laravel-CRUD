<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition()
    {
        return [
            'publisher_id' => mt_rand(1,10),
            'Judul' => $this->faker->sentence(mt_rand(1,2)),
            'Pengarang' => $this->faker->name(),
            'Harga' => $this->faker->randomFloat(2, 0, 100000),
            'release' => now()
        ];
    }
}
