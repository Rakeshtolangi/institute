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
       'admission_number',
        'name',
        'father_name',
        'dob',
        'email',
        'mobile',
        'gender',
        'course_id',
        'image',
        'documents',
        'batch_id',
        'course_fee',
        'student_fee',
        // 'class_id'
    ];

    public function classModel()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
    public function fees()
    {
        return $this->hasMany(Fee::class);
    }
}