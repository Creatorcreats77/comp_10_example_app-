<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'model' => fake()->randomElement(["BMW", 'Lexus', 'Toyota', 'Jetour', 'KIA', 'Ferrari']),
            'price' => fake()->numberBetween(10000, 99999),
            'car_type' => fake()->randomElement(['Jip', 'Sedan', 'Pikap']),
            'car_color' => fake()->colorName(),
            'car_year' => fake()->year(),
            "country" => fake()->country(),
        ];
    }
}
