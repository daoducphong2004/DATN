<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\genre;
use App\Models\group;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request)
    {
        $query = book::query()->where('Is_Inspect', "Đã Duyệt");

        $sapxep = $request->input('sapxep');

        // Kiểm tra điều kiện và lọc dữ liệu
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

        // Lấy danh sách truyện sau khi lọc
        $data = $query->get();

        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');

        $data = $query->paginate(42);
        return view('story.index', compact('data', 'genres', 'groups'));
        }
}
