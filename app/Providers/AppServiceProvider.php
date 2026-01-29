<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Message;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('dashboard.admin.layouts.components.header', function ($view) {
            $unreadMessages = Message::where('status', 'unread')
                ->where('created_at', '>=', Carbon::now()->subDay())
                ->latest()
                ->take(5)
                ->get();

            $view->with('unreadMessages', $unreadMessages);
        });

        Carbon::setLocale('id');
    }
}
