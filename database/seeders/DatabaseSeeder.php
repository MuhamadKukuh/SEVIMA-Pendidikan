<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Student::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\LearningMaterial::factory(10)->create();
        \App\Models\Consultation::factory(10)->create();
        \App\Models\ConsultationFeedback::factory(10)->create();

        $this->call([
            RoleSeeder::class,
            SchoolClassSeeder::class,
            StudyProgramSeeder::class,
            SubjectSeeder::class
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
