<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\chapter;
use App\Models\episode;
use App\Models\genre;
use App\Models\group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Events\BookCreated;
use App\Models\ApprovalHistory;
use App\Models\AutoPurchase;
use App\Models\DeleteHistory;
use App\Models\PurchasedStory;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\DB;
use Str;

class StoryController extends Controller
{
    public function index()
    {
        // lấy book
        $stories = Book::query()
            ->with('user', 'groups', 'ratings')
            ->whereHas('chapters', function ($query) {
                $query->where('approval', 1); // Kiểm tra xem ít nhất một chapter có trạng thái 'approved'
            })
            ->get();

        // Tính trung bình số sao cho mỗi truyện
        foreach ($stories as $story) {
            $averageRating = $story->ratings->isNotEmpty() ? $story->ratings->avg('rating') : 0;
            $story->average_stars = round($averageRating * 5 / 5, 1);
        }
        return view('admin.stories.list-story', compact('stories'));
    }
    //Create
    public function createBook()
    {
        $genres = genre::pluck('id', 'name');
        $groups = group::pluck('id', 'name');
        $users = User::all();
        return view('admin.stories.create', compact('genres', 'groups', 'users'));
    }
    public function createEpisode($book_id)
    {
        $users = User::all(); // Assuming you have a User model

        return view('admin.stories.episodes.create', compact('book_id', 'users'));
    }

    public function createChapter($episode_id)
    {
        // Lấy thông tin tập truyện (episode) theo episode_id
        $episode = episode::findOrFail($episode_id);

        // Lấy danh sách người dùng (user) để chọn người đăng
        $users = User::all();

        // Trả về view thêm chương với tập truyện đã chọn
        return view('admin.stories.chapter.create', compact('episode', 'users'));
    }

    //Show
    public function showBook(String $id)
    {
        $book = Book::with('genres', 'episodes', 'group')->findOrFail($id);
        $episodes = $book->episodes;

        return View('admin.stories.showStory', compact('book', 'episodes'));
    }
    public function showEpisode(String $id)
    {
        $episode = episode::with('chapters')->findOrFail($id);
        // dd($episode);
        return view('admin.stories.showEpisode', compact('book', 'episode'));
    }
    public function getChapterContent($id)
    {
        $chapter = chapter::select('id', 'title', 'content')
            ->where('id', $id)
            ->first();
        if (!$chapter) {
            return response()->json(['error' => 'Chapter not found'], 404);
        }
        return response()->json($chapter, 200);
    }

    //Store
    public function storeBook(Request $request)
    {

        // Validate input data
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'type' => 'required|integer',
            'status' => 'required|integer',
            'group_id' => 'required|integer',
            'user_id' => 'required|integer',
            'book_path' => 'nullable|image|max:2048', // Validate image upload
            'like' => 'required|integer|min:0',
            'view' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'note' => 'nullable|string',
        ]);
        // Process input data
        $adult = $request->has('adult') ? 1 : 0;
        // Create a new book entry
        $book = Book::create([
            'type' => $request->type,
            'status' => $request->status,
            'like' => $request->like,
            'view' => $request->view,
            'slug' => '',  // Temporary slug
            'title' => $request->title,
            'author' => $request->author,
            'painter' => $request->painter,
            'book_path' => '',  // To be updated later
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP' => $request->is_vip ?? 0,  // Default to 0 if not set
            'adult' => $adult,  // 0 or 1
            'group_id' => $request->group_id,
            'user_id' => $request->user_id,
        ]);

        // Generate slug and update the book
        $slug = Str::slug($book->id . '-' . $request->title);

        // Update the slug field
        $book->slug = $slug;
        $book->save();  // Save the book with the new slug
        // Handle image upload if provided
        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('books', $imageName, 'public'); // Save to storage/app/public/books
            $book->update(['book_path' => $path]); // Save the relative path to DB
        }

        // Attach genres if any
        if ($request->input('genres')) {
            $book->genres()->attach($request->input('genres'));
        }

        event(new BookCreated($book));

        // Redirect to story view
        return redirect()->route('admin_storylist')->with('success', 'Book created successfully');
    }
    public function storeEpisode(Request $request)
    {

        // Validate dữ liệu từ form
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'episode_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn ảnh là 2MB
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
        ]);

        // Lưu file ảnh episode
        if ($request->hasFile('episode_path')) {
            $file = $request->file('episode_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('episodes', $fileName, 'public'); // Lưu trong thư mục 'storage/app/public/episodes'
            $validatedData['episode_path'] = $filePath;
        }

        // Tạo mới episode với dữ liệu đã validate
        $episode = episode::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'episode_path' => $validatedData['episode_path'],
            'slug' => $validatedData['title'],
            'book_id' => $validatedData['book_id'],
            'user_id' => $validatedData['user_id'],
        ]);

        // Tạo slug bằng cách sử dụng ID của episode vừa tạo và tiêu đề
        $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
        $episode->slug = $slug;

        // Lưu lại slug vào episode
        $episode->save();

        return redirect()->route('admin_storylist')->with('success', 'Episode đã được thêm thành công.');
    }
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

            DB::beginTransaction(); // Bắt đầu giao dịch

            try {
                // Trừ coin và lưu thông tin mua chương
                $user->decrement('coin_earned', $chapter->price);

                // Lưu thông tin mua chương vào bảng purchased_stories
                $purchasedStory = PurchasedStory::create([
                    'user_id' => $user->id,
                    'chapter_id' => $chapter->id,
                    'price' => $chapter->price,
                    'purchase_date' => now(),
                ]);

                // Lấy thông tin tác giả của chương
                $author = $chapter->user;

                // Kiểm tra hợp đồng của tác giả
                $contract = $author->contracts()
                    ->where(function ($query) use ($chapter) {
                        $query->where('status', 'active')
                            ->whereDate('start_date', '<=', $chapter->created_at)
                            ->whereDate('end_date', '>=', $chapter->created_at);
                    })
                    ->orWhere(function ($query) use ($chapter) {
                        $query->where('status', 'expired')
                            ->whereDate('start_date', '<=', $chapter->created_at)
                            ->whereDate('end_date', '>=', $chapter->created_at);
                    })
                    ->first();

                $revenueShare = $contract && ($contract->status === 'active' || $contract->status === 'expired')
                    ? $contract->revenue_share
                    : 30;

                // Tính toán doanh thu của tác giả và của trang web
                $authorEarnings = $chapter->price * ($revenueShare / 100);
                $platformEarnings = $chapter->price - $authorEarnings;

                // Kiểm tra ví của tác giả
                $wallet = $author->wallet;
                if (!$wallet) {
                    $wallet = Wallet::create([
                        'user_id' => $author->id,
                        'balance' => 0,
                        'currency' => 'coin',
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
                    'description' => 'Earnings from auto-purchased chapter',
                    'status' => 'completed',
                ]);

                // Cập nhật ví admin
                $adminWallet = Wallet::where('user_id', 99999)->first(); // Giả sử admin có user_id là 99999
                if (!$adminWallet) {
                    $adminWallet = Wallet::create([
                        'user_id' => 99999,
                        'balance' => 0,
                        'currency' => 'coin',
                    ]);
                }
                $adminWallet->increment('balance', $platformEarnings);

                // Tạo giao dịch cho admin
                Transaction::create([
                    'wallet_id' => $adminWallet->id,
                    'purchased_story_id' => $purchasedStory->id,
                    'amount' => $platformEarnings,
                    'type' => 'admin',
                    'description' => 'Admin earnings from auto-purchased chapter',
                    'status' => 'completed',
                ]);

                DB::commit(); // Cam kết giao dịch nếu không có lỗi
            } catch (\Exception $e) {
                DB::rollBack(); // Nếu có lỗi, hoàn tác tất cả các thay đổi
                // Xử lý lỗi hoặc ghi log
            }
        }
    }

    public function storeChapter(Request $request)
    {
        // Bắt đầu một transaction
        DB::transaction(function () use ($request) {
            // Validate dữ liệu
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'episode_id' => 'required|exists:episodes,id',
                'user_id' => 'required|exists:users,id',
                'book_id' => 'required',
                'price' => 'required|numeric|min:0', // Thêm quy tắc xác thực cho price
                'approval' => 'required'
            ]);

            // Lấy thông tin về book từ episode_id
            $book = episode::find($request->episode_id)->book()->first();

            // Tính số từ cho content (loại bỏ các thẻ HTML)
            $contentText = strip_tags($validatedData['content']);
            $wordCount = str_word_count($contentText);

            // Tạo mới chapter
            $chapter = chapter::create([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'], // Lưu nguyên nội dung gốc
                'slug' => '',  // Temporary slug, sẽ tạo lại sau khi lưu
                'episode_id' => $validatedData['episode_id'],
                'user_id' => $validatedData['user_id'],
                'price' => $validatedData['price'],
                'book_id' => $validatedData['book_id'],
                'word_count' => $wordCount,
                'approval' => $validatedData['approval']

            ]);

            // Tạo slug từ chapter_id và tiêu đề
            $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
            $chapter->slug = $slug;

            // Lấy số thứ tự (order) mới cho chapter
            $lastOrder = $chapter->getChapterCountByBook($chapter->episode->id);
            $chapter->order = $lastOrder + 1;

            // Lưu lại chapter với slug và order mới
            $chapter->save();

            // Cập nhật lại số từ tổng cộng cho book
            $book->word_count += $wordCount;
            $book->save();

            // Thực hiện thanh toán tự động cho chapter (giả sử có một phương thức autoPurchaseForChapter)
        });

        // Điều hướng về trang chi tiết truyện
        return redirect()->route('admin_storyshow', ['id' => $request->book_id])
            ->with('success', 'Chương đã được thêm thành công.');
    }





    //Edit
    public function editBook(String $id)
    {
        $book = Book::findOrFail($id);
        $genres = genre::pluck('id', 'name');
        return view('admin.stories.editStory', compact('book', 'genres'));
    }

    public function editEpisode($id)
    {
        $episode = episode::findOrFail($id); // Tìm tập theo id
        $users = User::all(); // Danh sách người dùng

        return view('admin.stories.episodes.edit', compact('episode', 'users'));
    }
    public function editChapter($id)
    {
        $chapter = chapter::findOrFail($id); // Lấy chương theo id
        $users = User::all(); // Lấy danh sách người dùng để chọn người đăng

        return view('admin.stories.chapter.edit', compact('chapter', 'users'));
    }


    //update
    public function updateBook(Request $request, $id)
    {
        // Tìm cuốn sách dựa vào ID
        $book = Book::find($id);

        // Kiểm tra nếu cuốn sách không tồn tại
        if (!$book) {
            return redirect()->back()->with('error', 'Cuốn sách không tồn tại.');
        }

        // Validate các trường đầu vào
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'painter' => 'nullable|string|max:255',
            'view' => 'required|integer',
            'like' => 'required|integer',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'note' => 'nullable|string',
            'status' => 'required|boolean',
            'is_VIP' => 'required|boolean',
            'adult' => 'required|boolean',
            'user_id' => 'required|integer|exists:users,id',
            'group_id' => 'nullable|integer',
            'book_path' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn file ảnh

        ]);

        // Handle image upload if provided
        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('books', $imageName, 'public'); // Save to storage/app/public/books
            $book->update(['book_path' => $path]); // Save the relative path to DB
        }
        // Cập nhật các trường khác
        $book->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => $request->author,
            'painter' => $request->painter,
            'view' => $request->view,
            'like' => $request->like,
            'type' => $request->type,
            'description' => $request->description,
            'note' => $request->note,
            'status' => $request->status,
            'is_VIP' => $request->is_VIP,
            'adult' => $request->adult,
            'is_delete' => $request->is_delete,
            'user_id' => $request->user_id,
            'group_id' => $request->group_id,
        ]);

        // Điều hướng người dùng trở lại với thông báo thành công
        return redirect()->route('admin_storylist')->with('success', 'Cập nhật sách thành công.');
    }

    public function updateEpisode(Request $request, $id)
    {
        $episode = episode::findOrFail($id);

        // Validate dữ liệu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'episode_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Giới hạn ảnh là 2MB
            'user_id' => 'required|exists:users,id',
        ]);

        // Xử lý upload file ảnh mới (nếu có)
        if ($request->hasFile('episode_path')) {
            // Xóa ảnh cũ nếu có
            if ($episode->episode_path) {
                Storage::disk('public')->delete($episode->episode_path);
            }

            $file = $request->file('episode_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('episodes', $fileName, 'public');
            $validatedData['episode_path'] = $filePath;
        }

        // Cập nhật episode với dữ liệu đã validate
        $episode->update($validatedData);

        // Tạo lại slug nếu cần
        $slug = Str::slug('t' . $episode->id . '-' . $validatedData['title']);
        $episode->slug = $slug;

        $episode->save();

        return redirect()->route('admin_storyshow', $episode->book_id)->with('success', 'Episode đã được cập nhật thành công.');
    }

    public function updateChapter(Request $request, $id)
    {
        // Validate dữ liệu
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'episode_id' => 'required|exists:episodes,id',
            'user_id' => 'required|exists:users,id',
            'price' => 'required|numeric|min:0', // Thêm quy tắc xác thực cho price
            'approval' => 'required'
        ]);

        // Tìm chapter cần cập nhật
        $chapter = chapter::findOrFail($id);
        $book = $chapter->episode->book;

        // Tính word count cho content (loại bỏ thẻ HTML)
        $contentText = strip_tags($validatedData['content']);
        $newWordCount = str_word_count($contentText);
        $oldWordCount = $chapter->word_count;

        // Cập nhật thông tin chapter
        $chapter->update([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'], // Lưu nguyên nội dung gốc
            'episode_id' => $validatedData['episode_id'],
            'user_id' => $validatedData['user_id'],
            'price' => $validatedData['price'],
            'word_count' => $newWordCount,
            'approval' => $validatedData['approval']
        ]);

        // Cập nhật slug nếu tiêu đề thay đổi
        if ($chapter->isDirty('title')) {
            $slug = 'c' . $chapter->id . '-' . Str::slug($validatedData['title']);
            $chapter->slug = $slug;
            $chapter->save();
        }

        // Cập nhật lại số từ cho sách (book)
        $book->word_count = $book->word_count - $oldWordCount + $newWordCount;
        $book->save();

        // Điều hướng về trang chi tiết truyện
        return redirect()->route('admin_storyshow', ['id' => $book->id])
            ->with('success', 'Chương đã được cập nhật thành công.');
    }



    //Destroy
    public function destroyBook($id)
    {
        try {
            // Tìm cuốn sách theo ID
            $book = Book::findOrFail($id);

            // Xóa cuốn sách (sử dụng Soft Delete nếu có)
            $book->delete();

            // Điều hướng về trang danh sách với thông báo thành công
            return redirect()->route('admin.books.index')->with('success', 'Sách đã được xóa thành công.');
        } catch (\Exception $e) {
            // Xử lý lỗi nếu có
            return redirect()->route('admin_storylist')->with('error', 'Có lỗi xảy ra khi xóa sách: ' . $e->getMessage());
        }
    }
    public function destroyEpisode($id)
    {
        // Tìm tập theo id
        $episode = episode::findOrFail($id);

        // Xóa file ảnh của tập nếu có
        if ($episode->episode_path) {
            Storage::disk('public')->delete($episode->episode_path);
        }

        // Xóa tập
        $episode->delete();

        // Chuyển hướng về trang danh sách truyện hoặc trang chi tiết truyện
        return redirect()->route('admin_storyshow', ['id' => $episode->book_id])
            ->with('success', 'Tập đã được xóa thành công.');
    }
    // Xử lý xóa chương
    public function destroyChapter($id)
    {
        // Tìm chương theo id
        $chapter = chapter::findOrFail($id);

        // Xóa chương
        $chapter->delete();

        // Điều hướng về trang chi tiết tập truyện hoặc danh sách tập
        return redirect()->back()->with('success', 'Chương đã được xóa thành công.');
    }

    public function trashedStories()
    {
        // Lấy danh sách các truyện đã bị xóa mềm
        $trashedStories = Book::onlyTrashed()->with('user', 'group')->paginate(10);

        return view('admin.stories.trashed-story', compact('trashedStories'));
    }

    public function restoreStory($id)
    {
        $story = Book::onlyTrashed()->findOrFail($id);
        $story->restore();
        return redirect()->route('admin_stories_trashed')->with('success', 'Truyện đã được khôi phục.');
    }

    public function forceDeleteStory($id)
    {
        $story = Book::onlyTrashed()->with('episodes')->findOrFail($id);

        // Kiểm tra nếu truyện còn tập liên kết
        if ($story->episodes()->count() > 0) {
            // Hiển thị thông báo nếu còn dữ liệu liên kết
            return redirect()->route('admin_stories_trashed')->with('error', 'Không thể xóa truyện vì còn tồn tại tập liên kết.');
        }

        // Nếu không có dữ liệu liên kết, thực hiện xóa vĩnh viễn
        $story->forceDelete();

        return redirect()->route('admin_stories_trashed')->with('success', 'Truyện đã bị xóa vĩnh viễn.');
    }

    public function approvalList()
    {
        $pendingStories = Book::with(['user:id,username']) // Lấy thông tin user liên quan
            ->withCount(['chapters as pending_chapters_count' => function ($query) {
                $query->where('approval', 0); // Đếm chapters chưa duyệt
            }])
            ->whereHas('chapters', function ($query) {
                $query->where('approval', 0); // Chỉ lấy sách có chapters chưa duyệt
            })
            ->paginate(10);

        $noChapterStories = Book::with(['user:id,username'])
            ->doesntHave('chapters') // Chỉ lấy sách không có chương nào
            ->where('Is_Inspect', 0)
            ->paginate(10);

        $Histories = ApprovalHistory::with(['chapter', 'user'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $DeletedBooks = DeleteHistory::with(['book', 'user'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

       $combined = $Histories->merge($DeletedBooks)->sortByDesc('created_at')->values();

        return view('admin.stories.approval-list', compact('pendingStories', 'noChapterStories', 'combined'));
    }
    public function ChapterNeedApprovalList($book_id)
    {
        $chapters = chapter::where('book_id', $book_id)
            ->where('approval', 0) // Giả sử '0' là trạng thái chưa được duyệt
            ->paginate(10);
        return view('admin.stories.chapter-need-approval', compact('chapters'));
    }

    public function approveStory($id)
    {
        $story = chapter::findOrFail($id);
        $book = $story->book;
        // Cập nhật trạng thái duyệt của chương
        $story->update([
            'approval' => '1',  // Gán trạng thái duyệt là "Đã duyệt"
        ]);
        $this->autoPurchaseForChapter($id);

        // Cập nhật trạng thái Is_Inspect của sách nếu ít nhất một chương đã duyệt
        if ($book->chapters()->where('approval', 1)->exists()) {
            $book->update([
                'Is_Inspect' => 1,  // Đặt trạng thái là đã duyệt nếu ít nhất một chương đã duyệt
            ]);
        }

        // Thêm vào bảng approval_histories
        ApprovalHistory::create([
            'chapter_id' => $id,
            'user_id' => auth()->id(),
            'reason'  => null, // Không có lý do khi duyệt
            'status' => 'approved',
        ]);

        return redirect()->route('admin_chapter_approval', $book->id)->with('success', 'Truyện đã được duyệt.');
    }

    public function rejectStory(Request $request, $id)
    {
        $story = chapter::findOrFail($id);
        $book = $story->book;

        // Cập nhật trạng thái duyệt của chương
        // Xác thực lý do từ chối
        $request->validate([
            'reason' => 'required|string|max:255',
        ]);

        $story->update([
            'approval' => '2',  // Gán trạng thái là "Từ chối"
        ]);

        // Thêm vào bảng approval_histories
        ApprovalHistory::create([
            'chapter_id' => $id,
            'user_id' => auth()->id(),
            'reason'  => $request->reason, // Lý do từ chối
            'status' => 'rejected',
        ]);

        // Kiểm tra và cập nhật trạng thái Is_Inspect của sách
        if (!$book->chapters()->where('approval', 1)->exists()) {
            $book->update([
                'Is_Inspect' => 0,  // Đặt trạng thái Is_Inspect thành 0 nếu không còn chương nào được duyệt
            ]);
        }

        return redirect()->route('admin_chapter_approval', $book->id)->with('error', 'Truyện đã bị từ chối.');
    }

    public function showPublicationHistory($bookId)
    {
        // Lấy sách cùng với các tập, chương và người dùng được chia sẻ
        $book = Book::with(['episodes.chapters', 'episodes.user', 'episodes.chapters.user', 'sharedUsers.user'])->findOrFail($bookId);

        return view('admin.books.history', compact('book'));
    }
    public function ApprovalHistory()
    {
        // Eager load các mối quan hệ `chapter` và `user` để giảm số lượng truy vấn
        $Histories = ApprovalHistory::with(['chapter', 'user'])->paginate(10);

        return view('admin.stories.approval-history', compact('Histories'));
    }

    public function deleteBook(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'reason' => 'required|string|max:255',
        ]);

        DeleteHistory::create([
            'book_id' => $request->book_id,
            'user_id' => auth()->id(),
            'reason' => $request->reason,
        ]);

        Book::findOrFail($request->book_id)->delete();

        return redirect()->back()->with('success', 'Truyện đã được xóa ');
    }

}
