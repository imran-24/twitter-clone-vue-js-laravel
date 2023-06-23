<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> fake()->name(),
            'handle'=> fake()->userName(),
            'image'=> fake()->imageUrl(),
            'tweet'=> fake()->text(),
            'file'=> fake()->imageUrl(),
            'is_video'=> true,
            'comments'=> fake()->numberBetween(100, 200),
            'retweets'=> fake()->numberBetween(100, 200),
            'likes'=> fake()->numberBetween(100, 200),
            'analytics'=> fake()->numberBetween(100, 200),
        ];
    }
}
