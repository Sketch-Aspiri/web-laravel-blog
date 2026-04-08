<?php

namespace Database\Factories;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 4),
            'user_id' => fake()->numberBetween(1, 20),
            'title' => fake()->sentence(8),
            'description' => fake()->paragraphs(2, true),
        ];
    }
}
