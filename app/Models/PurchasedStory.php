<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchasedStory extends Model
{
    protected $fillable = [
        'user_id',
        'chapter_id',
        'purchase_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function story()
    {
        return $this->belongsTo(Book::class, 'book_id'); // Chỉ rõ khóa ngoại
    }
}
