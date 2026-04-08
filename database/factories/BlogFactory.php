<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 20),
            'category_id' => fake()->optional()->numberBetween(1, 4),
            'title' => fake()->sentence(6),
            'slug' => fake()->unique()->slug(3),
            'excerpt' => fake()->paragraph(),
            'content' => fake()->paragraphs(4, true),
            'image' => fake()->imageUrl(800, 400, 'nature'),
            'published_at' => fake()->optional()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
