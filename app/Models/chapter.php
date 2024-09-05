<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'slug',
        'title',
        'content',
        'episode_id',
    ];

}
