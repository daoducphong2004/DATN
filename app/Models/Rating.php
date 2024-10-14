<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'user_id', 'rating', 'comment'];

    // Liên kết với bảng `Story`
    public function story()
    {
        return $this->belongsTo(book::class);
    }

    // Liên kết với bảng `User`
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
