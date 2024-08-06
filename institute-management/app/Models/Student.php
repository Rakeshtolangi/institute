<?php

// Student.php

namespace App\Models;

use App\Models\Student;

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
        'batch_id',
        'course_fee',
        'student_fee',
        // 'class_id'
    ];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}