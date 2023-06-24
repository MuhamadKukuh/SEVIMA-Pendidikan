<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LearningMaterial>
 */
class LearningMaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "material_title" => fake()->name(),
            "material_content" => fake()->paragraph(5),
            "teacher_id" => rand(1,10),
            "subject_id" => rand(1,5)
        ];
    }
}
