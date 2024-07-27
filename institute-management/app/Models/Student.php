<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'dob',
        'email',
        'mobile',
        'gender',
        'course_id',
        'course_fee',
        'student_fee',
        'class_id'
        // Add other attributes if necessary
    ];

    // Define the relationship with the Class model
    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}