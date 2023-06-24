<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['subject_id'];
    protected $primaryKey = 'subject_id';

    public function Materials () {
        return $this->hasMany(LearningMaterial::class, 'subject_id');
    }
}
