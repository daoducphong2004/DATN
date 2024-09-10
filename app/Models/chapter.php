<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'slug',
        'title',
        'content',
        'episode_id',
        // 'user_id',
    ];
<<<<<<< HEAD

    public function episode()
    {
        return $this->belongsTo(episode::class, 'episode_id');
    }
    public function chaptercomments()
    {
        return $this->hasMany(chaptercomment::class);
    }

    public function book()
    {
        return $this->belongsTo(book::class);
=======
    public function chaptercomments(){
        return $this->hasMany(ChapterComment::class);
    }
    public function episode(){
        return $this->belongsTo(episode::class);
>>>>>>> b679f95696c8e4e70a5590bd1cb95bde079b5d70
    }
    public function previous()
    {
        // Tìm chương trước trong cùng một episode
        return $this->where('episode_id', $this->episode_id)
                    ->where('id', '<', $this->id)
                    ->orderBy('id', 'desc')
                    ->first();
    }

    public function next()
    {
        // Tìm chương tiếp theo trong cùng một episode
        return $this->where('episode_id', $this->episode_id)
                    ->where('id', '>', $this->id)
                    ->orderBy('id', 'asc')
                    ->first();
    }

}
