<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchasedStory extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'purchase_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function story()
    {
        return $this->belongsTo(book::class);
    }
}
