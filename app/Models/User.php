<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password_hash',
        'email',
        'gender',
        'date_of_birth',
        'avatar_url',
        'created_at',
        'updated_at',
        'last_login',
        'status',
        'coin_earned',
        'payment_id',
        'subscription_id',
        'pomotion_id',
        'full_name',
    ];
}
