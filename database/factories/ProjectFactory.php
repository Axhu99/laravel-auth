<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $title = fake()->text(20);
        return [
            'title' => fake()->text(20),
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(15, true),
            'image' => fake()->imageUrl(250, 250, true),
        ];
    }
}
