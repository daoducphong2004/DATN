<?php

namespace App\Jobs;

use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMonthlyRevenueNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $admin = User::where('role_id', Role::where('name', 'super_admin')->value('id'))->value('id');

        if ($admin) {
            Notification::create([
                'type' => 'App\Notifications\MonthlyRevenueNotification',
                'notifiable_type' => 'App\Models\User',
                'notifiable_id' => $admin,
                'data' => [
                    'message' => 'Tổng kết doanh thu tháng ' . now()->format('m/Y'),
                ],
                // 'notifiable_type' => User::class,
            ]);
        }
    }
}
