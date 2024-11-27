<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyFollowersOfNewChapter
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $chapter = $event->chapter;
        $book = $chapter->book;
        // $authorId = $event->chapter->user_id;
        // $author = User::find($authorId);

        $followers = $book->likedBooks;

        foreach ($followers as $follower) {
            $follower->notifications()->create([
                'type' => 'App\Notifications\NewChapterNotification',
                'notifiable_id' => $chapter->user_id,
                'notifiable_type' => 'App\Models\User',
                'data' => [
                    'message' => 'Truyện <strong>' . $book->title . '</strong> đã có chương mới truyện.',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
