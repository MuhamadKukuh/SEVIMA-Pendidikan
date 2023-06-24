<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $primaryKey = 'consultation_id';
    protected $guarded = ['consultation_id'];

    public function Student(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function Feedbacks(){
        return $this->hasMany(ConsultationFeedback::class, 'consultation_id');
    }
}
