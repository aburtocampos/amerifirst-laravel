<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;
     protected $fillable = [
        'type',
        'opportunity_number',
        'customer_name',
        'contract_file',
        'principal',
        'interest',
        'turnaround_days',
    ];
}
