<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(Chapter::class);
    }

    public function book()
    {
        return $this->hasOneThrough(Book::class, Chapter::class, 'id', 'id', 'chapter_id', 'book_id');
    }
     // Phương thức kiểm tra xem người dùng đã mua chương này chưa
     public static function hasPurchased($userId, $chapterId)
     {
         return self::where('user_id', $userId)
                     ->where('chapter_id', $chapterId)
                     ->exists();
     }
 
}
