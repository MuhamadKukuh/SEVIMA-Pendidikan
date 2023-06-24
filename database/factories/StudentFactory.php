<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "full_name" => fake()->name(),
            "nik"       => fake()->unique()->randomNumber(9),
            "nis"       => fake()->unique()->randomNumber(9),
            "program_id" => rand(1, 2),
            "class_id" => rand(1, 3),
            "user_id" => fake()->unique()->numberBetween(1, 10),
            "address" => fake()->address()
        ];
    }
}
