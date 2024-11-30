<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'username',
        'password_hash',
        'email',
        'gender',
        'date_of_birth',
        'avatar_url',
        'last_login',
        'status',
        'coin_earned',
        'full_name',
        'remember_token',
        'group',
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function episodes()
    {
        return $this->hasMany(episode::class);
    }

    public function chapters()
    {
        return $this->hasMany(chapter::class);
    }
    // Define relationships in your User model
    public function bookComments()
    {
        return $this->hasMany(bookcomment::class);
    }

    public function chapterComments()
    {
        return $this->hasMany(chaptercomment::class);
    }

    public function forumComments()
    {
        return $this->hasMany(ForumComment::class);
    }

    // Create a method to calculate the total comment count
    public function getCountCommentsAttribute()
    {
        $bookCommentCount = $this->bookComments()->count();
        $chapterCommentCount = $this->chapterComments()->count();
        $forumCommentCount = $this->forumComments()->count();

        return $bookCommentCount + $chapterCommentCount + $forumCommentCount;
    }
    // Tổng số truyện (sách) mà tác giả đã đăng
    public function totalBooks()
    {
        return $this->hasMany(Book::class)->count();
    }
    public function totalEpisodes()
    {
        return $this->hasMany(episode::class)->count();
    }
    public function totalChapter()
    {
        return $this->hasMany(chapter::class)->count();
    }
    public function likedBooks()
    {
        return $this->belongsToMany(Book::class, 'like_books');
    }


    public function comments()
    {
        return $this->hasMany(bookcomment::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function readingHistories()
    {
        return $this->hasMany(ReadingHistory::class);
    }

    public function purchasedStories()
    {
        return $this->hasMany(PurchasedStory::class);
    }
    public function countPurchasedChapters()
    {
        return $this->purchasedStories()->count();
    }
    public function author()
    {
        return $this->hasOne(Author::class);
    }
    // Tính tổng tiền tác giả kiếm được
    public function totalEarnings()
    {
        return Transaction::whereHas('wallet', function ($query) {
            $query->where('user_id', $this->id); // Lọc theo user_id của tác giả
        })
            ->where('status', 'completed') // Chỉ lấy các giao dịch đã hoàn thành
            ->sum('amount'); // Tính tổng số tiền
    }
    public function hasPurchased($chapterId)
    {
        return $this->purchasedStories()->where('chapter_id', $chapterId)->exists();
    }
    // Quan hệ để lấy các truyện mà user được chia sẻ quyền
    public function sharedBooks()
    {
        return $this->belongsToMany(Book::class, 'shared_books', 'user_id', 'book_id');
    }
    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }
    public function bookmarks()
    {
        return $this->HasMany(Bookmarks::class);
    }
    public function approvalHistories()
    {
        return $this->hasMany(ApprovalHistory::class);
    }
    public function letters()
    {
        return $this->hasMany(Letter::class);
    }
    // Tính tổng số chương mà tác giả bán được
    public function totalChaptersSold()
    {
        // Truy vấn các chương đã được bán thông qua giao dịch trong bảng Transaction
        return $this->hasMany(Book::class)
            ->join('transactions', 'books.id', '=', 'transactions.purchased_story_id')
            ->where('transactions.status', 'completed')  // Lọc các giao dịch đã hoàn tất
            ->join('purchased_stories', 'transactions.purchased_story_id', '=', 'purchased_stories.id')
            ->groupBy('purchased_stories.chapter_id')  // Nhóm theo ID chương
            ->selectRaw('count(distinct purchased_stories.chapter_id) as total_chapters_sold')  // Đếm số chương đã bán
            ->pluck('total_chapters_sold')
            ->first();  // Trả về số chương đã bán
    }

    public function myGroup()
    {
        return $this->belongsTo(group::class, 'group');
    }
    // Tính tổng doanh thu từ tất cả các giao dịch trong bảng Transaction của tác giả
    public function totalEarningsFromAllBooks()
    {
        // Truy vấn tổng doanh thu từ các giao dịch (transaction) của tất cả các sách mà tác giả đã đăng
        return $this->hasMany(Book::class)
            ->join('transactions', 'books.id', '=', 'transactions.purchased_story_id')
            ->where('transactions.status', 'completed')  // Lọc các giao dịch đã hoàn tất
            ->sum('transactions.amount');  // Tính tổng số tiền giao dịch
    }

    // Tính tổng doanh thu từ một cuốn sách cụ thể
    public function totalEarningsFromBook($bookId)
    {
        return $this->hasMany(Book::class)
            ->where('books.id', $bookId)
            ->join('transactions', 'books.id', '=', 'transactions.purchased_story_id')
            ->where('transactions.status', 'completed')  // Lọc các giao dịch đã hoàn tất
            ->sum('transactions.amount');  // Tính tổng số tiền giao dịch
    }
    // Tính tổng số chương đã bán từ tất cả các giao dịch trong bảng Transaction của tác giả

}
