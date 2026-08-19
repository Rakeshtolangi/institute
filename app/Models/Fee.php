<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'receipt_no',
        'fee_date',
        'batch_id',
        'shift_id',
        'course_id',
        'paid_amount',
        'due_fee',
        'amount',
        'remarks',
    ];


    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

  
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    
}
