<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsultationFeedback>
 */
class ConsultationFeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "consultation_id" => rand(1, 10),
            "teacher_id" => fake()->numberBetween(1, 10),
            "feedback" => fake()->paragraph(2)
        ];
    }
}
