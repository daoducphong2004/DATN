<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingHistory extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'chapter_id',
        'last_read_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
    public function book()
    {
        return $this->belongsTo(book::class);
    }
}
