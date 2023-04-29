<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_name' => fake()->unique()->words(5, asText: true),
            'book_description' => fake()->text(100),
            'book_author' => fake()->name,
            'book_editorial' => fake()->words(2, asText: true),
            'book_page_number' => fake()->numberBetween(50, 540),
            'book_publication_date' => fake()->date
        ];
    }
}
