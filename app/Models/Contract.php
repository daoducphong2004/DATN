<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'contract_number',
        'start_date',
        'end_date',
        'author_name',
        'author_address',
        'author_phone',
        'author_email',
        'content',
        'payment_amount',
        'payment_method',
        'payment_due_date'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
