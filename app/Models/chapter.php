<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class chapter extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id',
        'slug',
        'title',
        'content',
        'episode_id',
        'user_id',
    ];

    public function episode()
    {
        return $this->belongsTo(Episode::class, 'episode_id');
    }

    public function chaptercomments()
    {
        return $this->hasMany(ChapterComment::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
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
