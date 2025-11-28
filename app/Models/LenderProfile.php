<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LenderProfile extends Model
{
    use HasFactory;
      protected $fillable = [
        'user_id',
        'address',
        'phone',
        'email',
        'legal_name',
        'bank_name',
        'bank_account',
        'bank_routing',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
