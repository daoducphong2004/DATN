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
        $query = book::query()->where('Is_Inspect', 1);

        // Kiểm tra điều kiện và lọc dữ liệu cơ bản
        $sapxep = $request->input('sapxep');
        switch ($sapxep) {
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
                $query->orderBy('views_month', 'desc');
                break;
            case 'sotu':
                $query->orderBy('word_count', 'desc');
                break;
            default:
                $query->orderBy('title', 'asc');
        }

        // Lọc theo chữ cái
        if ($alphabet === 'khac') {
            $alphabet = '#';
        }
        if ($alphabet) {
            // Lọc truyện theo chữ cái đã chọn
            if ($alphabet !== '#') {
                $query->where('title', 'like', $alphabet . '%');
            } else {
                // Lọc các tiêu đề bắt đầu bằng ký tự không phải chữ cái (A-Z)
                $query->whereRaw("LEFT(title, 1) NOT REGEXP '^[A-Za-z]'");
            }
        }

        // Nếu không có bộ lọc nào được chọn, mặc định chọn tất cả
        if (!$request->hasAny(['truyendich', 'convert', 'sangtac', 'dangtienhanh', 'tamngung', 'hoanthanh'])) {
            $query->whereIn('type', ['1', '2', '3'])->whereIn('status', ['1', '2', '3']);
        } else {
            // Lọc theo phân loại
            if ($request->hasAny(['truyendich', 'convert', 'sangtac'])) {
                $query->whereIn('type', array_filter([
                    $request->has('truyendich') ? '1' : null,
                    $request->has('convert') ? '2' : null,
                    $request->has('sangtac') ? '3' : null,
                ]));
            }

            // Lọc theo tình trạng
            if ($request->hasAny(['dangtienhanh', 'tamngung', 'hoanthanh'])) {
                $query->whereIn('status', array_filter([
                    $request->has('dangtienhanh') ? '1' : null,
                    $request->has('tamngung') ? '2' : null,
                    $request->has('hoanthanh') ? '3' : null,
                ]));
            }
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
        $query = book::query()->where('Is_Inspect', 1)
            ->whereHas('genres', function ($q) use ($genre) {
                $q->where('genres.id', $genre->id);
            });

        // Kiểm tra điều kiện và lọc dữ liệu cơ bản
        $sapxep = $request->input('sapxep');
        switch ($sapxep) {
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
                $query->orderBy('views_month', 'desc');
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
            } else {
                // Lọc các tiêu đề bắt đầu bằng ký tự không phải chữ cái (A-Z)
                $query->whereRaw("LEFT(title, 1) NOT REGEXP '^[A-Za-z]'");
            }
        }

        // Nếu không có bộ lọc nào được chọn, mặc định chọn tất cả
        if (!$request->hasAny(['truyendich', 'convert', 'sangtac', 'dangtienhanh', 'tamngung', 'hoanthanh'])) {
            $query->whereIn('type', ['1', '2', '3'])->whereIn('status', ['1', '2', '3']);
        } else {
            // Lọc theo phân loại
            if ($request->hasAny(['truyendich', 'convert', 'sangtac'])) {
                $query->whereIn('type', array_filter([
                    $request->has('truyendich') ? '1' : null,
                    $request->has('convert') ? '2' : null,
                    $request->has('sangtac') ? '3' : null,
                ]));
            }

            // Lọc theo tình trạng
            if ($request->hasAny(['dangtienhanh', 'tamngung', 'hoanthanh'])) {
                $query->whereIn('status', array_filter([
                    $request->has('dangtienhanh') ? '1' : null,
                    $request->has('tamngung') ? '2' : null,
                    $request->has('hoanthanh') ? '3' : null,
                ]));
            }
        }

        // Lấy danh sách truyện sau khi lọc
        $data = $query->get();

        $genres = genre::pluck('slug', 'name');
        $groups = group::pluck('id', 'name');

        $data = $query->paginate(42);
        return view('home.the_loai', compact('genre', 'data', 'genres', 'groups', 'alphabet', 'slug'));
    }
}
