<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount_type',
        'description',
        'max_discount',
        'discount_value',
        'end_date',
        'start_date',
        'usage_count',
        'usage_limit',
        'status',
        'tier_level',
    ];
}
