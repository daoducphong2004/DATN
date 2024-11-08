<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewFollowerNotification
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

        $author = User::find($authorId);

        if ($author) {
            $author->notifications()->create([
                'type' => 'App\Notifications\FollowerNotification',
                'notifiable_id' => $authorId,
                'notifiable_type' => 'App\Models\User',
                'data' => [
                    'message' => '<strong>' . $event->user->username . '</strong> đã theo dõi truyện <strong>' . $event->book->title . '</strong> của bạn',
                ],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
