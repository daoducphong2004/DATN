<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookShelves extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'location',
        'book_id',
        'user_id',
        ];
}
