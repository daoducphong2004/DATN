<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewForumCommentNotification
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
        $authorId = $event->forum->user_id;

        $author = User::find($authorId);
        // dd($author);
        if ($author) {
            $author->notifications()->create([
                'type' => 'App\Notifications\NewForumCommentNotification',
                'notifiable_id' => $authorId,
                'notifiable_type' => 'App\Models\User',
                'data' => [
                    'message' => '<strong>' .  $event->forumcomment->user->username . '</strong> đã bình luận 1 thảo luận của bạn',
                    'id' => $event->forum->id,
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
