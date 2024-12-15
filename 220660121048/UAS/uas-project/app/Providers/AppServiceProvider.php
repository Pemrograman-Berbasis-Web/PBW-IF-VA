<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

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
        // Vite::prefetch(concurrency: 3);
        if (env('VERCEL_ENV')) {
            // Konfigurasi untuk view cache
            View::addLocation('/tmp');
            config(['view.compiled' => '/tmp']);

            // Konfigurasi untuk SQLite di /tmp
            $databasePath = base_path('database/database.sqlite');
            $tmpDatabasePath = '/tmp/database.sqlite';

            // Jika file SQLite ada di base_path, pindahkan ke /tmp
            if (file_exists($databasePath) && !file_exists($tmpDatabasePath)) {
                copy($databasePath, $tmpDatabasePath);
            }

            // Pastikan Laravel menggunakan database dari /tmp
            config(['database.connections.sqlite.database' => $tmpDatabasePath]);
        }
    }
}