<?php

namespace App\Http\Controllers;

use App\Events\StoryFollowed;
use App\Models\book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use App\Models\bookcomment;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\genre;
use App\Models\group;
use App\Models\PurchasedStory;
use App\Models\Rating;
use App\Models\ReadingHistory;
use App\Models\SharedBook;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Events\BookCreated;
use App\Models\Like_books;
use Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {

         // $this->middleware('auth');

         $this->middleware('can:create')->only(['create', 'store']);
     }


    public function listStories()
    {
        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');
        $data = book::query()->where('Is_Inspect', 1)->paginate(30);
        return view('story.index', compact('data', 'genres', 'groups'));
    }

    public function bookComment($bookId)
    {
        $comments = bookcomment::with('user')
            ->where('book_id', $bookId)
            ->whereNull('parent_id')
            ->with('replies.replies')->get();

        $book = book::findOrFail($bookId);

        return view('story.show', compact('comments', 'book'));
    }

    public function reading(string $slug, string $chapter_slug, Request $request)
    {
        // Tìm kiếm book dựa trên slug
        $book = book::where('slug', $slug)->where('Is_Inspect', 1)->with('episodes')->firstOrFail();

        // Tăng giá trị của trường `view`
        $book->increment('view');

        // Tăng lượt xem cho tuần và tháng
        $book->increment('views_week');
        $book->increment('views_month');

        // Reset lượt xem theo tuần
        $this->resetWeeklyViews();

        // Reset lượt xem theo tháng
        $this->resetMonthlyViews();

        // Tìm kiếm chapter dựa trên chapter_slug
        $chapter = chapter::where('slug', $chapter_slug)->firstOrFail();

        // Lấy episode liên quan đến chapter
        $episode = $chapter->episode()->with('chapters')->firstOrFail();

        // Lấy danh sách các chapters trong episode của chapter hiện tại
        $chapters = $episode->chapters;

        // Lấy danh sách comments cho chapter này
        $comments = chaptercomment::with('user')
            ->where('chapter_id', $chapter->id)
            ->whereNull('parent_id')->get();

        $parentId = $request->input('parent_id');

        // Kiểm tra xem người dùng có đăng nhập hay không
        $user = auth()->user();
        $fullContent = $chapter->content; // Nội dung đầy đủ của chương
        $partialContent = null; // Nội dung hiển thị một phần
        $canViewFullContent = false; // Mặc định là không thể xem toàn bộ nội dung nếu chưa mua

        // Nếu chương có giá > 0 và người dùng chưa mua, chỉ hiển thị 2/10 nội dung
        if ($chapter->price > 0) {
            // Nếu người dùng chưa đăng nhập hoặc chưa mua chương
            if (!$user || !$user->hasPurchased($chapter->id)) {
                // Chỉ hiển thị 2/10 nội dung chương nếu chưa mua
                $partialContent = $this->getPartialContent($fullContent);
            } else {
                // Người dùng đã mua, có thể xem toàn bộ nội dung
                $canViewFullContent = true;
                $partialContent = $fullContent;
            }
        } else {
            // Nếu chương miễn phí, người dùng có thể xem toàn bộ
            $canViewFullContent = true;
            $partialContent = $fullContent;
        }

        // Lưu lịch sử đọc chương
        $this->storeReadingHistory($book->id, $chapter->id);

        return view('story.reading', compact('book', 'episode', 'chapters', 'chapter', 'comments', 'parentId', 'partialContent', 'fullContent', 'canViewFullContent'));
    }

    /**
     * Cắt nội dung để hiển thị 2/10 nội dung.
     */
    private function getPartialContent($content)
    {
        $totalWords = str_word_count(strip_tags($content));
        $wordsToShow = (int) ($totalWords * 0.2); // Hiển thị 20% số từ

        // Cắt nội dung theo số từ cần hiển thị
        $wordsArray = explode(' ', strip_tags($content));
        $partialContent = implode(' ', array_slice($wordsArray, 0, $wordsToShow));

        return $partialContent . '...'; // Thêm dấu "..." để hiển thị phần còn lại bị ẩn
    }


    // Function to save reading history
    private function storeReadingHistory($bookId, $chapterId)
    {
        $user = Auth::user();

        if ($user) {
            // Check if a reading history already exists for the current book
            $existingHistory = ReadingHistory::where('user_id', $user->id)
                ->where('book_id', $bookId)
                ->first();

            if ($existingHistory) {
                // Update the existing history with the new chapter
                $existingHistory->chapter_id = $chapterId;
                $existingHistory->last_read_at = Carbon::now();
                $existingHistory->save();
            } else {
                // Create a new reading history entry
                $readingHistory = new ReadingHistory();
                $readingHistory->user_id = $user->id;
                $readingHistory->book_id = $bookId; // Add the book ID
                $readingHistory->chapter_id = $chapterId;
                $readingHistory->last_read_at = Carbon::now();
                $readingHistory->save();
            }
        } else {
            // Save to cookie or cache for guest users
            $this->saveToLocal($bookId, $chapterId);
        }
    }

    // Save to local storage (cookie or cache)
    private function saveToLocal($bookId, $chapterId)
    {
        $cookieName = 'reading_history';
        $existingHistory = json_decode(Cookie::get($cookieName), true) ?? [];

        // Ensure that the history entry for the book is an array, not a scalar value
        if (!isset($existingHistory[$bookId]) || !is_array($existingHistory[$bookId])) {
            $existingHistory[$bookId] = [
                'book_id' => $bookId,
                'chapter_id' => $chapterId,
                'last_read_at' => now()->timestamp, // Store timestamp of the last read
            ];
        } else {
            // If the book already exists, just update the chapter_id and last_read_at
            $existingHistory[$bookId]['chapter_id'] = $chapterId;
            $existingHistory[$bookId]['last_read_at'] = now()->timestamp;
        }

        // Save updated history to the cookie (expires in 30 days)
        Cookie::queue(Cookie::make($cookieName, json_encode($existingHistory), 60 * 24 * 30));
    }


    public function showReadingHistory()
    {
        $readingHistories = [];
        $user = Auth::user();

        if ($user) {
            // Get reading history from the database for logged-in users
            $readingHistories = ReadingHistory::where('user_id', $user->id)
                ->with('book', 'chapter')
                ->orderBy('last_read_at', 'desc')
                ->take(4) // Limit to the latest 4 items
                ->get();
        } else {
            // Get reading history from cookies for guest users
            $cookieName = 'reading_history';
            $readingHistoriesFromCookie = json_decode(Cookie::get($cookieName), true) ?? [];
            dd($readingHistoriesFromCookie);
            // Retrieve books/chapters from DB based on the IDs stored in the cookie
            if (!empty($readingHistoriesFromCookie)) {
                $readingHistories = \App\Models\Book::whereIn('id', $readingHistoriesFromCookie)
                    ->with('chapters')
                    ->take(4) // Limit to the latest 4 items
                    ->get();
            }
        }

        // Pass the reading history to the view
        return view('reading-history', compact('readingHistories'));
    }



    public function index()
    {
        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');
        $data = book::query()->where('Is_Inspect', 1)->paginate(30);
        // dd($data);u
        return view('stories.index', compact('data', 'genres', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::findOrFail(Auth::id());
        if($user->contract()->exists()){
            $genres = genre::pluck('id', 'name');
            $groups = group::pluck('id', 'name');
            return view('stories.create', compact('genres', 'groups'));
        }else{
            return redirect()->route('contracts.create')->withErrors('errors','Bạn phải có hợp đồng trước khi đăng truyện');

        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebookRequest $request)
    {

        $adult = $request->has('adult') ? 1 : 0;

        $book = Book::create([
            'type' => $request->type,
            'status' => $request->status,
            'like' => 0,
            'view' => 0,
            'slug' => '',
            'title' => $request->title,
            'author' => $request->author,
            'painter' => $request->painter,
            'book_path' => '',
            'description' => $request->description,
            'note' => $request->note,
            'is_VIP' => 0,
            'adult' => $adult, // Chỉ nhận giá trị 0 hoặc 1
            'group_id' => $request->group_id,
            'user_id' => Auth::id(),
            'price' => $request->price,
        ]);

        $slug = Str::slug($book->id . '-' . $request->title);
        $book->slug = $slug;
        $book->save();
        // Handle image upload
        if ($request->hasFile('book_path')) {
            $image = $request->file('book_path');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('books', $imageName, 'public'); // Lưu file vào thư mục storage/app/public/books
            $book->book_path = $path; // Chỉ lưu phần liên quan của đường dẫn vào cơ sở dữ liệu
            $book->save();
        }

        // Attach genres
        if ($request->input('genres')) {
            $book->genres()->attach($request->input('genres'));
        }

        event(new BookCreated($book));
        return redirect()->route('story.show', $book->id);
    }

    /**
     * Display the specified resource.
     */
    //show admin
    public function show(String $id)
    {

        $book = Book::with('genres', 'episodes')->findOrFail($id);
        if ($this->canEditBook(Auth::user(), $book)) {
            return view('stories.show', compact('book'));
        } else {
            // Người dùng không có quyền, trả về lỗi 403
            return response()->view('errors.403', [], 403);
        }
    }
    //end show admin

    //show User
    public function showU(String $slug)
    {
        // dd(10);
        // Lấy thông tin sách với các quan hệ
        $book = Book::with('genres', 'episodes', 'group')->where('slug', $slug)->firstOrFail();

        // Kiểm tra trường Is_Inspect
        if ($book->Is_Inspect == 0) {
            abort(403, 'Truyện này chưa được kiểm duyệt');
        }
        $totalPrice = $book->totalChapterPrice();

        $episodes = $book->episodes;

        $comments = bookcomment::with(['user', 'replies' => function ($query) {
            $query->orderBy('created_at', 'DESC');
        }])
            ->where('book_id', $book->id)
            ->whereNull('parent_id')
            ->with('replies.replies')
            ->get();

        $totalComments = bookcomment::where('book_id', $book->id)->count();


        $ratings = Rating::with('user')->where('book_id', $book->id)->orderBy('created_at', 'desc')->limit(2)->get();

        $isAuthor = auth()->check() && auth()->user()->id == $book->user_id;

        $totalPurchases = DB::table('purchased_stories')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->where('chapters.book_id', $book->id)
            ->count();

        $totalViews = $book->view;

        $purchaseStats = null;
        if ($isAuthor) {
            $purchaseStats = [
                'total_purchases' => $totalPurchases,
                'total_likes' => Like_books::where('book_id', $book->id)->count(),
                'total_comments' => bookcomment::where('book_id', $book->id)->count(),
                'total_views' => $totalViews,
            ];
        }
        return view('story.show', compact('book', 'episodes', 'comments', 'ratings', 'totalComments', 'totalPrice', 'isAuthor', 'purchaseStats'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        $book = Book::with('genres', 'episodes')->findOrFail($id);
        $genres = genre::pluck('id', 'name');
        return view('stories.iframe.information', compact('book', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebookRequest $request, string $id)
    {
        $book = Book::findOrFail($id);
        $adult = $request->has('adult') ? 1 : 0;

        // Update book information
        $slug = Str::slug($book->id . '-' . $request->title);
        $book_path = $book->book_path; // Giữ nguyên ảnh cũ
        if ($this->canEditBook($request->user(), $book)) {
            if ($request->hasFile('book_path')) {
                $image = $request->file('book_path');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $path = Storage::put('public/books', $image); // Using Storage::put to store the image
                $book_path = str_replace('public/', '', $path); // Save relative path to the database
            }

            $book->update([
                'type' => $request->type,
                'status' => $request->status,
                'title' => $request->title,
                'author' => $request->author,
                'painter' => $request->painter,
                'description' => $request->description,
                'note' => $request->note,
                'is_VIP' => 0,
                'book_path' => $book_path,
                'slug' => $slug,
                'adult' => $adult, // Chỉ nhận giá trị 0 hoặc 1
                'group_id' => $request->group_id,
                'user_id' => Auth::id(),
                'price' => $request->price
            ]);

            // Attach genres
            if ($request->input('genres')) {
                $book->genres()->sync($request->input('genres')); // Use sync to update genres
            }

            return redirect()->route('storyinformation', $book->id);
        } else {
            // Người dùng không có quyền, trả về lỗi 403
            return response()->view('errors.403', [], 403);
        }
    }

    // Hàm kiểm tra quyền sửa đổi



    /**
     * Remove the specified resource from storage.
     */


    public function destroy(string $id)
    {
        try {
            $book = Book::findOrFail($id);
            $book->genres()->detach();
            $book->delete();
            return response()->json(['success' => 'Truyện đã được xóa thành công!']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Có lỗi xảy ra khi xóa truyện. Vui lòng thử lại.'], 500);
        }
    }



    public function bookLike(Book $id)
    {
        $book = Book::find($id);
        $user = Auth::user();
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!$user) {
            return redirect()->route('login')->with('mesage', 'You must be logged in to like a book.');
        }
        $like = $user->likedBooks()->where('book_id', $id->id)->first();

        if ($like) {
            $user->likedBooks()->detach($id->id);
            $id->like -= 1;
        } else {
            $user->likedBooks()->attach($id->id);
            $id->like += 1;
        }
        $id->save();

        event(new StoryFollowed($id, $user));

        return redirect()->back();
    }
    public function showUserHistory($bookId)
    {
        $book = Book::with(['episodes.chapters', 'episodes.user', 'episodes.chapters.user', 'sharedUsers.user'])
            ->findOrFail($bookId);

        $currentUser = Auth::user();


        // Kiểm tra xem người dùng hiện tại có phải là người đăng sách hoặc được chia sẻ quyền không
        if ($book->user_id !== $currentUser->id && !$book->sharedUsers->contains('user_id', $currentUser->id)) {
            // Nếu không có quyền, trả về 403 Forbidden
            abort(403, 'Bạn không có quyền truy cập vào lịch sử này.');
        }

        return view('user.user_history', compact('book'));
    }

    // Reset lượt xem theo tuần
    private function resetWeeklyViews()
    {
        // Kiểm tra nếu là thứ Hai
        if (Carbon::now()->isMonday()) {
            // Reset lượt xem theo tuần
            DB::table('books')->update(['views_week' => 0]);
        }
    }

    // Reset lượt xem theo tháng
    private function resetMonthlyViews()
    {
        // Kiểm tra nếu là ngày đầu tháng
        if (Carbon::now()->day == 1) {
            // Reset lượt xem theo tháng
            DB::table('books')->update(['views_month' => 0]);
        }
    }
}
