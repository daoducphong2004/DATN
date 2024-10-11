<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\Like;
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

         // Kiểm tra người dùng đã đánh giá sách này chưa
            $existingRating = Rating::where('user_id', Auth::id())
            ->where('book_id', $book->id)
            ->first();

            if ($existingRating) {
            // Nếu đã đánh giá, không cho phép đánh giá lại
            return redirect()->back()->with('error', 'Bạn đã đánh giá cuốn sách này trước đó.');
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

     public function toggleLike(Request $request, $ratingId)
     {
         if (!Auth::check()) {
             return redirect()->back()->with('error', 'Bạn cần đăng nhập để like đánh giá.');
         }

         $rating = Rating::find($ratingId);
         if (!$rating) {
             return redirect()->back()->with('error', 'Đánh giá không tồn tại.');
         }

         $like = Like::where('user_id', Auth::id())
             ->where('rating_id', $ratingId)
             ->first();

         if ($like) {
             $like->delete();
             return redirect()->back()->with('success', 'Bạn đã bỏ like đánh giá này.');
         } else {
             Like::create([
                 'user_id' => Auth::id(),
                 'rating_id' => $ratingId,
             ]);
             return redirect()->back()->with('success', 'Bạn đã like đánh giá này.');
         }
     }
}
