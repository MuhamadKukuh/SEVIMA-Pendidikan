<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::create([
            "subject" => "Sejarah"
        ]);
        Subject::create([
            "subject" => "Matematika"
        ]);
        Subject::create([
            "subject" => "Bahasa Indonesia"
        ]);
        Subject::create([
            "subject" => "Bahasa Inggris"
        ]);
        Subject::create([
            "subject" => "Sejarah Indonesia"
        ]);
    }
}
