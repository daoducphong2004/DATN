<?php

namespace App\Http\Controllers;

use App\Events\StoryFollowed;
use App\Models\Book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;
use App\Models\bookcomment;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\genre;
use App\Models\group;
use App\Models\Rating;
use App\Models\ReadingHistory;
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
        $data = Book::query()->where('Is_Inspect', 1)->paginate(30);
        return view('story.index', compact('data', 'genres', 'groups'));
    }

    public function bookComment($bookId)
    {
        $comments = bookcomment::with('user')
            ->where('book_id', $bookId)
            ->whereNull('parent_id')
            ->with('replies.replies')->get();

        $book = Book::findOrFail($bookId);

        return view('story.show', compact('comments', 'book'));
    }


    public function reading(string $slug, string $chapter_slug, Request $request)
    {
        $book = Book::where('slug', $slug)->where('Is_Inspect', 1)->with('episodes')->firstOrFail();
        $chapter = chapter::where('slug', $chapter_slug)->firstOrFail();
        $episode = $chapter->episode()->with('chapters')->firstOrFail();
        $chapters = $episode->chapters;
        $CountComment = $chapter->countComments();

        return view('story.reading', compact('book', 'CountComment', 'episode', 'chapters', 'chapter'));
    }
    public function readingApi(string $slug, string $chapter_slug, Request $request)
    {
        try {
            // Tìm kiếm book dựa trên slug
            $book = Book::where('slug', $slug)->where('Is_Inspect', 1)->with('episodes')->firstOrFail();

            // Tăng giá trị của trường `view`
            $book->increment('view');
            $book->increment('views_week');
            $book->increment('views_month');

            // Reset lượt xem tuần và tháng
            $this->resetWeeklyViews();
            $this->resetMonthlyViews();

            // Tìm kiếm chapter dựa trên chapter_slug
            $chapter1 = chapter::where('slug', $chapter_slug)->where('approval',1)->firstOrFail();
            $chapter = chapter::where('slug', $chapter_slug)->where('approval',1)->select('id', 'title','slug', 'price', 'episode_id')->firstOrFail();

            // Lấy episode liên quan đến chapter
            $episode = $chapter1->episode()
            ->with(['chapters' => function ($query) {
                $query->selectBasicFields();
            }])
            ->firstOrFail();

            // Lấy danh sách các chapters trong episode của chapter hiện tại
            $chapters = $episode->chapters;

            // Kiểm tra xem người dùng có đăng nhập hay không
            $user = auth()->user();
            $content = null;
            $fullContent = $chapter1->content;
            $canViewFullContent = false;
            $CountComment = $chapter1->countComments();

            if ($chapter1->price > 0) {
                if (!$user || (!$user->hasPurchased($chapter1->id) && $user->id !== $book->user_id)) {
                    $content = $this->getPartialContent($fullContent);
                } else {
                    $canViewFullContent = true;
                    $content = $fullContent;
                }
            } else {
                $canViewFullContent = true;
                $content = $fullContent;
            }

            // Lưu lịch sử đọc chương
            $this->storeReadingHistory($book->id, $chapter1->id);

            // Trả về JSON response
            return response()->json([
                'status' => 'success',
                'data' => [
                    'book' => $book,
                    'episode' => $episode,
                    'chapters' => $chapters,
                    'chapter' => $chapter,
                    'content' => $content,
                    'canViewFullContent' => $canViewFullContent,
                    'CountComment' => $CountComment,
                ],
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 400);
        }
    }
    public function fetchComments(Request $request)
    {
        $chapterId = $request->input('chapter_id');

        if (!$chapterId) {
            return response()->json(['error' => 'Chapter ID is required'], 400);
        }

        // Lấy comment chính kèm theo các reply và user
        $comments = chaptercomment::with(['user', 'replies.user'])
            ->where('chapter_id', $chapterId)
            ->whereNull('parent_id')
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return response()->json($comments);
    }



    /**
     * Cắt nội dung để hiển thị 2/10 nội dung.
     */
    private function getPartialContent($content)
    {
        // Đếm số từ trong nội dung sau khi loại bỏ các thẻ HTML
        $totalWords = str_word_count(strip_tags($content));
        $wordsToShow = (int) ($totalWords * 0.2); // Hiển thị 20% số từ

        // Thêm một hàm để giữ lại thẻ <p> và <br> sau khi cắt nội dung
        // Sử dụng regular expression để tách nội dung theo các thẻ HTML mà không làm mất chúng
        preg_match_all('/(<[^>]+>)|([^<\s][^<]*)/', $content, $matches);

        // Lấy ra các phần không phải thẻ (text content)
        $wordsArray = $matches[0];
        $partialContent = '';

        // Lặp qua các từ và chỉ lấy ra 20% số từ
        $wordCount = 0;
        foreach ($wordsArray as $word) {
            // Kiểm tra nếu từ không phải thẻ
            if (strip_tags($word)) {
                $wordCount += str_word_count(strip_tags($word));
            }

            $partialContent .= $word;

            // Nếu đã đạt đến số từ cần hiển thị, dừng lại
            if ($wordCount >= $wordsToShow) {
                break;
            }
        }

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

    public function index()
    {
        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');
        $data = Book::query()->where('Is_Inspect', 1)->paginate(30);
        // dd($data);u
        return view('stories.index', compact('data', 'genres', 'groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::findOrFail(Auth::id());
        // dd($user->group);
        if ($user->contracts()->exists()) {
            // dd();
            if (!$user->myGroup()->exists()) {
                return redirect()->route('action.group.index')
                    ->withErrors(['errors' => 'Bạn phải có nhóm trước khi đăng truyện']);
            }
            $genres = genre::pluck('id', 'name');
            $groups = group::pluck('id', 'name');
            return view('stories.create', compact('genres', 'groups','user'));
        } else {
            return redirect()->route('contracts.create')->withErrors('errors', 'Bạn phải có hợp đồng trước khi đăng truyện');
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
            'adult' => $adult, // Chỉ nhận giá trị 0 hoặc 1
            'group_id' => $request->group_id,
            'user_id' => Auth::id(),
            'price' => $request->price,
            'Is_Inspect' => 0,
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
        // Lấy thông tin sách với các quan hệ
        $book = Book::with('genres', 'episodes', 'group')->withAvg('ratings','rating')->withCount('ratings')->where('slug', $slug)->firstOrFail();
        // dd($book);
        $booksRandom = Book::inRandomOrder()->limit(5)->get();
        // Lấy lịch sử đọc của người dùng
        $readingHistories = [];
        $user = User::with('contracts')->find(Auth::id());
        if ($user) {
            // Lấy lịch sử đọc từ cơ sở dữ liệu cho người dùng đã đăng nhập
            $readingHistories = ReadingHistory::where('user_id', $user->id)
                ->with(['book', 'chapter']) // Nạp cả quan hệ với chapter và book
                ->orderBy('last_read_at', 'desc')
                ->where('book_id', $book->id) // Giới hạn 4 mục gần nhất
                ->first();
            // dd($readingHistories);

        } else {
            // Lấy lịch sử đọc từ cookie cho người dùng khách
            $cookieName = 'reading_history';
            $readingHistoriesFromCookie = json_decode(Cookie::get($cookieName), true) ?? [];

            if (!empty($readingHistoriesFromCookie)) {
                // Lọc lịch sử đọc theo book_id khớp với $book->id
                $filteredReadingHistories = array_filter($readingHistoriesFromCookie, function ($history) use ($book) {
                    return $history['book_id'] == $book->id; // Lọc theo book_id
                });

                // Nếu có lịch sử đọc phù hợp
                if (!empty($filteredReadingHistories)) {
                    // Lấy ID chương từ lịch sử đọc đã lọc
                    $chapterIds = array_unique(array_column($filteredReadingHistories, 'chapter_id'));

                    // Lấy các chương và bao gồm episode và book
                    $readingHistories = Chapter::whereIn('id', $chapterIds)
                        ->with(['episode.book']) // eager load episode và book
                        ->get();
                } else {
                    // Nếu không có lịch sử đọc phù hợp, trả về một mảng trống hoặc giá trị mặc định khác
                    $readingHistories = collect([]);
                }
            }
        }

        if ($readingHistories) {
            if (Auth::check()) {
                $hasReadBook = true;
            } else {
                $hasReadBook = $readingHistories->contains(function ($history) use ($book) {
                    return $history->book_id == $book->id; // Kiểm tra xem truyện có trong lịch sử đọc không
                });
            }
        } else {
            $hasReadBook = false;
        }

        // dd($readingHistories,$booksRandom);
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
            ->orderBy('created_at', 'DESC')
            ->paginate(10);
        $totalComments = bookcomment::where('book_id', $book->id)->count();

        $ratings = Rating::with('user')->where('book_id', $book->id)->orderBy('created_at', 'desc')->limit(2)->get();

        $isAuthor = auth()->check() && auth()->user()->id == $book->user_id;

        $totalPurchases = DB::table('purchased_stories')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->where('chapters.book_id', $book->id)
            ->count();

        $purchaseStats = null;

        if ($isAuthor) {
            $startDate = Carbon::now()->subDays(10);
            $endDate = Carbon::now();

            $purchaseStats = [
                'dates' => [],
                'purchases' => [],
                'likes' => [],
                'comments' => [],
                'views' => [],
                'total_purchases' => 0,
                'total_likes' => 0,
                'total_comments' => 0,
                'total_views' => 0
            ];

            for ($date = $startDate; $date <= $endDate; $date->addDay()) {
                $currentDate = $date->format('Y-m-d');
                $purchaseStats['dates'][] = $currentDate;

                $purchases = DB::table('purchased_stories')
                    ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
                    ->where('chapters.book_id', $book->id)
                    ->whereDate('purchased_stories.created_at', $currentDate)
                    ->count();

                $purchaseStats['purchases'][] = $purchases;
                $purchaseStats['total_purchases'] += $purchases;

                $likes = Like_books::where('book_id', $book->id)
                    ->whereDate('created_at', $currentDate)
                    ->count();

                $purchaseStats['likes'][] = $likes;
                $purchaseStats['total_likes'] += $likes;

                $cmt = bookcomment::where('book_id', $book->id)
                    ->whereDate('created_at', $currentDate)
                    ->count();

                $purchaseStats['comments'][] = $cmt;
                $purchaseStats['total_comments'] += $cmt;

                $views = $book->whereDate('updated_at', $currentDate)->sum('view');

                $purchaseStats['views'][] = $views;
                $purchaseStats['total_views'] += $views;
            }
        }
        $firstEpisode = $book->episodes()->orderBy('order', 'asc')->first(); // Lấy episode đầu tiên

        if ($firstEpisode) {
            // Lấy chapter đầu tiên của episode đầu tiên dựa trên 'order' bằng 0
            $firstChapter = $firstEpisode->chapters()->where('order', 1)->first();
        }

        return view('story.show', compact('book', 'readingHistories', 'booksRandom', 'firstChapter', 'hasReadBook', 'episodes', 'comments', 'ratings', 'totalComments', 'totalPrice', 'isAuthor', 'purchaseStats'));
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
        $user = Auth::user();
        // Kiểm tra xem người dùng đã đăng nhập chưa
        if (!$user) {
            return redirect()->route('login')->with('mesage', 'Bạn phải đăng nhập để yêu thích.');
        }
        $like = $user->likedBooks()->where('book_id', $id->id)->first();
        if ($like) {
            $user->likedBooks()->detach($id->id);
            $id->like -= 1;
        } else {
            $user->likedBooks()->attach($id->id, ['created_at' => now(), 'updated_at' => now()]);
            $id->like += 1;

            event(new StoryFollowed($id, $user));
        }
        $id->save();

        // event(new StoryFollowed($id, $user));
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
