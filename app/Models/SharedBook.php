<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SharedBook extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'book_id'];

    // Quan hệ đến người dùng được chia sẻ quyền chỉnh sửa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Quan hệ đến truyện được chia sẻ
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
