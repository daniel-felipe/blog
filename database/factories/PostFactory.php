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
    public function definition()
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'slug' => str()->slug($title),
            'content' => fake()->paragraph(),
            'thumb' => fake()->sentence().'png',
            'published_at' => fake()->date(),
            'category_id' => fake()->numberBetween(1, 3),
            'author_id' => fake()->numberBetween(1, 10),
        ];
    }
}
