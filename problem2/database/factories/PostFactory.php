<?php

namespace Database\Factories;

use App\Models\User;
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
        // This facture will create posts for randomly all users except user
        // with ID 1, that user will has no posts so he should not be appears
        // in the controller response
        return [
            'title' => fake()->sentence,
            'body' => fake()->paragraphs(5, true),
            'user_id' => User::where('id', '<>', 1)->inRandomOrder()->first()->id,
        ];
    }
}
