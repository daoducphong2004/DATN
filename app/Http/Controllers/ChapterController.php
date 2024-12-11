<?php

namespace App\Http\Controllers;

use App\Models\chapter;
use App\Models\AutoPurchase;
use App\Models\episode;
use App\Models\PurchasedStory;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Str;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function autoPurchaseForChapter($chapterId)
    {
        $chapter = chapter::findOrFail($chapterId);

        // Nếu chương không có phí, không cần xử lý
        if ($chapter->price <= 0) {
            return;
        }

        // Lấy danh sách người dùng đã bật AutoPurchase cho sách này
        $autoPurchasers = AutoPurchase::where('book_id', $chapter->book_id)
            ->where('status', true)
            ->get();

        foreach ($autoPurchasers as $autoPurchase) {
            $user = $autoPurchase->user;

            // Kiểm tra nếu người dùng đã mua chương này
            $alreadyPurchased = PurchasedStory::where('user_id', $user->id)
                ->where('chapter_id', $chapter->id)
                ->exists();

            if ($alreadyPurchased) {
                continue;
            }

            // Kiểm tra nếu người dùng có đủ coin để mua
            if ($user->coin_earned < $chapter->price) {
                // Gửi thông báo nếu không đủ coin (nếu có hệ thống thông báo)
                continue;
            }

            // Trừ coin của người dùng
            $user->decrement('coin_earned', $chapter->price);

            // Lưu thông tin mua chương vào bảng PurchasedStory
            $purchasedStory = PurchasedStory::create([
                'user_id' => $user->id,
                'chapter_id' => $chapter->id,
                'price' => $chapter->price,
                'purchase_date' => now(),
            ]);

            // Lấy thông tin tác giả của chương
            $author = $chapter->user;

            // Kiểm tra hợp đồng của tác giả
            $contract = $author->contract;
            $revenueShare = $contract && $contract->status === 'active' ? $contract->revenue_share : 70;

            // Tính toán doanh thu của tác giả và nền tảng
            $authorEarnings = $chapter->price * ($revenueShare / 100);

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
                'description' => 'Earnings from auto-purchased chapter',
                'status' => 'completed'
            ]);

            $auto = DB::table('auto_purchases')
            ->where('book_id', $chapter->book->id)
            ->pluck('user_id');

            foreach ($auto as $userId) {
                DB::table('notifications')->insert([
                    'type' => 'App\Notifications\AutoPurchasesNotification',
                    'notifiable_id' => $userId,
                    'notifiable_type' => 'App\Models\User',
                    'data' => json_encode([
                        'message' => 'Chương <strong>' . $chapter->title . '</strong> của truyện <strong>' . $chapter->book->title . '</strong> đã tự động được mua!',
                        'slug' => $chapter->book->slug,
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
    public function store(Request $request)
    {
        // Bắt đầu một transaction
        DB::transaction(function () use ($request) {
            // Validation
            $validatedData = $request->validate([
                'episode_id' => 'required|integer|exists:episodes,id',
                'title' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'content' => 'required|string',
                'price' => 'required|numeric|min:0|max:999999', // Thêm quy tắc xác thực cho price với kiểu decimal(8,2)
            ]);

            // Loại bỏ tất cả các thẻ HTML để chỉ lấy văn bản
            $contentText = strip_tags($validatedData['content']);

            // Tính số từ từ nội dung đã loại bỏ thẻ HTML
            $wordCount = str_word_count($contentText);

            // Get the book associated with the episode
            $book = episode::find($validatedData['episode_id'])->book()->first();

            // Check if the user has permission to edit the book
            if (!$this->canEditBook(Auth::user(), $book)) {
                return redirect()->back()->with('error', 'You do not have permission to edit this book.');
            }

            // Create new chapter
            $chapter = new Chapter();
            $chapter->episode_id = $validatedData['episode_id'];
            $chapter->title = $validatedData['title'];
            $chapter->slug = '';
            $chapter->book_id = $book->id;
            $chapter->user_id = Auth::id();
            $chapter->content = $validatedData['content']; // Lưu nguyên nội dung gốc
            $chapter->price = $validatedData['price']; // Gán giá
            $chapter->word_count = $wordCount; // Lưu số từ
            $chapter->approval = 0;
            $chapter->save();

            // Create slug from chapter_id and title
            $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
            $chapter->slug = $slug;

            // Get last order for chapter
            $lastOrder = $chapter->getChapterCountByBook($chapter->episode->id);
            $chapter->order = $lastOrder;

            // Save the chapter again with the updated slug
            $chapter->save();

            // Update the word count for the book (sum of all chapters)
            $book->word_count += $wordCount;
            $book->save();
            

            // event(new NewChapterAdded($chapter));

            $followers = DB::table('like_books')
                ->where('book_id', $book->id)
                ->pluck('user_id');

            foreach ($followers as $follower) {
                DB::table('notifications')->insert([
                    'type' => 'App\Notifications\NewChapterNotification',
                    'notifiable_id' =>$follower,
                    'notifiable_type' => 'App\Models\User',
                    'data' => json_encode([
                        'message' => 'Truyện <strong>' . $book->title . '</strong> đã có chương mới!',
                        'slug' => $book->slug,
                    ]),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }



    public function uploadImage(Request $request)
    {
        // Kiểm tra xem có file nào được gửi lên không
        if ($request->hasFile('file')) {
            // Lưu file vào thư mục public/uploads
            $path = $request->file('file')->store('uploads', 'public');
            // Lấy URL công khai của file vừa lưu
            $url = Storage::url($path);

            // Trả về URL của ảnh dưới dạng JSON để chèn vào TinyMCE
            return response()->json(['location' => $url]);
        }

        return response()->json(['error' => 'Upload failed'], 400);
    }


    // Hàm để lưu ảnh từ base64
    public function storeImageFromBase64($base64Image)
    {
        // Tách phần base64 và loại bỏ dữ liệu prefix
        list($type, $data) = explode(';', $base64Image);
        list(, $data) = explode(',', $data);

        // Giải mã base64
        $imageData = base64_decode($data);

        // Tạo tên file ngẫu nhiên
        $imageName = uniqid() . '.png'; // Bạn có thể thay đổi định dạng nếu cần

        // Lưu file vào storage (public)
        $path = 'images/' . $imageName;
        Storage::disk('public')->put($path, $imageData);

        // Trả về URL ảnh
        return Storage::url($path);
    }

    // API xử lý yêu cầu từ frontend để lưu ảnh
    public function saveBase64Image(Request $request)
    {
        // Nhận dữ liệu base64 từ frontend
        $base64Image = $request->input('image');

        // Gọi hàm lưu ảnh và nhận URL ảnh đã lưu
        $imageUrl = $this->storeImageFromBase64($base64Image);

        // Trả về URL ảnh dưới dạng JSON
        return response()->json(['imageUrl' => $imageUrl]);
    }
    /**
     * Display the specified resource.
     */
    public function show(chapter $chapter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $chapter = chapter::findOrFail($id);

        return view('stories.iframe.chapters.formUpdateChapter', compact('chapter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validation
        $validatedData = $request->validate([
            'episode_id' => 'required|integer|exists:episodes,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|string',
            'price' => 'required|numeric', // Thêm xác thực cho 'price'
        ]);

        // Tìm chapter cần cập nhật
        $chapter = chapter::findOrFail($id);
        $book = episode::findOrFail($validatedData['episode_id'])->book;

        // Tính lại số từ mới
        $newWordCount = str_word_count(strip_tags($validatedData['content']));

        // Cập nhật các thông tin của chapter
        $chapter->episode_id = $validatedData['episode_id'];
        $chapter->title = $validatedData['title'];
        $chapter->slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
        $chapter->book_id = $book->id;
        $chapter->content = $validatedData['content']; // Không cần xử lý DOM
        $chapter->price = $validatedData['price']; // Cập nhật giá của chapter
        $chapter->word_count = $newWordCount; // Cập nhật lại số từ mới
        $chapter->approval = 0;

        // Xử lý cập nhật hình ảnh nếu có
        if ($request->hasFile('image')) {
            // Lưu hình ảnh và cập nhật đường dẫn
            $imagePath = $request->file('image')->store('images/chapters', 'public');
            $chapter->image = $imagePath;
        }

        // Lưu chapter
        $chapter->save();

        // Cập nhật lại số từ tổng cộng cho sách (book)
        // Trừ đi số từ cũ và thêm vào số từ mới
        $book->word_count = $book->word_count - $chapter->getOriginal('word_count') + $newWordCount;
        $book->save();

        return redirect()->route('chapter.edit', $chapter->id)->with('success', 'Chapter updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Find the chapter or fail if it doesn't exist
            $chapter = chapter::findOrFail($id);

            // Detach the associated genres
            // $chapter->genres()->detach();

            // Get the book ID associated with the chapter
            // $bookId = $chapter->book_id;

            // Delete the chapter
            $chapter->delete();

            // Return a JSON response with success status
            return response()->json(['success' => true, 'message' => 'Chapter đã được xóa thành công!']);
        } catch (\Exception $e) {
            // Log the error message
            \Log::error('Error deleting chapter: ' . $e->getMessage());

            // Return a JSON response with error status
            return response()->json(['success' => false, 'message' => 'Có lỗi xảy ra khi xóa chapter. Vui lòng thử lại.']);
        }
    }

    //sắp xếp thứ tự chapter
    public function showChapters($episodeId)
    {
        // Lấy tất cả các chương của tập truyện cụ thể và sắp xếp theo 'order'
        $chapters = chapter::where('episode_id', $episodeId)->orderBy('order')->get();
        return view('stories.iframe.chapters.sort', compact('chapters', 'episodeId'));
    }
    public function updateChapterOrder(Request $request, $episodeId)
    {
        $order = $request->input('order'); // Nhận thứ tự từ request

        foreach ($order as $position => $id) {
            chapter::where('id', $id)
                ->where('episode_id', $episodeId) // Đảm bảo chỉ cập nhật các chương của tập truyện cụ thể
                ->update(['order' => $position + 1]);
        }

        return response()->json(['status' => 'success']);
    }
}
