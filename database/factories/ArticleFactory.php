<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(6),
            'description' => $this->faker->paragraphs(3, true),
            'date'        => $this->faker->date(), // Y-m-d
        ];
    }
}
