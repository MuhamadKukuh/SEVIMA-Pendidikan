<?php

namespace Database\Seeders;

use App\Models\StudyProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyProgram::create([
            "program" => "IPA"
        ]);
        StudyProgram::create([
            "program" => "IPS"
        ]);
        StudyProgram::create([
            "program" => "Campuran"
        ]);
    }
}
