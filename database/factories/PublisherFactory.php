<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PublisherFactory extends Factory
{
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' =>$this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->city()
        ];
    }
}
