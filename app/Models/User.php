<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password_hash',
        'email',
        'gender',
        'date_of_birth',
        'avatar_url',
        'last_login',
        'status',
        'coin_earned',
        'full_name',
        'remember_token',
        'group',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class, 'group');
    }
    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function readingHistories()
    {
        return $this->hasMany(ReadingHistory::class);
    }

    public function purchasedStories()
    {
        return $this->hasMany(PurchasedStory::class);
    }

    public function author()
    {
        return $this->hasMany(Author::class);
    }
    public function hasPurchased($chapterId)
    {
        return $this->purchasedStories()->where('chapter_id', $chapterId)->exists();
    }
     // Quan hệ để lấy các truyện mà user đã đăng
     public function books()
     {
         return $this->hasMany(Book::class, 'user_id');
     }

     // Quan hệ để lấy các truyện mà user được chia sẻ quyền
     public function sharedBooks()
     {
         return $this->belongsToMany(Book::class, 'shared_books', 'user_id', 'book_id');
     }
}
