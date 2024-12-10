<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'username',
        'password_hash',
        'email',
        'gender',
        'date_of_birth',
        'avatar_url',
        'last_login',
        'status',
        'coin_earned',
        'full_name',
        'remember_token',
        'group',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function episodes()
    {
        return $this->hasMany(episode::class);
    }

    public function chapters()
    {
        return $this->hasMany(chapter::class);
    }
    // Define relationships in your User model
    public function bookComments()
    {
        return $this->hasMany(bookcomment::class);
    }

    public function chapterComments()
    {
        return $this->hasMany(chaptercomment::class);
    }

    public function forumComments()
    {
        return $this->hasMany(ForumComment::class);
    }

    // Create a method to calculate the total comment count
    public function getCountCommentsAttribute()
    {
        $bookCommentCount = $this->bookComments()->count();
        $chapterCommentCount = $this->chapterComments()->count();
        $forumCommentCount = $this->forumComments()->count();

        return $bookCommentCount + $chapterCommentCount + $forumCommentCount;
    }
    // Tổng số truyện (sách) mà tác giả đã đăng
    public function totalBooks()
    {
        return $this->hasMany(Book::class)->count();
    }
    public function totalEpisodes()
    {
        return $this->hasMany(episode::class)->count();
    }
    public function totalChapter()
    {
        return $this->hasMany(chapter::class)->count();
    }
    public function likedBooks()
    {
        return $this->belongsToMany(Book::class, 'like_books');
    }


    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function readingHistories()
    {
        return $this->hasMany(ReadingHistory::class);
    }

    public function purchasedStories()
    {
        return $this->hasMany(PurchasedStory::class);
    }
    public function countPurchasedChapters()
    {
        return $this->purchasedStories()->count();
    }
    public function author()
    {
        return $this->hasOne(Author::class);
    }
    // Tính tổng tiền tác giả kiếm được
    public function totalEarnings()
    {
        return Transaction::whereHas('wallet', function ($query) {
            $query->where('user_id', $this->id); // Lọc theo user_id của tác giả
        })
            ->where('status', 'completed') // Chỉ lấy các giao dịch đã hoàn thành
            ->sum('amount'); // Tính tổng số tiền
    }
    public function hasPurchased($chapterId)
    {
        return $this->purchasedStories()->where('chapter_id', $chapterId)->exists();
    }
    // Quan hệ để lấy các truyện mà user được chia sẻ quyền
    public function sharedBooks()
    {
        return $this->belongsToMany(Book::class, 'shared_books', 'user_id', 'book_id');
    }
    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    public function bookmarks()
    {
        return $this->HasMany(Bookmarks::class);
    }
    public function approvalHistories()
    {
        return $this->hasMany(ApprovalHistory::class);
    }
    public function letters()
    {
        return $this->hasMany(Letter::class);
    }
    public function myGroup()
    {
        return $this->belongsTo(group::class, 'group');
    }
    // Tính tổng doanh thu từ tất cả các giao dịch trong bảng Transaction của tác giả
    public function totalEarningsFromAllBooks()
    {
        // Truy vấn tổng doanh thu từ các giao dịch (transaction) của tất cả các sách mà tác giả đã đăng
        return $this->hasMany(Book::class)
            ->join('transactions', 'books.id', '=', 'transactions.purchased_story_id')
            ->where('transactions.status', 'completed')  // Lọc các giao dịch đã hoàn tất
            ->sum('transactions.amount');  // Tính tổng số tiền giao dịch
    }
    public function revenue()
    {
        // Lọc các giao dịch của tác giả có type là 'credit'
        return $this->hasOne(Wallet::class)
            ->join('transactions', 'wallets.id', '=', 'transactions.wallet_id')
            ->where('transactions.type', 'credit')
            ->sum('transactions.amount');
    }

    public function totalRevenue($year = null)
    {
        $query = Transaction::join('wallets', 'transactions.wallet_id', '=', 'wallets.id')  // Join với bảng wallets
            ->join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id') // Kết nối với purchased_stories
            ->where('wallets.user_id', $this->id);  // Sử dụng user_id của wallet để lọc

        if ($year) {
            $query->whereYear('purchased_stories.purchase_date', $year);
        }

        return $query->sum('transactions.amount');
    }

    // Trong model User.php

    public function revenueByStory($year = null)
    {
        $query = Transaction::join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id') // Kết nối với bảng chapters để lấy book_id
            ->join('books', 'chapters.book_id', '=', 'books.id') // Kết nối với bảng books để lấy thông tin sách
            ->where('books.user_id', $this->id) // Thay vì purchased_stories.user_id, ta sử dụng books.id
            ->groupBy('chapters.book_id', 'books.title', 'books.slug') // Nhóm theo book_id, title và slug
            ->orderByDesc(\DB::raw('sum(transactions.amount)')) // Sắp xếp giảm dần theo tổng doanh thu
            ->limit(5); // Giới hạn số lượng kết quả trả về là 5

        if ($year) {
            $query->whereYear('purchased_stories.purchase_date', $year); // Nếu có năm, lọc theo năm mua
        }

        // Lấy top 5 truyện có doanh thu cao nhất
        return $query->select(
            'chapters.book_id',
            'books.title',
            'books.slug',
            \DB::raw('sum(transactions.amount) as total_revenue')
        )->get();
    }


    // Trong model User.php

    public function revenueByMonth($year)
    {
        return $this->hasOne(Wallet::class)
            ->join('transactions', 'wallets.id', '=', 'transactions.wallet_id')
            ->where('transactions.type', 'credit')
            ->whereYear('transactions.created_at', $year)
            ->groupBy(\DB::raw('MONTH(transactions.created_at)'))
            ->selectRaw('MONTH(transactions.created_at) as month, SUM(transactions.amount) as total_revenue')
            ->get();
    }
    public function revenueDetailsByMonth($year)
    {
        return $this->hasOne(Wallet::class)
            ->join('transactions', 'wallets.id', '=', 'transactions.wallet_id')
            ->where('transactions.type', 'credit')
            ->whereYear('transactions.created_at', $year)
            ->groupBy(\DB::raw('MONTH(transactions.created_at)'))
            ->selectRaw('MONTH(transactions.created_at) as month, SUM(transactions.amount) as total_revenue, COUNT(transactions.id) as transaction_count')
            ->get();
    }

    // Tính tổng doanh thu từ một cuốn sách cụ thể
    public function totalEarningsFromBook($bookId)
    {
        return $this->hasMany(Chapter::class, 'book_id', 'id') // Liên kết từ Book đến Chapter
            ->join('purchased_stories', 'chapters.id', '=', 'purchased_stories.chapter_id') // Kết nối với bảng purchased_stories
            ->join('transactions', 'purchased_stories.id', '=', 'transactions.purchased_story_id') // Kết nối với bảng transactions
            ->where('books.id', $bookId) // Lọc theo ID của sách
            ->where('transactions.type', 'coin') // Lọc các giao dịch có loại là 'coin'
            ->sum('transactions.amount'); // Tính tổng doanh thu từ các giao dịch
    }
    public function totalEarningsForAuthorFromBook($bookId, $authorId)
    {
        return $this->hasMany(Chapter::class, 'book_id', 'id') // Liên kết từ Book đến Chapter
            ->join('purchased_stories', 'chapters.id', '=', 'purchased_stories.chapter_id') // Kết nối với bảng purchased_stories
            ->join('transactions', 'purchased_stories.id', '=', 'transactions.purchased_story_id') // Kết nối với bảng transactions
            ->where('books.id', $bookId) // Lọc theo ID của sách
            ->where('chapters.user_id', $authorId) // Lọc theo ID của tác giả
            ->where('transactions.type', 'coin') // Lọc các giao dịch có loại là 'coin'
            ->sum('transactions.amount'); // Tính tổng doanh thu từ các giao dịch
    }


    // Tính tổng số chương đã bán từ tất cả các giao dịch trong bảng Transaction của tác giả
    public function totalChaptersSoldFromBook($bookId, $authorId)
    {
        return $this->hasMany(Chapter::class, 'book_id', 'id') // Liên kết từ Book đến Chapter
            ->join('purchased_stories', 'chapters.id', '=', 'purchased_stories.chapter_id') // Kết nối với bảng purchased_stories
            ->join('transactions', 'purchased_stories.id', '=', 'transactions.purchased_story_id') // Kết nối với bảng transactions
            ->where('books.id', $bookId) // Lọc theo ID của sách
            ->where('transactions.type', 'coin') // Chỉ tính các giao dịch có loại là 'coin'
            ->where('transactions.status', 'completed') // Chỉ tính các giao dịch hoàn tất
            ->where('chapters.user_id', $authorId) // Lọc theo ID của tác giả
            ->count('purchased_stories.chapter_id'); // Đếm số lần chương được bán
    }
    public function countUniqueBuyers($bookId)
    {
        return $this->hasMany(Chapter::class, 'book_id', 'id') // Liên kết từ Book đến Chapter
            ->join('purchased_stories', 'chapters.id', '=', 'purchased_stories.chapter_id') // Kết nối với bảng purchased_stories
            ->join('transactions', 'purchased_stories.id', '=', 'transactions.purchased_story_id') // Kết nối với bảng transactions
            ->where('books.id', $bookId) // Lọc theo ID của sách
            ->where('transactions.type', 'coin') // Chỉ tính các giao dịch bằng "coin"
            ->where('transactions.status', 'completed') // Chỉ tính các giao dịch đã hoàn tất
            ->distinct('purchased_stories.user_id') // Lọc những người dùng duy nhất
            ->count('purchased_stories.user_id'); // Đếm số lượng người mua duy nhất
    }
    // Mối quan hệ với bảng payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // Hàm đếm người dùng đã nạp tiền và chưa nạp tiền
    public static function countUsersByPaymentStatus()
    {
        // Đếm số người dùng đã nạp tiền (có bản ghi trong bảng payments)
        $usersWithPayments = self::whereHas('payments')->count();

        // Đếm số người dùng chưa nạp tiền (không có bản ghi trong bảng payments)
        $usersWithoutPayments = self::whereDoesntHave('payments')->count();

        return [
            'paid' => $usersWithPayments,
            'unpaid' => $usersWithoutPayments,
        ];
    }
    // Hàm đếm số lượng tác giả (người dùng có role_id = 5)
    public static function countAuthors()
    {
        return self::where('role_id', 5)->count();  // Đếm số người dùng có role_id = 5
    }
    // Hàm lấy top 10 tác giả có doanh thu cao nhất
    public static function topAuthorsByRevenue()
    {
        return DB::table('users')
            ->join('wallets', 'users.id', '=', 'wallets.user_id')
            ->join('transactions', 'wallets.id', '=', 'transactions.wallet_id')
            ->whereIn('users.role_id', [1, 2, 3, 5, 7])  // Lọc theo role_id
            ->where('transactions.type', 'coin')  // Lọc theo loại giao dịch 'coin'
            ->select('users.id', 'users.username', DB::raw('SUM(transactions.amount) as total_revenue'))
            ->groupBy('users.id', 'users.username')  // Nhóm theo user để tính tổng doanh thu
            ->orderByDesc('total_revenue')  // Sắp xếp theo doanh thu giảm dần
            ->limit(10)  // Lấy top 10 tác giả
            ->get();
    }
}
