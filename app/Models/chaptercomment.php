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
        'parent_id',
        'is_delete',
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
    public function deletedBy(){
        return $this->belongsTo(User::class, 'is_delete');
    }
    public function getComments($chapterId)
    {
        // Lấy các bình luận cha (parent comments)
        $parentComments = ChapterComment::where('chapter_id', $chapterId)
                                        ->whereNull('parent_id')
                                        ->get();

        // Lấy các bình luận con (reply comments)
        $replyComments = ChapterComment::where('chapter_id', $chapterId)
                                       ->whereNotNull('parent_id')
                                       ->get();

        // Lấy các bình luận đã bị xóa
        $deletedComments = ChapterComment::where('chapter_id', $chapterId)
                                         ->whereNotNull('is_delete')
                                         ->get();

        return [
            'parent_comments' => $parentComments,
            'reply_comments' => $replyComments,
            'deleted_comments' => $deletedComments,
        ];
    }
}
