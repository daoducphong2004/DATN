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
}
