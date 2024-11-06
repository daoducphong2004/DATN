<?php

namespace App\Listeners;

use App\Events\StoryCreated;
use App\Models\Role;
use App\Models\User;
use App\Notifications\StoryApprovedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendStoryApprovedNotification
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
    public function handle(StoryCreated $event): void
    {
        $authorId = $event->book->user_id;

        $author = User::find($authorId);

        if ($author) {
            $author->notifications()->create([
                'type' => 'App\Notifications\StoryApprovedNotification',
                'data' => [
                    'message' => '<strong>' .$event->book->title . '</strong> truyện đã được duyệt.',
                    'slug' => $event->book->slug,
                ],
                ]
            );
            // $author->notify(new StoryApprovedNotification($event->book->title));
        }
    }
}
