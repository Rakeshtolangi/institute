<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Batch;
USE App\Models\Student;
USE App\Models\Course;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description',
        ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}