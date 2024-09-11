<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'category_id',
        'book_id',
        'viewer',
        'slug',
    ];
}
