<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedBook extends Model
{
    use HasFactory;
    protected $table = 'shared_books';
    protected $fillable = ['user_id', 'book_id'];

    // Quan hệ với Book
    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    // Quan hệ với User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
