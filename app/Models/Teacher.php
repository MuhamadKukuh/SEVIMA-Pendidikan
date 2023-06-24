<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = ['teacher_id'];
    protected $primaryKey = 'teacher_id';

    public function TeacherData(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function FeedBacks(){
        return $this->hasMany(ConsultationFeedback::class, 'teacher_id');
    }

    public function LearningMaterials(){
        return $this->hasMany(LearningMaterial::class, 'teacher_id');
    }

    public function ProgramStudy(){
        return $this->belongsTo(StudyProgram::class, 'program_id');
    }

}
