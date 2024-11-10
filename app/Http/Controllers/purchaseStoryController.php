<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\Cart;
use App\Models\chapter;
use App\Models\episode;
use App\Models\PurchasedStory;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class purchaseStoryController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $purchasedBooks = Book::whereHas('chapters.purchasedStories', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->distinct()->get();

        return view('user.purchasebookshelf', compact('purchasedBooks'));
    }
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

        // Tính tổng giá tiền
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->chapter->price;
        });

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $totalPrice) {
            return response()->json(['status' => 'error', 'message' => 'Bạn không đủ coin để mua các chương này.']);
        }

        try {
            DB::beginTransaction();

            // Trừ coin của người dùng
            $user->decrement('coin_earned', $totalPrice);

            foreach ($cartItems as $item) {
                $chapter = $item->chapter;
                $author = $chapter->user;

                // Kiểm tra hợp đồng của tác giả để lấy phần trăm chia sẻ doanh thu
                $contract = $author->contract;
                $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70;

                // Tính toán doanh thu của tác giả
                $authorEarnings = $chapter->price * ($revenueShare / 100);

                // Lưu thông tin mua chapter vào bảng PurchasedStory
                $purchasedStory = PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'price' => $chapter->price,
                    'purchase_date' => now(),
                ]);

                // Kiểm tra ví của tác giả
                $wallet = $author->wallet;
                if (!$wallet) {
                    $wallet = Wallet::create([
                        'user_id' => $author->id,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }

                // Cộng số dư vào ví của tác giả
                $wallet->increment('balance', $authorEarnings);

                // Tạo giao dịch cho tác giả
                Transaction::create([
                    'wallet_id' => $wallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $authorEarnings,
                    'type' => 'credit',
                    'description' => 'Earnings from chapter purchase',
                    'status' => 'completed'
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
        $episode = Episode::findOrFail($episodeId);

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

        try {
            DB::beginTransaction();

            // Trừ số dư người dùng
            $user->decrement('coin_earned', $totalPrice);

            // Lưu các chương đã mua vào bảng PurchasedStory và cập nhật ví của tác giả
            foreach ($chaptersToPurchase as $chapter) {
                $author = $chapter->user;
                // Kiểm tra hợp đồng của tác giả để lấy phần trăm chia sẻ doanh thu
                $contract = $author->contract;
                $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70;
                // dd($revenueShare);

                // Tính toán doanh thu của tác giả
                $authorEarnings = $chapter->price * ($revenueShare / 100);

                // Lưu thông tin mua chương vào bảng PurchasedStory
                $purchasedStory = PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'price' => $chapter->price,
                    'purchase_date' => now(),
                ]);

                // Kiểm tra ví của tác giả
                $wallet = $author->wallet;
                if (!$wallet) {
                    $wallet = Wallet::create([
                        'user_id' => $author->id,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }

                // Cộng số dư vào ví của tác giả
                $wallet->increment('balance', $authorEarnings);

                // Tạo giao dịch cho tác giả
                Transaction::create([
                    'wallet_id' => $wallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $authorEarnings,
                    'type' => 'credit',
                    'description' => 'Earnings from chapter purchase',
                    'status' => 'completed'
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

    public function purchaseChapter(Request $request, $chapterId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm chương vào giỏ hàng.');
        }

        $user = auth()->user(); // Người mua

        // Kiểm tra xem người dùng đã mua chapter này chưa
        $alreadyPurchased = PurchasedStory::where('user_id', $user->id)
            ->where('chapter_id', $chapterId)
            ->exists();

        if ($alreadyPurchased) {
            return response()->json(['message' => 'Bạn đã mua chapter này rồi.'], 400);
        }

        // Lấy thông tin chapter cần mua
        $chapter = Chapter::findOrFail($chapterId);

        // Kiểm tra nếu người dùng có đủ coin để mua
        $price = $chapter->price;
        if ($user->coin_earned < $price) {
            return response()->json(['message' => 'Bạn không đủ coin để mua chapter này.'], 400);
        }

        // Trừ coin của người dùng
        $user->decrement('coin_earned', $price);

        // Lưu thông tin mua chapter vào bảng purchased_chapters
        $purchasedStory = PurchasedStory::create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
            'price' => $price,
            'purchase_date' => now(),
        ]);

        // Lấy thông tin tác giả của chương
        $author = $chapter->user;

        // Kiểm tra hợp đồng của tác giả
        $contract = $author->contract;
        $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70; // Phần trăm mặc định là 70% nếu không có hợp đồng

        // Tính toán doanh thu của tác giả và của trang web
        $authorEarnings = $price * ($revenueShare / 100);
        $platformEarnings = $price - $authorEarnings;

        // Kiểm tra ví của tác giả
        $wallet = $author->wallet;
        if (!$wallet) {
            $wallet = Wallet::create([
                'user_id' => $author->id,
                'balance' => 0,
                'currency' => 'coin'
            ]);
        }

        // Cộng số dư vào ví của tác giả
        $wallet->increment('balance', $authorEarnings);

        // Tạo giao dịch cho tác giả
        Transaction::create([
            'wallet_id' => $wallet->id,
            'purchased_story_id' => $purchasedStory->id,
            'amount' => $authorEarnings,
            'type' => 'credit',
            'description' => 'Earnings from chapter purchase',
            'status' => 'completed'
        ]);

        return response()->json([
            'message' => 'Mua chapter thành công!',
            'author_earnings' => $authorEarnings,
            'platform_earnings' => $platformEarnings,
            'wallet_balance' => $wallet->balance
        ], 200);
    }
    public function purchase($bookSlug, $chapterId)
    {
        // Kiểm tra xem người dùng có đăng nhập không
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để mua chương này.');
        }

        $user = auth()->user(); // Lấy thông tin người dùng hiện tại

        // Kiểm tra xem người dùng đã mua chương này chưa
        $alreadyPurchased = PurchasedStory::where('user_id', $user->id)
            ->where('chapter_id', $chapterId)
            ->exists();

        if ($alreadyPurchased) {
            return response()->json(['message' => 'Bạn đã mua chương này rồi.'], 400);
        }

        // Tìm chương cần mua
        $chapter = Chapter::findOrFail($chapterId);
        $price = $chapter->price;
        // Kiểm tra nếu chương đã có giá là 0 thì không cần mua
        if ($price == 0) {
            return response()->json(['message' => 'Chương này miễn phí, bạn không cần mua.'], 200);
        }

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $price) {
            return response()->json(['message' => 'Bạn không đủ coin để mua chương này.'], 400);
        }

        // Trừ coin và lưu thông tin mua chương
        $user->decrement('coin_earned', $price);

        // Lưu thông tin mua chương vào bảng purchased_stories
        $purchasedStory = PurchasedStory::create([
            'user_id' => $user->id,
            'chapter_id' => $chapter->id,
            'price' => $price,
            'purchase_date' => now(),
        ]);

        // Lấy thông tin tác giả của chương
        $author = $chapter->user;

        // Kiểm tra hợp đồng của tác giả
        $contract = $author->contract;
        $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70; // Phần trăm mặc định là 70% nếu không có hợp đồng

        // Tính toán doanh thu của tác giả và của trang web
        $authorEarnings = $price * ($revenueShare / 100);
        $platformEarnings = $price - $authorEarnings;

        // Kiểm tra ví của tác giả
        $wallet = $author->wallet;
        if (!$wallet) {
            $wallet = Wallet::create([
                'user_id' => $author->id,
                'balance' => 0,
                'currency' => 'coin'
            ]);
        }

        // Cộng số dư vào ví của tác giả
        $wallet->increment('balance', $authorEarnings);

        // Tạo giao dịch cho tác giả
        Transaction::create([
            'wallet_id' => $wallet->id,
            'purchased_story_id' => $purchasedStory->id,
            'amount' => $authorEarnings,
            'type' => 'credit',
            'description' => 'Earnings from chapter purchase',
            'status' => 'completed'
        ]);

        return response()->json([
            'message' => 'Mua chương thành công!',
            'author_earnings' => $authorEarnings,
            'platform_earnings' => $platformEarnings,
            'wallet_balance' => $wallet->balance
        ], 200);
    }
    public function purchaseAllChaptersInBook($bookId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('message', 'Bạn cần đăng nhập để mua hàng.');
        }

        // Lấy người dùng hiện tại
        $user = Auth::user();

        // Lấy sách theo id
        $book = Book::findOrFail($bookId);

        // Lấy tất cả các chương trong sách
        $chapters = $book->chapters;

        // Kiểm tra các chương nào chưa được mua và có giá trị lớn hơn 0
        $chaptersToPurchase = $chapters->filter(function ($chapter) use ($user) {
            return $chapter->price > 0 && !PurchasedStory::where('chapter_id', $chapter->id)->where('user_id', $user->id)->exists();
        });

        // Nếu tất cả các chương đã được mua hoặc không có chương nào có giá trị
        if ($chaptersToPurchase->isEmpty()) {
            return redirect()->back()->with('message', 'Bạn đã mua tất cả các chương có giá trị trong sách này.');
        }

        // Tính tổng giá của các chương chưa được mua
        $totalPrice = $chaptersToPurchase->sum('price');

        // Kiểm tra xem người dùng có đủ tiền không
        if ($user->coin_earned < $totalPrice) {
            return redirect()->back()->with('error', 'Bạn không đủ coin để mua tất cả các chương này.');
        }

        try {
            DB::beginTransaction();

            // Trừ số dư người dùng
            $user->decrement('coin_earned', $totalPrice);

            // Lưu các chương đã mua vào bảng PurchasedStory và cập nhật ví của tác giả
            foreach ($chaptersToPurchase as $chapter) {
                $author = $chapter->user;

                // Kiểm tra hợp đồng của tác giả để lấy phần trăm chia sẻ doanh thu
                $contract = $author->contract;
                $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70;
                // Tính toán doanh thu của tác giả
                $authorEarnings = $chapter->price * ($revenueShare / 100);

                // Lưu thông tin mua chương vào bảng PurchasedStory
                $purchasedStory = PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'price' => $chapter->price,
                    'purchase_date' => now(),
                ]);

                // Kiểm tra ví của tác giả
                $wallet = $author->wallet;
                if (!$wallet) {
                    $wallet = Wallet::create([
                        'user_id' => $author->id,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }

                // Cộng số dư vào ví của tác giả
                $wallet->increment('balance', $authorEarnings);

                // Tạo giao dịch cho tác giả
                Transaction::create([
                    'wallet_id' => $wallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $authorEarnings,
                    'type' => 'credit',
                    'description' => 'Earnings from chapter purchase',
                    'status' => 'completed'
                ]);
            }

            DB::commit();

            // Trả về trang chi tiết truyện và hiển thị thông báo thành công
            return redirect()->back()->with('message', 'Thanh toán thành công. Bạn đã mua tất cả các chương có giá trị trong sách.');
        } catch (\Exception $e) {
            DB::rollBack();
            // Nếu có lỗi xảy ra, trả về trang chi tiết truyện và hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage());
        }
    }
}
