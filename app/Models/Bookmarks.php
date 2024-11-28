<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bookmarks extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'line_id',
        'chapter_id',
        ];
        public function book(){
            return $this->belongsTo(Book::class);
        }
        public function chapter(){
            return $this->belongsTo(chapter::class);
        }
}



