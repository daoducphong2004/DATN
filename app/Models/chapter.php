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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // lấy oder lớn nhất
    public static function getMaxOrderByBook($episodeId)
    {
        return self::where('episode_id', $episodeId)
            ->max('order');
    }


    public function purchasedStories()
    {
        return $this->hasMany(PurchasedStory::class, 'chapter_id');
    }
    public function chaptercomments()
    {
        return $this->hasMany(ChapterComment::class);
    }


    // Get the previous chapter, considering episodes in the same book
    public function previousChapter()
    {
        // Find the previous chapter in the same episode
        $previousChapter = $this->where('episode_id', $this->episode_id)
            ->where('order', '<', $this->order)
            ->orderBy('order', 'desc')
            ->first();

        // If there is a previous chapter in the same episode, return it
        if ($previousChapter) {
            return $previousChapter;
        }

        // Otherwise, find the previous episode within the same book by order
        $previousEpisode = Episode::where('book_id', $this->book_id)
            ->where('order', '<', $this->episode->order)
            ->orderBy('order', 'desc')
            ->first();

        // If a previous episode exists, return its last chapter
        if ($previousEpisode) {
            return Chapter::where('episode_id', $previousEpisode->id)
                ->orderBy('order', 'desc')
                ->first();
        }

        // If no previous episode exists, return null (start of book)
        return null;
    }

    public function nextChapter()
    {
        // Find the next chapter in the same episode
        $nextChapter = $this->where('episode_id', $this->episode_id)
            ->where('order', '>', $this->order)
            ->orderBy('order', 'asc')
            ->first();

        // If there is a next chapter in the same episode, return it
        if ($nextChapter) {
            return $nextChapter;
        }

        // Otherwise, find the next episode within the same book by order
        $nextEpisode = Episode::where('book_id', $this->book_id)
            ->where('order', '>', $this->episode->order)
            ->orderBy('order', 'asc')
            ->first();

        // If a next episode exists, return its first chapter
        if ($nextEpisode) {
            return Chapter::where('episode_id', $nextEpisode->id)
                ->orderBy('order', 'asc')
                ->first();
        }

        // If no next episode exists, return null (end of book)
        return null;
    }
}
