<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes, Notifiable;

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

    // Quan hệ với các mô hình khác
    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

    public function likedBooks()
    {
        return $this->belongsToMany(Book::class, 'like_books');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function comments()
    {
        return $this->hasMany(BookComment::class);
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

    public function countPurchasedChapters()
    {
        return $this->purchasedStories()->count();
    }

    public function author()
    {
        return $this->hasOne(Author::class);
    }

    public function hasPurchased($chapterId)
    {
        return $this->purchasedStories()->where('chapter_id', $chapterId)->exists();
    }

    public function sharedBooks()
    {
        return $this->belongsToMany(Book::class, 'shared_books', 'user_id', 'book_id');
    }

    public function contract()
    {
        return $this->hasOne(Contract::class);
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    // Thêm kiểm tra tồn tại của thông báo trong database

}
