<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        // Add other attributes if necessary
    ];

    /**
     * Get the classes for this shift.
     */
    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'shift_id');
    }
}