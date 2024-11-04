<?php

// app/Notifications/StoryApprovalNotification.php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class StoryApprovalNotification extends Notification
{
    use Queueable;

    private $story;

    public function __construct($story)
    {
        $this->story = $story; // Nhận đối tượng truyện từ controller
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Truyện của bạn đã được duyệt')
            ->line("Truyện thuộc thể loại '{$this->story->genre_id}' của bạn đã được duyệt.")
            ->action('Xem truyện', url("/stories/{$this->story->genre_id}"));
    }

    public function toArray($notifiable)
    {
        return [
            'message' => "Truyện thuộc thể loại '{$this->story->genre_id}' của bạn đã được duyệt.",
            'genre_id' => $this->story->genre_id,
        ];
    }
}
