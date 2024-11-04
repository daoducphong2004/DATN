<?php

namespace App\Listeners;

use App\Events\AuthorCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Role;
use App\Models\User;

class AuthorRoleNotification
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
    public function handle(AuthorCreated $event): void
    {
        $user = $event->user;

        $admin = User::where('role_id', Role::where('name', 'super_admin')->value('id'))->first();

        $admin->notifications()->where('type', 'App\Notifications\AuthorRoleNotification')->delete();

        if ($admin) {
            if (isset($user->username) && isset($user->id)) {
                $admin->notifications()->create([
                    'type' => 'App\Notifications\AuthorRoleNotification',
                    'data' => [
                        'message' => $user->username . ' đã đăng ký quyền tác giả.',
                        'user_id' => $user->id,
                    ],
                ]);
            }
        }
    }
}
