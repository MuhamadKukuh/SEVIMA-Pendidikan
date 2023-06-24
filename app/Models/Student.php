<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['student_id'];
    protected $primaryKey = 'student_id';

    public function Class(){
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    public function Consultations(){
        return $this->hasMany(Consultation::class, 'student_id');
    }

    public function ProgramStudy(){
        return $this->belongsTo(ProgramStudy::class, 'program_id');
    }


}
