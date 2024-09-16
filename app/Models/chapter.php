<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class chapter extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'id',
        'slug',
        'title',
        'content',
        'episode_id',
        'user_id',
    ];

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
