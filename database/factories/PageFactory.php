<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => fake()->slug(),
            'title' => fake()->sentence(),
            'tag' => fake()->randomElement(['service', 'portfolio']),
            'image' => fake()->imageUrl(),
            'desc' => fake()->paragraph(),
            'content' => fake()->paragraphs(3, true),
        ];
    }
}
