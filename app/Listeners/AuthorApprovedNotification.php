<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;


class AuthorApprovedNotification
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
    public function handle(UserCreated $event): void
    {
        $authorId = $event->user->id;

        $author = User::find($authorId);

        if ($author) {
            $author->notifications()->updateOrCreate(
                ['type' => 'App\Notifications\AuthorApprovedNotification'],
                [
                    'data' => [
                        'message' => 'Chúc mừng ' . $event->user->username. ' đã được duyệt thành tác giả.',
                    ],
                ]
            );
            // $author->notify(new StoryApprovedNotification($event->book->title));
        }
    }
}
