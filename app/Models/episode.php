<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class episode extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
        'title',
        'description',
        'episode_path',
        'slug',
        'book_id',
        'user_id',

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
            if ($episode->isForceDeleting()) {
                // Permanently delete chapters
                $episode->chapters()->forceDelete();
            } else {
                // Soft delete chapters
                $episode->chapters()->delete();
            }
        });
    }

}
