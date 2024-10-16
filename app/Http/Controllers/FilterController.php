<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\genre;
use App\Models\group;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filterDanhSach(Request $request, $alphabet = null)
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
            $query->where('type', '1');
        }

        if ($request->has('convert')) {
            $query->where('type', '2');
        }

        if ($request->has('sangtac')) {
            $query->where('type', '3');
        }

        // Lọc theo tình trạng
        if ($request->has('dangtienhanh')) {
            $query->where('status', '1');
        }

        if ($request->has('tamngung')) {
            $query->where('status', '2');
        }

        if ($request->has('hoanthanh')) {
            $query->where('status', '3');
        }

        // Lấy danh sách truyện sau khi lọc
        $data = $query->get();

        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');

        $data = $query->paginate(42);
        return view('story.index', compact('data', 'genres', 'groups', 'alphabet'));
        }


        public function filterTheLoai(Request $request, $slug)
        {
            // Lấy thể loại dựa trên slug
            $genre = genre::where('slug', $slug)->firstOrFail();

            // Lấy tất cả truyện đã duyệt thuộc thể loại đã chọn
            $query = book::query()->where('Is_Inspect', "Đã Duyệt")
                                ->whereHas('genres', function($q) use ($genre) {
                                    $q->where('genres.id', $genre->id);
                                });

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
            if ($alphabet = $request->input('alphabet', null)) {
                if ($alphabet && $alphabet !== '#') {
                    $query->where('title', 'like', $alphabet . '%');
                }
            }

            // Lọc theo phân loại
            if ($request->has('truyendich')) {
                $query->where('type', '1');
            }

            if ($request->has('convert')) {
                $query->where('type', '2');
            }

            if ($request->has('sangtac')) {
                $query->where('type', '3');
            }

            // Lọc theo tình trạng
            if ($request->has('dangtienhanh')) {
                $query->where('status', '1');
            }

            if ($request->has('tamngung')) {
                $query->where('status', '2');
            }

            if ($request->has('hoanthanh')) {
                $query->where('status', '3');
            }

            // Lấy danh sách truyện sau khi lọc
            $data = $query->get();

            $genres = genre::pluck('slug', 'name');
            $groups = group::pluck('id', 'name');

            $data = $query->paginate(42);
            return view('home.the_loai', compact('genre', 'data', 'genres', 'groups', 'alphabet', 'slug'));
        }
}
