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
        'reason'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Scope to get deleted histories by book_id
     *
    * @param \Illuminate\Database\Eloquent\Builder $query
    * @param int $bookId
    * @return \Illuminate\Database\Eloquent\Builder
    */
   public function scopeDeletedByBookId($query, $bookId)
   {
       return $query->where('book_id', $bookId);
   }
}
