<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        // Gọi phương thức mapApiRoutes để đăng ký route API
        $this->mapApiRoutes();
    }

    /**
     * Định nghĩa và đăng ký các route API.
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api') // Tiền tố /api
            ->middleware('api') // Middleware api
            ->group(base_path('routes/api.php')); // Nhóm route từ file routes/api.php
    }
}