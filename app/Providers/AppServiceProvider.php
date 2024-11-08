<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        Paginator::useBootstrapFive();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        // Chia sẻ dữ liệu banners với mọi view cần nó
        View::composer(['partials.banner'], function ($view) {
            $banners = DB::table('banners')
                        ->where('is_active', 1)
                        ->get();

            $pc_banner = $banners->where('device_type', 'pc')->first();
            $mobile_banner = $banners->where('device_type', 'mobile')->first();

            // Truyền dữ liệu cho view banner
            $view->with(compact('pc_banner', 'mobile_banner'));
        });
    }
}
