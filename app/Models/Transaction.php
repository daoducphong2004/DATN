<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',       // Ví của người nhận
        'purchased_story_id', // ID của truyện đã mua
        'amount',          // Số tiền giao dịch
        'type',            // Loại giao dịch, ví dụ: 'coin' (giao dịch chuyển tiền cho tác giả) hoặc 'withdraw' (tác giả rút tiền), 'admin' cộng tiền vào ví cho admin
        'description',     // Mô tả giao dịch
        'status',          // Trạng thái giao dịch (pending, completed, failed)
    ];

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function purchasedStory()
    {
        return $this->belongsTo(PurchasedStory::class);
    }
    /**
     * Tính doanh thu theo ngày
     */
    public static function revenueByDay($type = null, $walletId = null)
    {
        $query = self::where('status', 'completed'); // Chỉ lấy giao dịch hoàn tất

        // Lọc theo loại giao dịch nếu có
        if ($type) {
            $query->where('type', $type);
        }

        // Lọc theo ví nếu có
        if ($walletId) {
            $query->where('wallet_id', $walletId);
        }

        return $query->select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('SUM(amount) as total_revenue')
        )
            ->groupBy('date')
            ->orderBy('date', 'desc')
            ->get();
    }
    public static function revenuebydayandbybook($type = null, $walletId = null)
    {
        $query = self::where('transactions.status', 'completed'); // Chỉ lấy giao dịch hoàn tất

        // Lọc theo loại giao dịch nếu có
        if ($type) {
            $query->where('transactions.type', $type);
        }

        // Lọc theo ví nếu có
        if ($walletId) {
            $query->where('transactions.wallet_id', $walletId);
        }

        return $query->join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->select(
                DB::raw('DATE(transactions.created_at) as date'),
                'books.id as book_id',
                'books.title as book_title',
                DB::raw('SUM(transactions.amount) as total_revenue')
            )
            ->groupBy('date', 'books.id')
            ->orderBy('date', 'desc')
            ->orderBy('books.id')
            ->get();
    }
    // hàm lọc theo ngày 
    public static function revenueBookWithDate($type = null, $walletId = null, $date = null)
    {
        $query = self::where('transactions.status', 'completed'); // Chỉ lấy giao dịch hoàn tất

        // Lọc theo loại giao dịch nếu có
        if ($type) {
            $query->where('transactions.type', $type);
        }

        // Lọc theo ví nếu có
        if ($walletId) {
            $query->where('transactions.wallet_id', $walletId);
        }

        // Lọc theo ngày nếu có
        if ($date) {
            $query->whereDate('transactions.created_at', $date);
        }

        return $query->join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->select(
                DB::raw('DATE(transactions.created_at) as date'),
                'books.id as book_id',
                'books.title as book_title',
                DB::raw('SUM(transactions.amount) as total_revenue')
            )
            ->groupBy('date', 'books.id')
            ->orderBy('date', 'desc')
            ->orderBy('books.id')
            ->get();
    }

    /**
     * Tổng số tiền theo loại giao dịch
     */
    public static function getTotalAmountByType($type, $walletId = null)
    {
        $query = self::where('type', $type);

        if ($walletId) {
            $query->where('wallet_id', $walletId);
        }

        return $query->sum('amount');
    }
    public static function revenueByStoryId($user_id=null,$type = null, $walletId = null, $storyId = null, $startDate = null, $endDate = null)
    {
        $query = self::where('transactions.status', 'completed'); // Chỉ lấy giao dịch hoàn tất

        // Lọc theo loại giao dịch nếu có
        if ($type) {
            $query->where('transactions.type', $type);
        }
        if ($user_id) {
            $query->where('chapters.user_id', $user_id);
        }
        // Lọc theo ví nếu có
        if ($walletId) {
            $query->where('transactions.wallet_id', $walletId);
        }

        // Lọc theo ID truyện nếu có
        if ($storyId) {
            $query->where('books.id', $storyId);
        }

        // Lọc theo ngày bắt đầu nếu có
        if ($startDate) {
            $query->whereDate('transactions.created_at', '>=', $startDate);
        }

        // Lọc theo ngày kết thúc nếu có
        if ($endDate) {
            $query->whereDate('transactions.created_at', '<=', $endDate);
        }

        return $query->join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->select(
                DB::raw('DATE(transactions.created_at) as date'),
                'books.id as book_id',
                'books.title as book_title',
                DB::raw('SUM(transactions.amount) as total_revenue')
            )
            ->groupBy('date', 'books.id')
            ->orderBy('date', 'asc')
            ->orderBy('books.id')
            ->get();
    }
    // Loc theo khoảng thời gian 
    public static function revenueByDateRangeAndBook($user_id=null,$type = null, $walletId = null, $startDate = null, $endDate = null)
    {
        $query = self::where('transactions.status', 'completed'); // Chỉ lấy giao dịch hoàn tất

        // Lọc theo loại giao dịch nếu có
        if ($type) {
            $query->where('transactions.type', $type);
        }

        // Lọc theo ví nếu có
        if ($walletId) {
            $query->where('transactions.wallet_id', $walletId);
        }

        // Lọc theo khoảng thời gian nếu có
        if ($startDate && $endDate) {
            $query->whereBetween('transactions.created_at', [$startDate, $endDate]);
        }
        // loc theo user_id
        if ($user_id) {
            $query->where('chapters.user_id', $user_id);
        }
        return $query->join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->select(
                DB::raw('DATE(transactions.created_at) as date'),
                'books.id as book_id',
                'books.title as book_title',
                DB::raw('SUM(transactions.amount) as total_revenue')
            )
            ->groupBy('date', 'books.id')
            ->orderBy('date', 'desc')
            ->orderBy('books.id')
            ->get();
    }
    public static function revenueByChapter($user_id = null, $type = null, $walletId = null, $storyId = null, $startDate = null, $endDate = null)
    {
        // Khởi tạo truy vấn cơ bản
        $query = self::join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->join('chapters', 'purchased_stories.chapter_id', '=', 'chapters.id')
            ->join('books', 'chapters.book_id', '=', 'books.id')
            ->where('transactions.status', 'completed') // Chỉ lấy giao dịch hoàn tất
            ->select(
                DB::raw('MAX(transactions.created_at) AS date'), // Lấy một ngày đại diện cho ngày thanh toán
                'chapters.id AS chapter_id',
                'chapters.title AS chapter_title',
                DB::raw('SUM(transactions.amount) AS total_revenue'), // Tổng doanh thu
                DB::raw('COUNT(DISTINCT purchased_stories.user_id) AS total_buyers') // Tổng số người mua chapter đó
            )
            ->groupBy('chapters.id') // Nhóm theo chapter_id
            ->orderBy('total_revenue', 'desc'); // Sắp xếp theo chapter_title

        // Lọc theo loại giao dịch nếu có
        if ($type) {
            $query->where('transactions.type', $type);
        }
        // loc theo user_id
        if ($user_id) {
            $query->where('chapters.user_id', $user_id);
        }
        // Lọc theo ví nếu có
        if ($walletId) {
            $query->where('transactions.wallet_id', $walletId);
        }

        // Lọc theo ID truyện nếu có
        if ($storyId) {
            $query->where('books.id', $storyId);
        }

        // Lọc theo ngày bắt đầu nếu có
        if ($startDate) {
            $query->whereDate('transactions.created_at', '>=', $startDate);
        }

        // Lọc theo ngày kết thúc nếu có
        if ($endDate) {
            $query->whereDate('transactions.created_at', '<=', $endDate);
        }

        return $query->get();
    }
}
