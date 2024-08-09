<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ClassModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'teacher_id',
        'shift_id',
        // Add other attributes if necessary
    ];

    
    /**
     * Get the students for this class.
     */
    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }

    /**
     * Get the course for this class.
     */
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    /**
     * Get the teacher for this class.
     */
// Define the relationship with Teacher
public function teachers()
{
    return $this->belongsToMany(Teacher::class, 'teacher_class', 'class_id', 'teacher_id');
}

    /**
     * Get the shift for this class.
     */
    public function shift()
    {
        return $this->belongsTo(Shift::class, 'shift_id');
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}