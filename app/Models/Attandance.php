<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attandance extends Model
{
    use HasFactory;
    
    protected $fillable = ['student_id', 'status','batch_id','course_id'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}