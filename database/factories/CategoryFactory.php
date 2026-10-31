<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravel\Mcp\Server\Transport\FakeTransporter;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->randomElement(['T-shirt', "Shoes", "Bags"]),
            'description' =>fake()->text(20),
        ];
    }
}
