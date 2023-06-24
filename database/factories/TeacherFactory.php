<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "teacher_name" => fake()->name(),
            "nip"       => fake()->unique()->randomNumber(9),
            "program_id" => rand(1, 3),
            "user_id" => fake()->unique()->numberBetween(11, 20),
        ];
    }
}
