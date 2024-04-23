<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('es_ES'); // Establece el idioma español

        return [
            "name" => $faker->name(),
            "short_description" => $faker->sentence(),
            "description" => $faker->paragraph(3),
            "price" => $faker->numberBetween(1, 125),
        ];
    }
}
