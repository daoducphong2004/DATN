<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\bookcomment;
use App\Models\Bookmarks;
use App\Models\chapter;
use App\Models\chaptercomment;
use App\Models\Copyright;
use App\Models\episode;
use App\Models\Forum;
use App\Models\Letter;
use App\Models\Pos;
use App\Models\PublishingCompany;
use App\Models\ReadingHistory;
use App\Models\Role;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    public function index1()
    {
        $readingHistories = [];
        $user = User::find(Auth::id());

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

        $truyen_noibat = Book::where('Is_Inspect', 1)
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

        $chuong_moinhat = chapter::with('book')

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

        $chuong_moinhat = chapter::select('chapters.*')
            ->join(DB::raw('(SELECT MAX(id) as max_id FROM chapters GROUP BY book_id) as latest_chapters'), 'chapters.id', '=', 'latest_chapters.max_id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->where('books.Is_Inspect', 1)
            ->orderBy('chapters.created_at', 'desc')
            ->take(17)
            ->get();

        $truyen_vuadang = Book::where('Is_Inspect', 1)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();

        $theodoi_nhieu = Book::where('Is_Inspect', 1)
            ->orderBy('like', 'desc')
            ->take(10)
            ->get();

        $truyen_dahoanthanh = chapter::select('chapters.*')
            ->join(DB::raw('(SELECT MAX(id) as max_id FROM chapters GROUP BY book_id) as latest_chapters'), 'chapters.id', '=', 'latest_chapters.max_id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->where('books.Is_Inspect', 1)
            ->where('books.status', 3) // Thêm điều kiện lấy truyện đã hoàn thành
            ->orderBy('chapters.created_at', 'desc')
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
        ])->orderBy('created_at', 'desc')->paginate(9);

        $bookComments = bookcomment::orderBy('created_at', 'desc')->take(10)->get();
        return view('home.index', compact('readingHistories', 'truyen_noibat', 'sangtac_moinhat', 'chuong_moinhat', 'truyen_vuadang', 'theodoi_nhieu', 'truyen_dahoanthanh', 'data_forum_home', 'bookComments'));
    }

    public function convert()
    {
        $bookComments = bookcomment::with('book', 'user')
            ->whereHas('book', function ($query) {
                $query->where('type', 2);
            })
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $convert = Book::where('Is_Inspect', 1)
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

        $xem_nhieu = Book::where('Is_Inspect', 1)
            ->where('type', 2)
            ->orderBy('view', 'desc')
            ->take(5)
            ->get();

        $convert_moi = Book::where('Is_Inspect', 1)
            ->where('type', 2)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('home.convert', compact('bookComments', 'convert', 'moi_cap_nhat', 'xem_nhieu', 'convert_moi'));
    }


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

        $sangtac_noibat = Book::where('Is_Inspect', 1)
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

        $xem_nhieu = Book::where('Is_Inspect', 1)
            ->where('type', 3)
            ->orderBy('view', 'desc')
            ->take(5)
            ->get();

        $sangtac_moi = Book::where('Is_Inspect', 1)
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
        $user = User::find(Auth::id());

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

    public function thongbao()
    {
        return view('home.thongbao');
    }

    public function guitinnhan()
    {
        $user_id = auth()->user()->id;
        $sentLetters = Letter::where('sender_id', $user_id)->get();
        return view('home.guitinnhan', compact('sentLetters'));
    }

    public function thanhvien(string $userId)
    {
        $userInfor = User::findOrFail($userId);
        // Trả về view với dữ liệu
        // return view('user.books', compact('user', 'userBooks', 'sharedBooks'));
        $userBooks = $userInfor->books->where('Is_Inspect', 1); // Truyện do user đăng
        $bookHasJoin = $userInfor->sharedBooks->where('Is_Inspect', 1); // Truyện user được chia sẻ quyền
        $countBook = Book::where('user_id', $userInfor->id)->count();
        $countChapters = chapter::where('user_id', $userInfor->id)->count();
        $countBookmark = Bookmarks::where('user_id', $userInfor->id)->count();
        $countComment = $userInfor->count_comments; // Access total comment count
        // dd($userInfor,$userBooks,$bookHasJoin,$countChapters,$countComment,$countBookmark);
        return view('home.taikhoan', compact('userInfor', 'userBooks', 'bookHasJoin', 'countComment', 'countChapters', 'countBookmark'));
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
        $user = Auth::user();
        // dd(Auth::user()->books()->where('Is_Inspect', 1)->exists());
        if (Auth::user()->books()->where('Is_Inspect', 1)->exists() ) {
            // Lấy thông tin ví của người dùng (first() sẽ lấy ví đầu tiên của người dùng)
            $wallet = $user->wallet;  // Hoặc $user->wallet()->first();
            // dd($wallet);
            // Kiểm tra nếu tác giả có truyện nhưng chưa có ví
            if ($user->books()->exists() && !$wallet) {
                // Tạo một ví mới cho tác giả
                $wallet = $user->wallet()->create([
                    'balance' => 0, // Số dư ban đầu
                    'currency' => 'Coin', // Loại tiền tệ
                ]);
            }
            // Lấy các giao dịch liên quan đến ví (nếu có)
            // Kiểm tra thông tin ví
            $transactions =Transaction::revenueByDay('coin',$wallet->id);
            $totalrevenuebydayandbook = Transaction::revenuebydayandbybook('coin',$wallet->id);
            $test = Transaction::revenueBookWithDate('coin', $wallet->id,'2024-12-05');
            // dd($totalrevenuebydayandbook);
            // dd($transactions);
            // Lấy Top 3 truyện có view cao nhất của tác giả
            $topBooksByView = Book::where('user_id', $user->id)
                ->orderByDesc('view') // Sắp xếp theo view giảm dần
                ->take(3) // Lấy 3 truyện đầu tiên
                ->get(['id', 'title', 'view']); // Chỉ lấy các trường cần thiết
            $topBooksByLike = Book::where('user_id', $user->id)
                ->orderByDesc('like') // Sắp xếp theo view giảm dần
                ->take(3) // Lấy 3 truyện đầu tiên
                ->get(['id', 'title', 'like']); // Chỉ lấy các trường cần thiết
            $ajax = true;
            // dd(compact('wallet', 'ajax', 'transactions', 'topBooksByView', 'topBooksByLike'));
            return view('user.index', compact('wallet','test','totalrevenuebydayandbook', 'ajax', 'transactions', 'topBooksByView', 'topBooksByLike'));
        } else {
            $book = Book::count();
            $chapter = Chapter::count();
            $episode = Episode::count();
            $ajax = false;
            return view('user.index', compact('book', 'ajax', 'chapter', 'episode'));
        }
    }

    public function getAuthorRevenueDetails($userId, $year = null)
    {
        // Lấy thông tin tác giả
        $user = User::findOrFail($userId);

        // Thống kê doanh thu tổng cộng
        $totalRevenue = $user->totalRevenue($year);

        // Thống kê doanh thu theo từng câu chuyện
        $revenueByStory = $user->revenueByStory($year);



        return response()->json([
            'total_revenue' => $totalRevenue,
            'revenue_by_story' => $revenueByStory,
        ]);
    }

    public function statistics_list(){
        if(Auth::check()){
            $user = User::findOrFail(Auth::user()->id);
            $mybooks = Book::where('user_id', $user->id)->paginate(12);
            $bookshare = $user->sharedBooks()->paginate(5); // Truyện user được chia sẻ quyền
            // dd($mybooks,$bookshare);
            return view('action.statistics_list.index',compact('user','mybooks','bookshare'));

        }else{
            return redirect()->route('login');
        }
    }
    public function statistics_view($id, $year = null)
    {
        $user = User::findOrFail(Auth::id());
        $book = Book::findOrFail($id);
        if($user->id != $book->user_id && !$user->sharedBooks()->exists()){
            return response()->view('errors.403', [], 403);//Sau sẽ thêm cả danh sách người được chia sẻ
        }
        return view('action.statistics_list.view', compact('book','user'));
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
