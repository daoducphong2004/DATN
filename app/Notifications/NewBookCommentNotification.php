<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewBookCommentNotification extends Notification
{
    use Queueable;

    public $book;
    public $bookcomment;

    /**
     * Create a new notification instance.
     */
    public function __construct($book, $bookcomment)
    {
        $this->book = $book;
        $this->bookcomment = $bookcomment;
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
            'message' => "{$this->bookcomment->user->username} đã theo bình luận truyện của bạn: {$this->book->title}",
            'book_id' => $this->book->id,
            'user_id' => $this->bookcomment->user_id,
            'slug' => $this->book->slug,
        ];
    }
}
