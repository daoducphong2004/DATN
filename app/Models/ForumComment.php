<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'forum_id',
        'parent_id',
    ];
    public function parent()
    {
        return $this->belongsTo(ForumComment::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ForumComment::class, 'parent_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
