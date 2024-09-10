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
<<<<<<< HEAD
    public function books(){
        return $this->belongsTo(book::class,'book_id');
=======

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
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
