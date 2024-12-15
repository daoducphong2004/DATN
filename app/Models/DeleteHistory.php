<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeleteHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'reason',
        'status',
    ];

    public function book()
    {
        return $this->belongsTo(Book::class,  'book_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
