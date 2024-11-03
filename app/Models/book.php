<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class book extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'type',
        'status',
        'like',
        'view',
        'slug',
        'title',
        'author',
        'painter',
        'book_path',
        'description',
        'note',
        'is_VIP',
        'adult',
        'group_id',
        'user_id',
        'Is_Inspect',
        'price',
    ];
    public function episodes()
    {
        return $this->hasMany(episode::class);
    }

    public function chapters()
    {
        return $this->hasMany(chapter::class);
    }
    public function likedBooks()
    {
        return $this->belongsToMany(Book::class, 'likes');
    }

    public function totalChapterPrice()
    {
        return $this->chapters->sum('price');
    }
    public function group()
    {
        return $this->belongsTo(group::class, 'group_id');
    }
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function groups()
    {
        return $this->belongsTo(group::class);
    }
    public function episodeCount()
    {
        return $this->episodes()->count();
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function sharedUsers()
    {
        return $this->hasMany(SharedBook::class);
    }


    public function allChaptersPurchased($userId)
    {
        $totalChapters = $this->chapters()->where('price', '>', 0)->count();
        $purchasedChapters = $this->chapters()->whereHas('purchasedStories', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->count();

        return $totalChapters === $purchasedChapters;
    }
    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
}
