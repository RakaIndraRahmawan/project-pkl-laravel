<?php

namespace Database\Factories;

use App\Models\Homepage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Homepage>
 */
class HomepageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hero_title' => fake()->sentence(),
            'hero_subtitle' => fake()->paragraph(),
            'hero_image' => fake()->imageUrl(),

            'about_title' => fake()->sentence(),
            'about_desc' => fake()->paragraph(),
            'about_image' => fake()->imageUrl(),

            'contact_email' => fake()->email(),
            'contact_phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'facebook_url' => fake()->url(),
            'instagram_url' => fake()->url(),
            'twitter_url' => fake()->url(),
        ];
    }
}
