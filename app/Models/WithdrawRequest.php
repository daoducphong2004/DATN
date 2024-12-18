<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'status',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function createTransaction($status)
    {
        // Kiểm tra nếu giao dịch đã tồn tại
        $existingTransaction = Transaction::where('description', 'LIKE', 'Xử lý yêu cầu rút tiền ID: ' . $this->id)->first();
    
        if (!$existingTransaction) {
            if ($status === 'approved') {
                // Kiểm tra số dư có đủ hay không
                if ($this->user->wallet->balance >= $this->amount) {
                    // Trừ tiền từ số dư
                    $this->user->wallet->decrement('balance', $this->amount);
                    
                    // Tạo giao dịch "Rút tiền thành công"
                    Transaction::create([
                        'wallet_id' => $this->user->wallet->id,
                        'purchased_story_id' => null,
                        'amount' => $this->amount,
                        'type' => 'withdraw',
                        'description' => 'Xử lý yêu cầu rút tiền ID: ' . $this->id,
                        'status' => 'completed',
                    ]);
                } else {
                    // Trường hợp số dư không đủ
                    Transaction::create([
                        'wallet_id' => $this->user->wallet->id,
                        'purchased_story_id' => null,
                        'amount' => $this->amount,
                        'type' => 'withdraw',
                        'description' => 'Yêu cầu rút tiền ID: ' . $this->id . ' không thành công do số dư không đủ',
                        'status' => 'failed',
                    ]);
                }
            } elseif ($status === 'rejected') {
                // Tạo giao dịch "Rút tiền bị từ chối" (không trừ tiền)
                Transaction::create([
                    'wallet_id' => $this->user->wallet->id,
                    'purchased_story_id' => null,
                    'amount' => $this->amount,
                    'type' => 'withdraw',
                    'description' => 'Yêu cầu rút tiền ID: ' . $this->id . ' bị từ chối',
                    'status' => 'rejected',
                ]);
            }
        }
    }
    
    
        
}
