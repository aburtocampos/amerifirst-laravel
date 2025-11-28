<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'loan_id',
        'payment_name',
        'due_date',
        'status',
        'amount',
        'concept',
        'amortization',
        'interest',
        'balance',
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}
