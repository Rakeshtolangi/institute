<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_no',
        'fee_date',
        'batch_id',
        'due_fee',
        'amount',
        'remarks',
    ];


    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
