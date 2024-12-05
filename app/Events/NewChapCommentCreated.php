<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewChapCommentCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $chapter;
    public $chaptercomment;
    /**
     * Create a new event instance.
     */
    public function __construct($chapter, $chaptercomment)
    {
        $this->chapter = $chapter;
        $this->chaptercomment = $chaptercomment;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
