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
        'phone',
        'subject_id',
        // Add other attributes if necessary
    ];

    /**
     * Get the subject that the teacher teaches.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    /**
     * Get the classes that the teacher teaches.
     */
    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'teacher_id');
    }
}