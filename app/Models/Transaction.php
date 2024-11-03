<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'wallet_id',       // Ví của người nhận
        'purchased_story_id', // ID của truyện đã mua
        'amount',          // Số tiền giao dịch
        'type',            // Loại giao dịch, ví dụ: 'credit' (nạp) hoặc 'debit' (rút)
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
}
