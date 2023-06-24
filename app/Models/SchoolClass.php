<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    protected $guarded = ['class_id'];
    protected $primaryKey = 'class_id';

    public function Students(){
        return $this->hasMany(Student::class, 'class_id');
    }
}
