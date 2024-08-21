<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
    'amount',
    'currency',
    'payment_method',
    'transaction_id',
    'status',
    'payment_date',
    'description',
    'coin_earned',
    'final_amount',
    ];
}
