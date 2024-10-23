<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\chapter;
use App\Models\episode;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Đếm số lượng các bản ghi từ các bảng
        $totalStories = book::count();
        $totalEpisodes = episode::count();
        $totalChapters = chapter::count();
        $totalUsers = User::count();

        // Truyền dữ liệu sang view
        return view('admin.dashboard', [
            'totalStories' => $totalStories,
            'totalEpisodes' => $totalEpisodes,
            'totalChapters' => $totalChapters,
            'totalUsers' => $totalUsers,
        ]);
    }
}
