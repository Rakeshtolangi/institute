<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'phone',
    ];

    // Define the relationship with ClassModel
    public function ClassModel()
    {
        return $this->hasMany(ClassModel::class, 'teacher_id','shift_id','batch_id','course_id');
    }
}