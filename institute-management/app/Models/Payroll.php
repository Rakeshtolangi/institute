<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'course_id', 'receipt_no', 'date','type','amount','remarks','total_amount'];

}
