<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewBookCommentNotification
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
        $authorId = $event->book->user_id;
        $commentUserId = $event->bookcomment->user_id;

        if ($authorId !== $commentUserId) {
            $author = User::find($authorId);

            if ($author) {
                $author->notifications()->create([
                    'type' => 'App\Notifications\NewBookCommentNotification',
                    'notifiable_id' => $authorId,
                    'notifiable_type' => 'App\Models\User',
                    'data' => [
                        'message' => '<strong>' . $event->bookcomment->user_id. '</strong> đã bình luận truyện <strong>' . $event->book->title . '</strong> của bạn',
                        'slug' => $event->book->slug,
                    ],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

}
