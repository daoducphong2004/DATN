<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',            // ID người đăng truyện
        'revenue_share',       // Phần trăm chia sẻ doanh thu (VD: 70 nghĩa là 70%)
        'start_date',          // Ngày bắt đầu hợp đồng
        'end_date',            // Ngày kết thúc hợp đồng (nếu có)
        'status',              // Trạng thái hợp đồng (active, expired, terminated)
        'terms',               // Điều khoản hợp đồng
        'contract_code',       // Mã hợp đồng
        'contract_image',      // Đường dẫn ảnh hợp đồng
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hasContract($userId)
    {
        return $this->where('user_id', $userId)
            ->where('status', 'active')
            ->exists();
    }
}
