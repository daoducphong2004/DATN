<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookcomment extends Model
{
    use HasFactory;
    protected $table = 'book_comments';
    protected $fillable = [
        'book_id',
        'user_id',
        'content',
        'parent_id',
        'is_deleted'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    // Quan hệ giữa bình luận và người dùng (user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ bình luận con
    public function replies()
    {
        return $this->hasMany(bookcomment::class, 'parent_id')->with('replies');
    }
    public function deletedBy(){
        return $this->belongsTo(User::class, 'is_deleted');
    }
    // Quan hệ bình luận cha
    public function parent()
    {
        return $this->belongsTo(bookcomment::class, 'parent_id');
    }
}
