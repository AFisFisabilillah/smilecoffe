<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->unique()->userName(),
            "description" => fake()->paragraph(2),
            "id_category" => Categories::factory(),
            "price" => fake()->randomNumber(4),
            "quantity" => fake()->randomNumber(2) 

        ];
    }
}
