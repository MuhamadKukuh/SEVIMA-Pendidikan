<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningMaterial extends Model
{
    use HasFactory;

    protected $guarded = ['material_id'];
    protected $primaryKey = 'material_id';

    public function Subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function Teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
