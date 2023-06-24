<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyProgram extends Model
{
    use HasFactory;

    protected $guarded = ['program_id'];
    protected $primaryKey = 'program_id';

    public function Teachers(){
        return $this->hasMany(Teacher::class, 'teacher_id');
    }

    public function Students(){
        return $this->hasMany(Student::class, 'student_id');
    }
}
