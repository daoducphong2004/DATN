<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chaptercomment extends Model
{
    use HasFactory;
    protected $fillable = [
        'chapter_id',
        'user_id',
        'content',
        'parent_id'
        ];
}
