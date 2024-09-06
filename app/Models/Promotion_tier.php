<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion_tier extends Model
{
    use HasFactory;

    protected $fillable = [
        'promotion_id',
        'tier_level',
        'vip_discount',
        'bonus_multiplier',
        'description',
        'promotion_id',
        'user_id',
    ];
}
