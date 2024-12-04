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
        $commentUser = $event->bookcomment->user;

        $author = User::find($authorId);
        // dd($author);
        if ($author && $commentUser->id !== $authorId) {
            $author->notifications()->create([
                'type' => 'App\Notifications\NewBookCommentNotification',
                'notifiable_id' => $authorId,
                'notifiable_type' => 'App\Models\User',
                'data' => [
                    'user_id' => $commentUser->id,
                    'username' => $commentUser->username,
                    'message' => '<strong>' .  $commentUser->username . '</strong> đã bình luận truyện <strong>' . $event->book->title . '</strong> của bạn',
                    'slug' => $event->book->slug,
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
