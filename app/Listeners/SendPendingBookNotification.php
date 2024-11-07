<?php

namespace App\Listeners;

use App\Events\BookCreated;
use App\Models\book;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPendingBookNotification
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
    public function handle(BookCreated $event): void
    {
        $pendingBooksCount = Book::where('Is_Inspect', 0)->count();

        $admin = User::where('role_id', Role::where('name', 'super_admin')->value('id'))->first();

        if ($pendingBooksCount > 0) {
            $admin->notifications()->create(
                [
                    'type' => 'App\Notifications\BookPendingNotification',
                    'data' => [
                        'message' => 'Có ' . $pendingBooksCount . ' truyện chưa được duyệt.',
                    ],
                ]
            );
        }
    }
}
