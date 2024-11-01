<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookPendingNotification extends Notification implements ShouldQueue{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $data;
    protected $book;

    public function __construct($data, $book)
    {
        $this->book = $book;
        $this->data = $data;
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
    //         ->subject('Thông báo về truyện chưa được duyệt')
    //         ->line('Có một số truyện chưa duyệt trong 5 ngày qua. Hãy xem ngay!')
    //         ->action('Xem danh sách truyện chưa được duyệt', route('books.approval'))
    //         ->line('Cảm ơn bạn đã xem!');
    // }

    public function toDatabase($notifiable)
    {
        return [
            'message' => 'Có ' . $this->book->count() . ' truyện chưa được duyệt: ' . $this->book->title,
        ];
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
