<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'email',
        'password',
        'phone',
        'gender',
        'dob',
        'image',
        'documents',
        'address',
        'course_id',
        'batch_id',
        'qualification',
        'experience',
        'date_of_join',
        'designation_id'
    ];

    // Define the relationship with ClassModel
    public function ClassModel()
    {
        return $this->hasMany(ClassModel::class, 'teacher_id','shift_id','batch_id','course_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
}