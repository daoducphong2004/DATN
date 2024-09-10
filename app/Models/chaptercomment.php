<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chaptercomment extends Model
{
    use HasFactory;
    protected $table = 'chapter_comments';
    protected $fillable = [
        'chapter_id',
        'user_id',
        'content',
        'parent_id'
<<<<<<< HEAD
    ];

    public function chapter()
    {
        return $this->belongsTo(chapter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(chaptercomment::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(chaptercomment::class, 'parent_id');
    }
=======
        ];

        public function children (){
            return $this->hasMany(chaptercomment::class,'parent_id')->with('children');
        }


>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
}
