<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
    public function createOrder(Request $request)
    {
        if (!Auth::check()) {
            return back()->with('error', 'Bạn cần đăng nhập để mua các chương này.');
        }

        $user = Auth::user();

        // Lấy danh sách ID các mục được chọn từ request
        $selectedItemIds = $request->input('selected_items');
        if (empty($selectedItemIds)) {
            return back()->with('error', 'Vui lòng chọn ít nhất một mục để thanh toán.');
        }

        $cartItems = Cart::where('user_id', $user->id)->whereIn('id', $selectedItemIds)->get();

        // Kiểm tra nếu không có mục nào trong giỏ hàng hoặc không hợp lệ
        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Không tìm thấy mục nào để thanh toán.');
        }

        // Lọc các chương đã mua
        $cartItems = $cartItems->filter(function ($item) use ($user) {
            return !PurchasedStory::where('user_id', $user->id)->where('chapter_id', $item->chapter_id)->exists();
        });

        // Kiểm tra nếu tất cả các chương đã được mua
        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Tất cả các chương được chọn đã được mua.');
        }

        // Tính tổng giá tiền
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->chapter->price;
        });

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $totalPrice) {
            return back()->with('error', 'Bạn không đủ coin để mua các chương này.');
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

                // Tính toán doanh thu của admin
                $adminEarnings = $chapter->price - $authorEarnings;

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
                    'type' => 'coin',
                    'description' => 'Earnings from chapter purchase',
                    'status' => 'completed'
                ]);

                // Cập nhật ví admin
                $adminWallet = Wallet::where('user_id', 99999)->first(); // Giả sử admin có user_id là 99999
                if (!$adminWallet) {
                    $adminWallet = Wallet::create([
                        'user_id' => 99999,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }
                $adminWallet->increment('balance', $adminEarnings);

                // Tạo giao dịch cho admin
                Transaction::create([
                    'wallet_id' => $adminWallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $adminEarnings,
                    'type' => 'admin',
                    'description' => 'Admin earnings from chapter purchase',
                    'status' => 'completed'
                ]);

                // Xóa chương khỏi giỏ hàng
                $item->delete();
            }

            DB::commit();
            // Your code for processing the payment
            return back()->with('status', 'success')->with('message', 'Thanh toán thành công!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('status', 'error')->with('message', 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage());
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
        $chapters = $episode->chapters->where('approval', 1);

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

            foreach ($chaptersToPurchase as $chapter) {
                $author = $chapter->user;

                // Kiểm tra hợp đồng của tác giả để lấy phần trăm chia sẻ doanh thu
                $contract = $author->contract;
                $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70;

                // Tính toán doanh thu của tác giả và admin
                $authorEarnings = $chapter->price * ($revenueShare / 100);
                $adminEarnings = $chapter->price - $authorEarnings;

                // Lưu thông tin mua chương vào bảng PurchasedStory
                $purchasedStory = PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'price' => $chapter->price,
                    'purchase_date' => now(),
                ]);

                // Cập nhật ví của tác giả
                $authorWallet = $author->wallet;
                if (!$authorWallet) {
                    $authorWallet = Wallet::create([
                        'user_id' => $author->id,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }
                $authorWallet->increment('balance', $authorEarnings);

                // Tạo giao dịch cho tác giả
                Transaction::create([
                    'wallet_id' => $authorWallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $authorEarnings,
                    'type' => 'coin',
                    'description' => 'Earnings from chapter purchase',
                    'status' => 'completed'
                ]);
                // Cập nhật ví admin
                $adminWallet = Wallet::where('user_id', 99999)->first(); // Giả sử admin có user_id là 1
                if (!$adminWallet) {
                    $adminWallet = Wallet::create([
                        'user_id' => 99999,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }
                $adminWallet->increment('balance', $adminEarnings);

                // Tạo giao dịch cho admin
                Transaction::create([
                    'wallet_id' => $adminWallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $adminEarnings,
                    'type' => 'admin',
                    'description' => 'Admin earnings from chapter purchase',
                    'status' => 'completed'
                ]);
            }

            DB::commit();

            return redirect()->back()->with('message', 'Thanh toán thành công. Bạn đã mua tất cả các chương có giá trị trong tập truyện.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thanh toán: ' . $e->getMessage());
        }
    }


    public function purchaseChapter(Request $request, $chapterId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để mua chương này.');
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
        $chapter = chapter::findOrFail($chapterId);
        if ($chapter->approval != 1) {
            return response()->json(
                ['message' => 'Chapter này chưa được phê duyệt.'],
                400
            );
        }
        // Kiểm tra nếu người dùng có đủ coin để mua
        $price = $chapter->price;
        if ($user->coin_earned < $price) {
            return response()->json(['message' => 'Bạn không đủ coin để mua chapter này.'], 400);
        }

        DB::beginTransaction(); // Bắt đầu giao dịch

        try {
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
                'type' => 'coin',
                'description' => 'Earnings from chapter purchase',
                'status' => 'completed'
            ]);

            // Cập nhật ví admin
            $adminWallet = Wallet::where('user_id', 99999)->first(); // Giả sử admin có user_id là 1
            if (!$adminWallet) {
                $adminWallet = Wallet::create([
                    'user_id' => 99999,
                    'balance' => 0,
                    'currency' => 'coin'
                ]);
            }
            $adminWallet->increment('balance', $platformEarnings);

            // Tạo giao dịch cho admin
            Transaction::create([
                'wallet_id' => $adminWallet->id,
                'purchased_story_id' => $purchasedStory->id,
                'amount' => $platformEarnings,
                'type' => 'admin',
                'description' => 'Admin earnings from chapter purchase',
                'status' => 'completed'
            ]);

            DB::commit(); // Cam kết giao dịch nếu không có lỗi
            return response()->json([
                'message' => 'Mua chapter thành công!',
                'author_earnings' => $authorEarnings,
                'platform_earnings' => $platformEarnings,
                'wallet_balance' => $wallet->balance
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack(); // Nếu có lỗi, hoàn tác tất cả các thay đổi
            return response()->json(['message' => 'Đã xảy ra lỗi khi thực hiện giao dịch: ' . $e->getMessage()], 500);
        }
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
        $chapter = chapter::findOrFail($chapterId);
        if ($chapter->approval != 1) {
            return response()->json(['message' => 'Chương này chưa được phê duyệt.'], 400);
        }

        $price = $chapter->price;

        // Kiểm tra nếu chương đã có giá là 0 thì không cần mua
        if ($price == 0) {
            return response()->json(['message' => 'Chương này miễn phí, bạn không cần mua.'], 200);
        }

        // Kiểm tra số dư coin của người dùng
        if ($user->coin_earned < $price) {
            return response()->json(['message' => 'Bạn không đủ coin để mua chương này.'], 400);
        }

        DB::beginTransaction(); // Bắt đầu giao dịch

        try {
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
                'type' => 'coin',
                'description' => 'Earnings from chapter purchase',
                'status' => 'completed'
            ]);

            // Cập nhật ví admin
            $adminWallet = Wallet::where('user_id', 99999)->first(); // Giả sử admin có user_id là 1
            if (!$adminWallet) {
                $adminWallet = Wallet::create([
                    'user_id' => 99999,
                    'balance' => 0,
                    'currency' => 'coin'
                ]);
            }
            $adminWallet->increment('balance', $platformEarnings);

            // Tạo giao dịch cho admin
            Transaction::create([
                'wallet_id' => $adminWallet->id,
                'purchased_story_id' => $purchasedStory->id,
                'amount' => $platformEarnings,
                'type' => 'admin',
                'description' => 'Admin earnings from chapter purchase',
                'status' => 'completed'
            ]);

            DB::commit(); // Cam kết giao dịch nếu không có lỗi
            return response()->json([
                'message' => 'Mua chương thành công!',
                'author_earnings' => $authorEarnings,
                'platform_earnings' => $platformEarnings,
                'wallet_balance' => $wallet->balance
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack(); // Nếu có lỗi, hoàn tác tất cả các thay đổi
            return response()->json(['message' => 'Đã xảy ra lỗi khi thực hiện giao dịch: ' . $e->getMessage()], 500);
        }
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
        $chapters = $book->chapters->where('approval', 1);;

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
                $platformEarnings = $chapter->price - $authorEarnings;

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
                    'type' => 'coin',
                    'description' => 'Earnings from chapter purchase',
                    'status' => 'completed'
                ]);
                // Cập nhật ví admin
                $adminWallet = Wallet::where('user_id', 99999)->first(); // Giả sử admin có user_id là 1
                if (!$adminWallet) {
                    $adminWallet = Wallet::create([
                        'user_id' => 99999,
                        'balance' => 0,
                        'currency' => 'coin'
                    ]);
                }
                $adminWallet->increment('balance', $platformEarnings);

                // Tạo giao dịch cho admin
                Transaction::create([
                    'wallet_id' => $adminWallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $platformEarnings,
                    'type' => 'admin',
                    'description' => 'Admin earnings from chapter purchase',
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
