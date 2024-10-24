<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class chapter extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'slug',
        'title',
        'content',
        'episode_id',
        'word_count',
        'price',
        'user_id',
        'book_id',
        'order',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function episode()
    {
        return $this->belongsTo(Episode::class, 'episode_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function chaptercomments()
    {
        return $this->hasMany(ChapterComment::class);
    }


    public function previous()
    {
        return static::where('episode_id', $this->episode_id)
            ->where('id', '<', $this->id)
            ->orderBy('id', 'desc')
            ->first();
    }

    public function next()
    {
        return static::where('episode_id', $this->episode_id)
            ->where('id', '>', $this->id)
            ->orderBy('id', 'asc')
            ->first();
    }
}
