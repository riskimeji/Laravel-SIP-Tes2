<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    public function definition(): array
{
    $title = $this->faker->sentence;
    $randomParameter = Str::random(8); // Generate a random parameter
    $image = "https://source.unsplash.com/random/900x700/?novel&$randomParameter";

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'author' => $this->faker->name,
        'category' => $this->faker->word,
        'published' => $this->faker->date,
        'page' => $this->faker->numberBetween(100, 500),
        'stock' => $this->faker->numberBetween(1, 50),
        'description' => $this->faker->paragraph,
        'image' => $image,
    ];
}

}

