<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
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
        'adult',
        'group_id',
        'user_id',
        'Is_Inspect',
        'views_week',
        'views_month',
    ];
    public function episodes()
    {
        return $this->hasMany(episode::class);
    }

    public function chapters()
    {
        return $this->hasMany(chapter::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likedBooks()
    {
        return $this->belongsToMany(Book::class, 'likes');
    }
    public function latestChapter()
    {
        return $this->hasOne(chapter::class)->latest('created_at');  // Hoặc sử dụng 'updated_at'
    }
    public function totalChapterPrice()
    {
        return $this->chapters->where('approval', 1)->sum('price');
    }

    public function group()
    {
        return $this->belongsTo(group::class, 'group_id');
    }
    public function genres()
    {
        return $this->belongsToMany(genre::class);
    }

    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }
    public function groups()
    {
        return $this->belongsTo(group::class);
    }
    public function episodeCount()
    {
        return $this->episodes()->count();
    }
    public function chapterCount()
    {
        return $this->chapters()->count();
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function averageRating()
    {
        return round($this->ratings()->avg('rating'), 2); // Làm tròn đến 2 chữ số thập phân
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
    // Hàm lấy top 3 quyển sách có lượt like nhiều nhất
    public static function topLikedBooks()
    {
        return self::orderByDesc('like') // Sắp xếp theo số lượt like giảm dần
            ->take(3) // Lấy 3 quyển sách đầu tiên
            ->get();
    }
    // Hàm lấy top 10 truyện có lượt view cao nhất
    public static function topViewedBooks()
    {
        return self::orderByDesc('view') // Sắp xếp theo lượt view giảm dần
            ->take(10) // Lấy 10 truyện đầu tiên
            ->get();
    }
    public function allChaptersinEpisodePurchased($userId, $episodeId)
    {
        // Tổng số chương có giá trị trong tập truyện
        $totalChapters = $this->chapters()->where('price', '>', 0)->where('episode_id', $episodeId)->count();

        // Số chương đã mua
        $purchasedChapters = $this->chapters()->where('price', '>', 0)->where('episode_id', $episodeId)
            ->whereHas('purchasedStories', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->count();

        // Kiểm tra xem tất cả các chương có giá trị đã được mua chưa
        return $totalChapters === $purchasedChapters;
    }
    public function hasChapter($id)
    {
        $book = Book::find($id);
        return $book->chapters()->exists();
    }
    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
    public function approvalHistories()
    {
        return $this->hasMany(ApprovalHistory::class);
    }
    public function sharedBooks()
    {
        return $this->hasMany(SharedBook::class, 'book_id', 'id');
    }
}
