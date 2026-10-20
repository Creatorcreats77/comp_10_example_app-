<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
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
            'email' => fake()->email(),
            'age' => fake()->numberBetween(18, 60),
            'skill' => fake()->randomElement(['Php', 'Laravel', 'Python', 'GO']),
            'skill_wanted' => fake()->randomElement(['Php', 'Laravel', 'Python', 'GO']),
        ];
    }
}
