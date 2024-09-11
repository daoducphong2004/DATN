<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'episode_path',
        'book_id',
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'episode_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function latestChapter()
    {
        return $this->hasOne(chapter::class)->latest();
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($episode) {
            $episode->chapters()->each(function ($chapter) {
                $chapter->delete();
            });
        });
    }
}
