<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'image',
        'duration',
        'type',
        'fee',
        'status',
        'skill_level',
        'description',
        'outcome'
        // Add other attributes if necessary
    ];

    /**
     * Get the classes that are part of this course.
     */

     public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'course_id');
    }

    public function enquiries()
    {
        return $this->hasMany(Enquiry::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
    
    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}