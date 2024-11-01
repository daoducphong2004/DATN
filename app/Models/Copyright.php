<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Copyright extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id',
        'title',
        'cover',
        'author',
        'painter',
        'translater',
        'nop',
        'form',
        'try_reading',
        'price',
        'summary',
    ];
}
