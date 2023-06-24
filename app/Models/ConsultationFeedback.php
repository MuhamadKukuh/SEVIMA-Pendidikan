<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationFeedback extends Model
{
    use HasFactory;

    protected $guarded = ['feedback_id'];
    protected $primaryKey = 'feedback_id';

    public function Teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function Consultation(){
        return $this->belongsTo(Consultation::class, 'consultation_id');
    }

}
