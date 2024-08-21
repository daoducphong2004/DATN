<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
    ];
}
