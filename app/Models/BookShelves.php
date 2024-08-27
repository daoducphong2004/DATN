<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bookshelves extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'id',
        'name',
        'description',
        'location',
        'status',
        'book_id',
        'user_id',
    ];
}
