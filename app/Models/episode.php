<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class episode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'episode_path',
        'slug',
        'book_id',
        'user_id',
        'order',
    ];

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'episode_id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    /**
     * Get the highest order value for episodes of a specific book.
     *
     * @param int $bookId
     * @return int|null
     */
    public static function getMaxOrderByBook($bookId)
    {
        return self::where('book_id', $bookId)
            ->max('order');
    }
    public function latestChapter()
    {
        return $this->hasOne(chapter::class)->latest();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
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
