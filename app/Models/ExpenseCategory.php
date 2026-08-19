<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    // Example: One expense category might have many expenses (if you have an Expense model)
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    // Example: If expense categories are linked to departments or similar entities
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
