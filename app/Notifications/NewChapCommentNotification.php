<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewChapCommentNotification extends Notification
{
    use Queueable;
    public $chapter;
    public $chaptercomment;

    /**
     * Create a new notification instance.
     */
    public function __construct($chapter, $chaptercomment)
    {
        $this->chapter = $chapter;
        $this->chaptercomment = $chaptercomment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'message' => "{$this->chaptercomment->user->username} đã bình luận chương {$this->chapter->title} trong truyện {$this->chapter->book->title} của bạn.",
            'chapter_id' => $this->chapter->id,
            'user_id' => $this->chaptercomment->user_id,
            'slug' => $this->chapter->slug,
        ];
    }
}
