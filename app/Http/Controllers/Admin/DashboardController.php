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
    public function list_author(){
        $authors = User::withCount('books')->whereIn('role_id',[1,2,5])->get();
        dd($authors);
    }
}
