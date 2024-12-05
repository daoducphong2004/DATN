<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $fillable = ['slug','name','description'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
    // Hàm lấy top 10 thể loại được đọc nhiều nhất (dựa trên tổng lượt view của các sách)
    public static function topViewedGenres()
    {
        return self::query()
            ->select('genres.*') // Lấy tất cả các cột từ bảng genres
            ->selectRaw('SUM(books.view) as total_views') // Tính tổng số lượt view từ bảng books
            ->join('book_genre', 'genres.id', '=', 'book_genre.genre_id') // Join với bảng trung gian
            ->join('books', 'book_genre.book_id', '=', 'books.id') // Join với bảng books
            ->groupBy('genres.id') // Gom nhóm theo id của thể loại
            ->orderByDesc('total_views') // Sắp xếp giảm dần theo tổng số lượt view
            ->take(10) // Lấy 10 thể loại đầu tiên
            ->get();
    }
       // Hàm lấy top 10 thể loại có truyện được yêu thích nhiều nhất (dựa trên tổng lượt like của các sách)
       public static function topLikedGenres()
       {
           return self::query()
               ->select('genres.*') // Lấy tất cả các cột từ bảng genres
               ->selectRaw('SUM(books.like) as total_likes') // Tính tổng số lượt like từ bảng books
               ->join('book_genre', 'genres.id', '=', 'book_genre.genre_id') // Join với bảng trung gian
               ->join('books', 'book_genre.book_id', '=', 'books.id') // Join với bảng books
               ->groupBy('genres.id') // Gom nhóm theo id của thể loại
               ->orderByDesc('total_likes') // Sắp xếp giảm dần theo tổng số lượt like
               ->take(10) // Lấy 10 thể loại đầu tiên
               ->get();
       }
}
