<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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


    public function isCompleted($student)
    {
        $enrollmentDate = Carbon::parse($student->created_at);
        $currentDate = Carbon::now();
        $expectedCompletionDate = $this->calculateCompletionDate($enrollmentDate);

        return $currentDate->greaterThanOrEqualTo($expectedCompletionDate);
    }

    private function calculateCompletionDate($enrollmentDate)
    {
        switch ($this->type) {
            case 'days':
                return $enrollmentDate->addDays((int) $this->duration);
            case 'weeks':
                return $enrollmentDate->addWeeks((int) $this->duration);
            case 'months':
                return $enrollmentDate->addMonths((int) $this->duration);
            default:
                throw new \Exception("Invalid duration type");
        }
    }



}