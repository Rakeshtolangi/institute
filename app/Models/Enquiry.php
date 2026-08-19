<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'father_name',
        'dob',
        'email',
        'mobile',
        'preferred_time',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}