<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function handleRating(Request $request){
        $book = book::where('slug', $request->slug)->first();

        if (!$book) {
            return redirect()->back()->with('error', 'Book not found.');
        }

        $ratings = Rating::with('user')->where('book_id', $book->id)->orderBy('created_at', 'desc')->get();
        $ratingCount = $ratings->count();
        $averageRating = $ratingCount > 0 ? $ratings->avg('rating') : 0;
        return view('rating.rating', compact('ratings', 'book', 'ratingCount', 'averageRating'));
    }

    public function handleRatingPost(Request $request){
        // Xác thực người dùng đã đăng nhập
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Bạn cần đăng nhập để đánh giá.');
        }

        // Xác thực dữ liệu nhập vào
        $request->validate([
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:500',
        ]);

        // Tìm sách theo slug
        $book = Book::where('slug', $request->slug)->first();

        if (!$book) {
            return redirect()->back()->with('error', 'Truyện không tồn tại.');
        }

        // Lưu đánh giá
        $rating = new Rating();
        $rating->user_id = Auth::id(); // Lưu ID người dùng hiện tại
        $rating->book_id = $book->id; // ID truyện
        $rating->rating = $request->rating; // Giá trị đánh giá
        $rating->comment = $request->comment; // Nhận xét
        $rating->save();

        return redirect()->back()->with('success', 'Cảm ơn bạn đã đánh giá!');
    }
}
