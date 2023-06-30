<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->paragraph(1),
            'description' => fake()->paragraph(3),
            'status' => rand(0,1),
        ];
    }
}
