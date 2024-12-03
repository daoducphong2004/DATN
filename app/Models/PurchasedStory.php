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

    public function book()
    {
        return $this->hasOneThrough(Book::class, chapter::class, 'id', 'id', 'chapter_id', 'book_id');
    }
     // Phương thức kiểm tra xem người dùng đã mua chương này chưa
     public static function hasPurchased( $chapterId)
     {
         return self::where('user_id', Auth::id())
                     ->where('chapter_id', $chapterId)
                     ->exists();
     }
 
}
