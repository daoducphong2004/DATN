<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PurchasedStory extends Model
{
    protected $fillable = [
        'user_id',
        'chapter_id',
        'purchase_date',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function chapter()
    {
        return $this->belongsTo(chapter::class);
    }
    public function chaptersInBook($bookId)
    {
        return $this->chapter->where('book_id', $bookId);
    }

    public function book()
    {
        return $this->hasOneThrough(Book::class, chapter::class, 'id', 'id', 'chapter_id', 'book_id');
    }
    // Phương thức kiểm tra xem người dùng đã mua chương này chưa
    public static function hasPurchased($chapterId, $userId = null)
    {
        $userId = $userId ?? Auth::id();

        if (!$userId) {
            return false; // Người dùng chưa đăng nhập
        }

        return self::where('user_id', $userId)
            ->where('chapter_id', $chapterId)
            ->exists();
    }
    public static function totalSpent($userId = null)
    {
        $userId = $userId ?? Auth::id();

        return self::where('user_id', $userId)
            ->sum('price');
    }

    // Lấy thông tin người dùng đã mua chương trong khoảng thời gian
    public static function getUsersByChapterInDateRange($chapterId, $startDate, $endDate)
    {
        // Sử dụng Eloquent để lấy thông tin người dùng đã mua chapter trong khoảng thời gian
        return self::with('user')
            ->where('chapter_id', $chapterId)
            ->whereBetween('purchase_date', [$startDate, $endDate])
            ->get()
            ->map(function ($purchase) {
                return [
                    'user' => $purchase->user->username,
                    'email' => $purchase->user->email,
                    'purchase_date' => $purchase->purchase_date,
                    'price' => $purchase->price,
                ];
            });
    }
}
