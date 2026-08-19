<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content'
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


    public function isCompleted($student)
    {
        $enrollmentDate = Carbon::parse($student->created_at);
        $currentDate = Carbon::now();
        $expectedCompletionDate = $this->calculateCompletionDate($enrollmentDate);

        return $currentDate->greaterThanOrEqualTo($expectedCompletionDate);
    }

    private function calculateCompletionDate($enrollmentDate)
    {
        switch ($this->duration_type) {
            case 'days':
                return $enrollmentDate->addDays($this->duration);
            case 'weeks':
                return $enrollmentDate->addWeeks($this->duration);
            case 'months':
                return $enrollmentDate->addMonths($this->duration);
            default:
                throw new \Exception("Invalid duration type");
        }
    }



}