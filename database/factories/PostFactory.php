<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Oracion
            'title' => $this->faker->sentence(),
            // Texto
            'content' => $this->faker->text(1000),
            // Palabra
            'category' => $this->faker->word(),
            // Fecha
            'published_at' => $this->faker->dateTime()
        ];
    }
}
