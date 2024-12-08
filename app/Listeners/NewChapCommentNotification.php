<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewChapCommentNotification
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
        if (!$event->chapter || !$event->chapter->book) {
            return;
        }

        $authorId = $event->chapter->book->user_id;
        // $commentUser = $event->bookcomment->user;

        $author = User::find($authorId);
        // dd($author);
        if ($author) {
            $author->notifications()->create([
                'type' => 'App\Notifications\NewChapCommentNotification',
                'notifiable_id' => $authorId,
                'notifiable_type' => 'App\Models\User',
                'data' => [
                    'message' => '<strong>' .  $event->chaptercomment->user->username . '</strong> đã bình luận <strong>' . $event->chapter->title . '</strong> trong truyện <strong>'. $event->chapter->book->title .'</strong> của bạn',
                    'slug' => $event->chapter->slug,
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
