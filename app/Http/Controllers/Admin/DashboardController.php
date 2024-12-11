<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\bookcomment;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\episode;
use App\Models\genre;
use App\Models\Like_books;
use App\Models\PurchasedStory;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Đếm số lượng các bản ghi từ các bảng
        $totalStories = Book::count(); // Tổng cộng sô struyeenj
        $totalEpisodes = Episode::count(); // Tổng cộng số tập
        $toplikebook = Book::topLikedBooks(); //Sách có lượt like nhiều nhất
        $chapterCounts = Chapter::countChaptersByPrice(); // Tổng số coin của chapter (Sai)
        $countAuthor = User::countAuthors();
        $totalUsers = User::count(); //Tổng người dùng
        $paymentUserStatusCounts = User::countUsersByPaymentStatus(); //Đếm người dùng nạp tiền và người dùng chưa nạp tiền
        // Lấy số lượng truyện đã mua trong 7 ngày gần nhất
        $purchasedStoriesLast7Days = PurchasedStory::where('created_at', '>=', Carbon::now()->subDays(7))
            ->selectRaw('DATE(created_at) as date, count(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();
        $totalRevenueAuthor = Transaction::getTotalAmountByType('coin');
        $totalRevenueAdmin = Transaction::getTotalAmountByType('admin');
        $bookComment = bookcomment::count(); // Tổng cộng số comment của book
        $chapterComment = chaptercomment::count(); // Tổng cộng số comment của book
        $totalRevenue = Transaction::sum('amount');
        $toplikeGenre = genre::topLikedGenres(); // Thể loại có nhiều lượt thích nhất
        $topViewGenre = genre::topViewedGenres(); // Thể loại có nhiều lượt xem nhất
        $topAuthor = User::topAuthorsByRevenue(); // Xếp hạng tác giả
        // Lấy số lượng người dùng đăng ký trong 7 ngày gần nhất
        $newUsersLast7Days = User::selectRaw('DATE(created_at) as date, count(*) as count')
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();

        // Lấy số lượng truyện đã mua theo thể loại trong 7 ngày gần nhất
        $purchasedStoriesByGenre = PurchasedStory::where('purchased_stories.created_at', '>=', Carbon::now()->subDays(7))
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            // Kết nối với bảng book_genre để lấy thể loại của mỗi truyện
            ->join('book_genre', 'books.id', '=', 'book_genre.book_id')
            ->join('genres', 'book_genre.genre_id', '=', 'genres.id')  // Kết nối với bảng genres để lấy tên thể loại
            ->selectRaw('genres.name as genre, count(*) as count')
            ->groupBy('genres.name')
            ->limit(10)
            ->get();
        // Lấy bảng xếp hạng các truyện phổ biến nhất (mua nhiều nhất)
        $topPurchasedBooks = PurchasedStory::where('purchased_stories.created_at', '>=', Carbon::now()->subDays(7))
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->selectRaw('books.title, count(*) as count, SUM(purchased_stories.price) AS totalCoin')
            ->groupBy('books.title')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        $revenueAuthor = Transaction::revenueByDay('coin');
        $revenueAdmin = Transaction::revenueByDay('admin');
        // dd(compact(
        //     'totalStories',
        //     'totalEpisodes',
        //     'toplikebook',
        //     'chapterCounts',
        //     'totalUsers',
        //     'paymentUserStatusCounts',
        //     'purchasedStoriesLast7Days',
        //     'bookComment',
        //     'totalRevenue',
        //     'toplikeGenre',
        //     'topViewGenre',
        //     'topAuthor',
        //     'newUsersLast7Days',
        //     'purchasedStoriesByGenre',
        //     'topPurchasedBooks',
        //     'countAuthor',
        //     'totalRevenueAuthor',
        //     'totalRevenueAdmin',
        //     'revenueAuthor',
        //     'revenueAdmin'
        // ));
        // Truyền tất cả dữ liệu sang view bằng cách sử dụng compact
        return view('admin.dashboard', compact(
            'totalStories',
            'totalEpisodes',
            'toplikebook',
            'chapterCounts',
            'totalUsers',
            'paymentUserStatusCounts',
            'purchasedStoriesLast7Days',
            'bookComment',
            'totalRevenue',
            'toplikeGenre',
            'topViewGenre',
            'topAuthor',
            'newUsersLast7Days',
            'purchasedStoriesByGenre',
            'topPurchasedBooks',
            'countAuthor',
            'totalRevenueAuthor',
            'totalRevenueAdmin',
            'revenueAuthor',
            'revenueAdmin'
        ));
    }
    public function list_author()
    {
        $authors = User::withCount(['books', 'sharedBooks'])
            ->withSum('purchasedStories', 'price')
            ->with('wallet')
            ->addSelect([
                DB::raw("(SELECT SUM(purchased_stories.price) as total_coin
                      FROM purchased_stories 
                      JOIN chapters ON purchased_stories.chapter_id = chapters.id 
                      WHERE chapters.user_id = users.id) as total_amount_author")
            ])
            ->whereIn('role_id', [1, 2, 5])
            ->get();
        $test = Transaction::join('purchased_stories', 'Transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->where('chapters.user_id', 1)
            ->where('transactions.type', 'admin')
            ->sum('transactions.amount');
        // dd($test);
        foreach ($authors as $author) {
            $author->total_user = DB::table('transactions')
                ->where('wallet_id', $author->wallet->id ?? null)
                ->where('type', 'coin')
                ->sum('amount');
            $author->total_admin =  Transaction::join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
                ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
                ->where('chapters.user_id', $author->id)  // Sử dụng author->id thay vì cứng 1
                ->where('transactions.type', 'admin')
                ->sum('transactions.amount');
            // Tổng giá trị dựa trên transactions và purchased_stories
            $author->total_coin = Transaction::join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
                ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
                ->where('chapters.user_id', $author->id)
                ->sum('purchased_stories.price');
        }
        // // $total_amount_author = PurchasedStory::join('chapters','purchased_stories.chapter_id','=','chapters.id')->where('chapters.user_id',1)->sum('purchased_stories.price');
        // dd($authors);
        return view('admin.authors.list_author', compact('authors'));
    }
    public function view_list_story_author($id)
    {
        $user = User::find($id);
        if ($user) {
            $mybooks = Book::where('user_id', $user->id)->paginate(12);
            $bookshare = $user->sharedBooks()->paginate(5); // Truyện user được chia sẻ quyền
            // dd($mybooks,$bookshare);
            return view('admin.authors.index', compact('user', 'mybooks', 'bookshare'));
        } else {
            return redirect()->route('login');
        }
    }
    public function view_detail_story_author($userid, $id)
    {
        $user = User::findOrFail($userid);
        $book = Book::findOrFail($id);

        if ($user->id != $book->user_id && !$user->sharedBooks()->exists()) {
            return response()->view('errors.403', [], 403); //Sau sẽ thêm cả danh sách người được chia sẻ
        }
        return view('admin.authors.view', compact('book', 'user'));
    }
    public function topSpenders($book_id, $user_id)
    {
        $topUsers = PurchasedStory::select(
            'users.id as user_id',
            'users.username',
            DB::raw('SUM(purchased_stories.price) as total_spent'),
            DB::raw('COUNT(purchased_stories.chapter_id) as chapters_purchased')
        )
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->join('users', 'purchased_stories.user_id', '=', 'users.id')
            ->where('chapters.book_id', $book_id) // Lọc theo sách
            ->where('chapters.user_id', $user_id) // Lọc theo tác giả
            ->groupBy('users.id', 'users.username') // Gom nhóm theo người dùng
            ->orderByDesc('total_spent') // Sắp xếp theo tổng tiền chi tiêu
            ->take(10) // Lấy top 10 người
            ->get();

        return response()->json($topUsers);
    }
    public function spenderDetails($book_id, $user_id)
    {
        $purchasedChapters = PurchasedStory::select('chapters.id', 'chapters.title')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->where('purchased_stories.user_id', $user_id)
            ->where('chapters.book_id', $book_id)
            ->get();
        return response()->json($purchasedChapters);
    }
}
