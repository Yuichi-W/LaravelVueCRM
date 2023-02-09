<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
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
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => ucfirst($this->faker->words(4, true)),
            'body' => ucfirst($this->faker->words(4, true)),
            'created_at' => $this->faker->dateTimeBetween('-30 days', now())
        ];
    }
}
