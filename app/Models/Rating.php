<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'user_id', 'rating', 'comment'];

    // Liên kết với bảng `Story`
    public function story()
    {
        return $this->belongsTo(related: Book::class);
    }

    // Liên kết với bảng `User`
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like_rating::class);
    }
    public function averageRating($bookId)
{
    // Lấy trung bình rating cho một cuốn sách dựa vào book_id
    $average = Rating::where('book_id', $bookId)->avg('rating');

    return response()->json([
        'book_id' => $bookId,
        'average_rating' => round($average, 2) // Làm tròn đến 2 chữ số thập phân
    ]);
}
}
