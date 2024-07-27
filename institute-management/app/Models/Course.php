<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        // Add other attributes if necessary
    ];

    /**
     * Get the classes that are part of this course.
     */
    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'course_id');
    }
}