<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'expense_date',
        'title',
        'expense_category_id',
        'amount',
        'image',
        'description',
    ];

    // Define the relationship with ExpenseCategory
    public function expenseCategory()
    {
        return $this->belongsTo(ExpenseCategory::class);
    }
}