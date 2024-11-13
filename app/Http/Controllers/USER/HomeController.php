<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Mail\ContactEmail;
use App\Models\book;
use App\Models\bookcomment;
use App\Models\Bookmarks;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\Copyright;
use App\Models\Forum;
use App\Models\genre;
use App\Models\group;
use App\Models\Letter;
use App\Models\Pos;
use App\Models\PublishingCompany;
use App\Models\ReadingHistory;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index1()
    {
        $readingHistories = [];
        $user = User::with('contract')->find(Auth::id());

        if ($user) {
            // Get reading history from the database for logged-in users
            $readingHistories = ReadingHistory::where('user_id', $user->id)
                ->with(['book', 'chapter']) // Nạp cả quan hệ với chapter và book
                ->orderBy('last_read_at', 'desc')
                ->take(4) // Giới hạn 4 mục gần nhất
                ->get();
        } else {
            // Lấy lịch sử đọc từ cookie cho người dùng khách
            $cookieName = 'reading_history';
            $readingHistoriesFromCookie = json_decode(Cookie::get($cookieName), true) ?? [];

            if (!empty($readingHistoriesFromCookie)) {
                // Lấy ID chương từ cookie
                $chapterIds = array_unique(array_column($readingHistoriesFromCookie, 'chapter_id'));

                // Lấy các chương và bao gồm episode và book
                $readingHistories = chapter::whereIn('id', $chapterIds)
                    ->with(['episode.book']) // eager load episode và book
                    ->get();

                // Kiểm tra và hiển thị thông tin
                foreach ($readingHistories as $chapter) {
                    $episode = $chapter->episode; // Lấy episode tương ứng
                    $book = $episode->book; // Lấy book tương ứng
                }
            }
        }

        $truyen_noibat = book::where('Is_Inspect', 1)
            ->orderBy('views_week', 'desc') // Sắp xếp theo lượt xem tuần nhiều nhất
            ->take(8) // Giới hạn 8 truyện
            ->get();

        $sangtac_moinhat = chapter::with('book')
            ->whereHas('book', function ($query) {
                $query->where('Is_Inspect', 1)
                    ->where('type', 3); // Điều kiện lấy loại truyện sáng tác (type = 3)
            })
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('chapters')
                    ->groupBy('book_id'); // Lấy chương mới nhất (id lớn nhất) theo mỗi book_id
            })
            ->orderBy('created_at', 'desc') // Sắp xếp theo thời gian tạo chương mới nhất
            ->take(5) // Giới hạn 5 chương mới nhất
            ->get();
        $chuong_moinhat = Chapter::with('book')  // Eager loading mối quan hệ với Book
            ->whereHas('book', function ($query) {
                $query->where('Is_Inspect', 1); // Điều kiện kiểm duyệt
            })
            ->select('id', 'title', 'slug', 'book_id')
            ->orderBy('created_at', 'desc')
            ->take(17)
            ->get();
        $chuong_moinhat = chapter::with('book')
            ->whereHas('book', function ($query) {
                $query->where('Is_Inspect', 1);
            })
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('chapters')
                    ->groupBy('book_id'); // Lấy chương mới nhất (id lớn nhất) theo mỗi book_id
            })
            ->orderBy('created_at', 'desc')
            ->take(17)
            ->get();


        $truyen_vuadang = book::where('Is_Inspect', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $theodoi_nhieu = book::where('Is_Inspect', 1)
            ->orderBy('like', 'desc')
            ->take(10)
            ->get();

        $truyen_dahoanthanh = chapter::with('book')
            ->whereHas('book', function ($query) {
                $query->where('Is_Inspect', 1)
                    ->where('status', 3); // Thêm điều kiện lấy truyện đã hoàn thành
            })
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('chapters')
                    ->groupBy('book_id'); // Lấy chương mới nhất (id lớn nhất) theo mỗi book_id
            })
            ->orderBy('created_at', 'desc')
            ->take(17)
            ->get();

        // dd($readingHistories);
        $data_forum_home = Forum::query()->join('categories', 'categories.id', '=', 'forums.category_id')->join('users', 'users.id', '=', 'forums.user_id')->select([
            'categories.color as color',
            'categories.content as content_categories',
            'categories.slug as slug_categories',
            'users.username as username',
            'users.avatar_url as avt_user',
            'forums.id as id',
            'forums.title as title',
            'forums.content as content',
            'forums.created_at as created_at'
        ])->orderBy('created_at', 'desc')->get();

        $bookComments = bookcomment::orderBy('created_at', 'desc')->take(10)->get();
        return view('home.index', compact('readingHistories', 'truyen_noibat', 'sangtac_moinhat', 'chuong_moinhat', 'truyen_vuadang', 'theodoi_nhieu', 'truyen_dahoanthanh', 'data_forum_home', 'bookComments'));
    }

    public function convert()
    {
        $bookComments = bookcomment::with('book')
            ->whereHas('book', function ($query) {
                $query->where('type', 2);
            })
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $convert = book::where('Is_Inspect', 1)
            ->where('type', 2)
            ->where('updated_at', '>=', Carbon::now()->subWeek()) // Lấy dữ liệu của tuần này
            ->orderBy('view', 'desc') // Sắp xếp theo lượt xem nhiều nhất
            ->take(8) // Giới hạn 8 truyện
            ->get();

        $moi_cap_nhat = chapter::with('book', 'episode')
            ->whereHas('book', function ($query) {
                $query->where('Is_Inspect', 1)
                    ->where('type', 2);
            })
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('chapters')
                    ->groupBy('book_id'); // Lấy chương mới nhất (id lớn nhất) theo mỗi book_id
            })
            ->orderBy('updated_at', 'asc')
            ->paginate(10); // Lấy 10 truyện mỗi trang

        $xem_nhieu = book::where('Is_Inspect', 1)
            ->where('type', 2)
            ->orderBy('view', 'desc')
            ->take(5)
            ->get();

        $convert_moi = book::where('Is_Inspect', 1)
            ->where('type', 2)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('home.convert', compact('bookComments', 'convert', 'moi_cap_nhat', 'xem_nhieu', 'convert_moi'));
    }

    // public function danhsach(){
    //     $genres = genre::pluck('slug', 'name');
    //     $groups = group::pluck('id', 'name');
    //     $data = book::query()->paginate(30);
    //     // dd($data);
    //     return view('home.show', compact('data', 'genres', 'groups'));

    // }

    // public function show(String $slug)
    // {
    //     $book = Book::with('genres', 'episodes', 'group')
    //         ->where('slug', $slug)
    //         ->firstOrFail();
    //     $episodes = $book->episodes;
    //     // dd($book,$episodes);
    //     return view('home.stories', compact('book', 'episodes'));
    // }http://datn.test/

    // public function vuadang()
    // {
    //     return view('home.vuadang');
    // }

    // public function thaoluan()
    // {
    //     return view('home.thaoluan');
    // }
    public function CDthaoluan()
    {
        return view('home.chudeThaoluan');
    }

    public function sangtac()
    {
        $bookComments = bookcomment::with('book')
            ->whereHas('book', function ($query) {
                $query->where('type', 3);
            })
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $sangtac_noibat = book::where('Is_Inspect', 1)
            ->where('type', 3)
            ->where('updated_at', '>=', Carbon::now()->subWeek()) // Lấy dữ liệu của tuần này
            ->orderBy('view', 'desc') // Sắp xếp theo lượt xem nhiều nhất
            ->take(8) // Giới hạn 8 truyện
            ->get();

        $moi_cap_nhat = chapter::with('book', 'episode')
            ->whereHas('book', function ($query) {
                $query->where('Is_Inspect', 1)
                    ->where('type', 3);
            })
            ->whereIn('id', function ($query) {
                $query->select(DB::raw('MAX(id)'))
                    ->from('chapters')
                    ->groupBy('book_id'); // Lấy chương mới nhất (id lớn nhất) theo mỗi book_id
            })
            ->orderBy('updated_at', 'asc')
            ->paginate(10); // Lấy 10 truyện mỗi trang

        $xem_nhieu = book::where('Is_Inspect', 1)
            ->where('type', 3)
            ->orderBy('view', 'desc')
            ->take(5)
            ->get();

        $sangtac_moi = book::where('Is_Inspect', 1)
            ->where('type', 3)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('home.sangtac', compact('bookComments', 'sangtac_noibat', 'moi_cap_nhat', 'xem_nhieu', 'sangtac_moi'));
    }

    public function xuatban()
    {
        try {
            $publishingCompanys = PublishingCompany::paginate(10);
            $poss = Pos::paginate(10);
            $copyrights = Copyright::paginate(10);
            return view('home.xuatban', compact('copyrights', 'poss', 'publishingCompanys'));
        } catch (Exception $e) {
            return back()->withErrors(['error' => 'Failed to load groups: ' . $e->getMessage()]);
        }
    }

    // public function the_loai()
    // {
    //     return view('home.the_loai');
    // }

    public function huongdan_dangtruyen()
    {
        return view('home.hd_dangtruyen');
    }
    public function huongdan_gioithieu()
    {
        return view('home.gioithieu');
    }

    public function huongdan_gopy()
    {
        return view('home.gopy');
    }

    // public function search()
    // {
    //     return view('home.search');
    // }

    public function kesach()
    {
        $user = auth()->user();
        $likedBooks = $user->likedBooks;
        return view('home.kesach', compact('likedBooks'));
    }
    public function bookmark()
    {
        return view('home.bookmark');
    }
    public function lichsu()
    {
        $readingHistories = [];
        $user = User::with('contract')->find(Auth::id());

        if ($user) {
            // Get reading history from the database for logged-in users
            $readingHistories = ReadingHistory::where('user_id', $user->id)
                ->with(['book', 'chapter']) // Nạp cả quan hệ với chapter và book
                ->orderBy('last_read_at', 'desc')
                ->take(4) // Giới hạn 4 mục gần nhất
                ->get();
        } else {
            // Lấy lịch sử đọc từ cookie cho người dùng khách
            $cookieName = 'reading_history';
            $readingHistoriesFromCookie = json_decode(Cookie::get($cookieName), true) ?? [];

            if (!empty($readingHistoriesFromCookie)) {
                // Lấy ID chương từ cookie
                $chapterIds = array_unique(array_column($readingHistoriesFromCookie, 'chapter_id'));

                // Lấy các chương và bao gồm episode và book
                $readingHistories = chapter::whereIn('id', $chapterIds)
                    ->with(['episode.book']) // eager load episode và book
                    ->get();

                // Kiểm tra và hiển thị thông tin
                foreach ($readingHistories as $chapter) {
                    $episode = $chapter->episode; // Lấy episode tương ứng
                    $book = $episode->book; // Lấy book tương ứng
                }
            }
        }
        // dd(readingHistories)
        return view('home.lichsu', compact('readingHistories'));
    }
    public function tinnhanmoi()
    {
        return view('home.tinnhanmoi');
    }
    public function tinnhan()
    {
        return view('home.hopthu');
    }


    public function guitinnhan()
    {
        $userId = auth()->user()->id;
        $sentLetters = Letter::where('sender_id', $userId)->get();
        return view('home.guitinnhan', compact('sentLetters'));
    }




    public function thanhvien(string $userId)
    {

        $userInfor = User::findOrFail($userId);

        // Trả về view với dữ liệu
        // return view('user.books', compact('user', 'userBooks', 'sharedBooks'));
        $userBooks = $userInfor->books->where('Is_Inspect', 1); // Truyện do user đăng
        $bookHasJoin = $userInfor->sharedBooks->where('Is_Inspect', 1); // Truyện user được chia sẻ quyền
        $countBook = book::where('user_id', $userInfor->id)->count();
        $countChapters = chapter::where('user_id', $userInfor->id)->count();
        $countComment = chaptercomment::where('user_id', $userInfor->id)->count();
        $countBookmark = Bookmarks::where('user_id', $userInfor->id)->count();
        // dd($userInfor,$userBooks,$bookHasJoin,$countChapters,$countComment,$countBookmark);
        return view('home.taikhoan', compact('userInfor', 'userBooks', 'bookHasJoin', 'countChapters', 'countComment', 'countBookmark'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function email()
    {
        return view('auth.password.email');
    }

    public function reset()
    {
        return view('auth.password.reset');
    }


    //bên thêm truyện
    public function Userhome()
    {
        $role = Role::where('name', 'author')->first();
        $user = User::with('contract')->find(Auth::id());
        // So sánh trực tiếp role_id của người dùng với id của vai trò tác giả
        if ($user->role_id == $role->id) {
            if ($user->contract == null) {
                // Nếu không có hợp đồng, chuyển đến trang tạo hợp đồng
                return redirect()->route('contracts.create')->with('message', 'Bạn chưa có hợp đồng. Vui lòng tạo hợp đồng mới.');
            }
        }
        return view('user.index');
    }

    public function createTruyen()
    {
        return view('user.createTruyen');
    }

    public function truyenDaDang()
    {
        return view('user.truyenDaDang');
    }

    public function truyenThamGia()
    {
        return view('user.truyenThamGia');
    }

    public function conventThamGia()
    {
        return view('user.convertThamGia');
    }

    public function conventDaDang()
    {
        return view('user.convertDaDang');
    }

    public function OLNDaDang()
    {
        return view('user.OLNDaDang');
    }

    public function OLNThamGia()
    {
        return view('user.OLNThamGia');
    }

    public function themThaoLuan()
    {
        return view('user.themThaoLuan');
    }

    public function thaoLuanCuaBan()
    {
        return view('user.thaoLuanCuaBan');
    }

    public function theLoai()
    {
        return view('user.theLoai');
    }

    public function thuVien()
    {
        return view('user.thuvien');
    }

    public function nhomSoHuu()
    {
        return view('user.nhomSoHuu');
    }

    public function nhomThamGia()
    {
        return view('user.nhomThamGia');
    }
}
