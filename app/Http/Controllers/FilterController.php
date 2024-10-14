<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\genre;
use App\Models\group;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request, $alphabet = null)
    {
        // Lấy tất cả truyện đã duyệt
        $query = book::query()->where('Is_Inspect', "Đã Duyệt");

        // Kiểm tra điều kiện và lọc dữ liệu cơ bản
        $sapxep = $request->input('sapxep');
        switch($sapxep) {
            case 'tentruyen':
                $query->orderBy('title', 'asc');
                break;
            case 'tentruyenza':
                $query->orderBy('title', 'desc');
                break;
            case 'capnhat':
                $query->orderBy('updated_at', 'desc');
                break;
            case 'truyenmoi':
                $query->orderBy('created_at', 'desc');
                break;
            case 'theodoi':
                $query->orderBy('like', 'desc');
                break;
            case 'top':
                $query->orderBy('view', 'desc');
                break;
            case 'topthang':
                // Lọc theo số lượt xem trong tháng
                $query->where('created_at', '>=', now()->subMonth())->orderBy('view', 'desc');
                break;
            case 'sotu':
                $query->orderBy('word_count', 'desc');
                break;
            default:
                $query->orderBy('title', 'asc');
        }

        // Lọc theo chữ cái
        if ($alphabet) {
            // Lọc truyện theo chữ cái đã chọn
            if ($alphabet !== '#') {
                $query->where('title', 'like', $alphabet . '%');
            }
        }

        // Lọc theo phân loại
        if ($request->has('truyendich')) {
            $query->where('type', 'truyendich');
        }

        if ($request->has('sangtac')) {
            $query->where('type', 'sangtac');
        }

        if ($request->has('convert')) {
            $query->where('type', 'convert');
        }

        // Lọc theo tình trạng
        if ($request->has('dangtienhanh')) {
            $query->where('status', 'dangtienhanh');
        }

        if ($request->has('tamngung')) {
            $query->where('status', 'tamngung');
        }

        if ($request->has('hoanthanh')) {
            $query->where('status', 'hoanthanh');
        }

        // Lấy danh sách truyện sau khi lọc
        $data = $query->get();

        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');

        $data = $query->paginate(42);
        return view('story.index', compact('data', 'genres', 'groups', 'alphabet'));
        }
}
