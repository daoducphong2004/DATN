<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\bookcomment;
use App\Models\chapter;
use App\Models\episode;
use App\Models\Like_books;
use App\Models\PurchasedStory;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;


class DashboardController extends Controller
{
    public function index()
    {
        // Đếm số lượng các bản ghi từ các bảng
        $totalStories = Book::count();
        $totalEpisodes = episode::count();
        $totalChapters = chapter::count();
        $totalUsers = User::count();
        $purchasedStories = PurchasedStory::count();
        $like_books = Like_books::count();
        $bookView = Book::sum('view');
        $bookComment = bookcomment::count();
        $totalRevenue = Transaction::sum('amount');


        // Thống kê theo ngày hiện tại
        $dailyStories = Book::whereDate('created_at', Carbon::today())->count();
        $dailyEpisodes = episode::whereDate('created_at', Carbon::today())->count();
        $dailyChapters = chapter::whereDate('created_at', Carbon::today())->count();
        $dailyLike = Like_books::whereDate('created_at', Carbon::today())->count();
        $dailyUsers = User::whereDate('created_at', Carbon::today())->count();
        $dailyStories = PurchasedStory::whereDate('created_at', Carbon::today())->count();
        $dailyBookComment = bookcomment::whereDate('created_at', Carbon::today())->count();
        $dailyRevenue = Transaction::whereDate('created_at', Carbon::today())->sum('amount');


        // Thống kê theo tháng hiện tại
        $monthlyStories = Book::whereMonth('created_at', Carbon::now()->month)->count();
        $monthlyEpisodes = episode::whereMonth('created_at', Carbon::now()->month)->count();
        $monthlyChapters = chapter::whereMonth('created_at', Carbon::now()->month)->count();
        $monthlyLike = Like_books::whereDate('created_at', Carbon::now())->count();
        $monthlyUsers = User::whereMonth('created_at', Carbon::now()->month)->count();
        $purchasedStories = PurchasedStory::whereMonth('created_at', Carbon::now()->month)->count();
        $purchasedBookComment = bookcomment::whereMonth('created_at', Carbon::now()->month)->count();
        $monthlyRevenue = Transaction::whereMonth('created_at', Carbon::now()->month)->sum('amount');


        // Thống kê theo năm hiện tại
        $yearlyStories = Book::whereYear('created_at', Carbon::now()->year)->count();
        $yearlyEpisodes = episode::whereYear('created_at', Carbon::now()->year)->count();
        $yearlyChapters = chapter::whereYear('created_at', Carbon::now()->year)->count();
        $yearlyLike = Like_books::whereDate('created_at', Carbon::now())->count();
        $yearlyUsers = User::whereYear('created_at', Carbon::now()->year)->count();
        $yearlyStories = PurchasedStory::whereYear('created_at', Carbon::now()->year)->count();
        $yearlyBookComment = bookcomment::whereYear('created_at', Carbon::now()->year)->count();
        $yearlyRevenue = Transaction::whereYear('created_at', Carbon::now()->year)->sum('amount');



        // Truyền dữ liệu sang view
        return view('admin.dashboard', [
            'totalStories' => $totalStories ?? 0,
            'totalEpisodes' => $totalEpisodes ?? 0,
            'totalChapters' => $totalChapters ?? 0,
            'totalUsers' => $totalUsers ?? 0,
            'purchasedStories' => $purchasedStories ?? 0,
            'like_books' => $like_books ?? 0,
            'bookView' => $bookView ?? 0,

            'dailyStories' => $dailyStories ?? 0,
            'dailyEpisodes' => $dailyEpisodes ?? 0,
            'dailyChapters' => $dailyChapters ?? 0,
            'dailyUsers' => $dailyUsers ?? 0,
            'monthlyStories' => $monthlyStories ?? 0,
            'monthlyEpisodes' => $monthlyEpisodes ?? 0,
            'monthlyChapters' => $monthlyChapters ?? 0,
            'monthlyUsers' => $monthlyUsers ?? 0,
            'yearlyStories' => $yearlyStories ?? 0,
            'yearlyEpisodes' => $yearlyEpisodes ?? 0,
            'yearlyChapters' => $yearlyChapters ?? 0,
            'yearlyUsers' => $yearlyUsers ?? 0,
            'dailyLike' => $dailyLike ?? 0,
            'monthlyLike' => $monthlyLike ?? 0,
            'yearlyLike' => $yearlyLike ?? 0,
            'dailyStories' => $dailyStories ?? 0,
            'purchasedStories' => $purchasedStories ?? 0,
            'yearlyStories' => $yearlyStories ?? 0,
            'bookComment' => $bookComment ?? 0,
            'dailyBookComment' => $dailyBookComment ?? 0,
            'purchasedBookComment' => $purchasedBookComment ?? 0,
            'yearlyBookComment' => $yearlyBookComment ?? 0,

            'dailyRevenue' => $dailyRevenue ?? 0,
            'monthlyRevenue' => $monthlyRevenue ?? 0,
            'yearlyRevenue' => $yearlyRevenue ?? 0,
            'totalRevenue' => $totalRevenue ?? 0,
        ]);
    }
}
