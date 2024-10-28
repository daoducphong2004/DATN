<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Cart;
use App\Models\chapter;
use App\Models\episode;
use App\Models\PurchasedStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class purchaseStoryController extends Controller
{

    public function createOrder()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để đặt hàng.');
        }

        $user = Auth::user();
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Kiểm tra nếu giỏ hàng rỗng
        if ($cartItems->isEmpty()) {
            return response()->json(['status' => 'error', 'message' => 'Giỏ hàng trống.']);
        }

        // Lọc các chương đã mua
        $cartItems = $cartItems->filter(function ($item) use ($user) {
            return !PurchasedStory::where('user_id', $user->id)->where('chapter_id', $item->chapter_id)->exists();
        });

        // Kiểm tra nếu tất cả các chương đã được mua
        if ($cartItems->isEmpty()) {
            return response()->json(['status' => 'error', 'message' => 'Tất cả các chương trong giỏ hàng đã được mua.']);
        }

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->chapter->price;
        });

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $totalPrice) {
            return response()->json(['status' => 'error', 'message' => 'Bạn không đủ coin để mua các chương này.']);
        }

        try {
            DB::beginTransaction();

            // Trừ coin người dùng
            $user->coin_earned -= $totalPrice;
            $user->save();

            foreach ($cartItems as $item) {
                // Thêm chương vào PurchasedStory
                PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $item->chapter_id,
                    'purchase_date' => now(),
                    'price' => $item->chapter->price,
                ]);

                // Xóa chương khỏi giỏ hàng
                $item->delete();
            }

            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Thanh toán thành công!']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage()]);
        }
    }
    public function purchaseAllChaptersInEpisode($episodeId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('message', 'Bạn cần đăng nhập để mua hàng.');
        }

        // Lấy người dùng hiện tại
        $user = Auth::user();

        // Lấy tập truyện theo id
        $episode = episode::findOrFail($episodeId);

        // Lấy tất cả các chương trong tập truyện
        $chapters = $episode->chapters;

        // Kiểm tra các chương nào chưa được mua và có giá trị lớn hơn 0
        $chaptersToPurchase = $chapters->filter(function ($chapter) use ($user) {
            return $chapter->price > 0 && !PurchasedStory::where('chapter_id', $chapter->id)->where('user_id', $user->id)->exists();
        });

        // Nếu tất cả các chương đã được mua hoặc không có chương nào có giá trị
        if ($chaptersToPurchase->isEmpty()) {
            return redirect()->back()->with('message', 'Bạn đã mua tất cả các chương có giá trị trong tập truyện này.');
        }

        // Tính tổng giá của các chương chưa được mua
        $totalPrice = $chaptersToPurchase->sum('price');

        // Kiểm tra xem người dùng có đủ tiền không
        if ($user->coin_earned < $totalPrice) {
            return redirect()->back()->with('error', 'Bạn không đủ coin để mua tất cả các chương này.');
        }

        // Thực hiện logic thanh toán (trừ tiền người dùng)
        try {
            DB::beginTransaction();

            // Trừ số dư người dùng
            $user->coin_earned -= $totalPrice;
            $user->save();

            // Lưu các chương đã mua vào bảng PurchasedStory
            foreach ($chaptersToPurchase as $chapter) {
                PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'purchase_date' => now(),
                    'price' => $chapter->price,
                ]);
            }

            DB::commit();

            // Trả về trang chi tiết truyện và hiển thị thông báo thành công
            return redirect()->back()->with('message', 'Thanh toán thành công. Bạn đã mua tất cả các chương có giá trị trong tập truyện.');
        } catch (\Exception $e) {
            DB::rollBack();
            // Nếu có lỗi xảy ra, trả về trang chi tiết truyện và hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage());
        }
    }
    public function purchaseChapter(Request $request, $chapterId, $price)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm chương vào giỏ hàng.');
        }

        $user = auth()->user(); // Lấy thông tin người dùng hiện tại

        // Kiểm tra xem người dùng đã mua chapter này chưa
        $alreadyPurchased = PurchasedStory::where('user_id', $user->id)
            ->where('chapter_id', $chapterId)
            ->exists();

        if ($alreadyPurchased) {
            return response()->json(['message' => 'Bạn đã mua chapter này rồi.'], 400);
        }

        // Lấy thông tin chapter cần mua
        $chapter = chapter::findOrFail($chapterId);

        // Kiểm tra nếu người dùng có đủ coin để mua
        $price = $chapter->price;

        if ($user->coin_earned < $price) {
            return response()->json(['message' => 'Bạn không đủ coin để mua chapter này.'], 400);
        }

        // Trừ coin của người dùng
        $user->coin_earned -= $price;
        $user->save();

        // Lưu thông tin mua chapter vào bảng purchased_chapters
        PurchasedStory::create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
            'price' => $price,
            'purchase_date' => now(),
        ]);

        return response()->json(['message' => 'Mua chapter thành công!'], 200);
    }
    public function purchase($bookSlug, $chapterId, $price)
    {
        // Kiểm tra xem người dùng có đăng nhập không
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để mua chương này.');
        }

        $user = auth()->user(); // Lấy thông tin người dùng hiện tại

        // Tìm chương cần mua
        $chapter = Chapter::findOrFail($chapterId);

        // Kiểm tra nếu chương đã có giá là 0 thì không cần mua
        if ($price == 0) {
            return redirect()->route('truyen.chuong', [$bookSlug, $chapter->slug])
                ->with('message', 'Chương này miễn phí, bạn không cần mua.');
        }

        // Kiểm tra nếu người dùng đã mua chương này
        if ($user->hasPurchased($chapter->id)) {
            return redirect()->route('truyen.chuong', [$bookSlug, $chapter->slug])
                ->with('message', 'Bạn đã mua chương này rồi.');
        }

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $price) {
            return redirect()->back()->with('error', 'Bạn không đủ coin để mua chương này.');
        }

        // Trừ coin và lưu thông tin mua chương
        $user->coin_earned -= $price;
        $user->save();

        PurchasedStory::create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
            'price' => $price,
            'purchase_date' => now(),
        ]);

        return redirect()->route('truyen.chuong', [$bookSlug, $chapter->slug])
            ->with('message', 'Mua chương thành công!');
    }
    public function purchaseAllChaptersInBook($bookId)
    {
        $user = Auth::user();
        $book = Book::findOrFail($bookId);
        $chapters = $book->chapters;

        $chaptersToPurchase = $chapters->filter(function ($chapter) use ($user) {
            return $chapter->price > 0 && !PurchasedStory::where('chapter_id', $chapter->id)->where('user_id', $user->id)->exists();
        });

        if ($chaptersToPurchase->isEmpty()) {
            return redirect()->back()->with('message', 'Bạn đã mua tất cả các chương có giá trị trong sách này.');
        }

        $totalPrice = $chaptersToPurchase->sum('price');

        if ($user->coin_earned < $totalPrice) {
            return redirect()->back()->with('error', 'Bạn không đủ coin để mua tất cả các chương này.');
        }

        try {
            DB::beginTransaction();

            $user->coin_earned -= $totalPrice;
            $user->save();

            foreach ($chaptersToPurchase as $chapter) {
                PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'purchase_date' => now(),
                    'price' => $chapter->price,
                ]);
            }

            DB::commit();

            return redirect()->back()->with('success', 'Thanh toán thành công. Bạn đã mua tất cả các chương có giá trị trong sách.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage());
        }
    }
}
