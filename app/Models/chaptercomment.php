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
        ];

        public function children (){
            return $this->hasMany(chaptercomment::class,'parent_id')->with('children');
        }


}
