<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // digunakan untuk debug query yang sedang dijalankan ileh aplikasi
        // secara default tidak dijalankan
        DB::listen(function($query){
            $logFile = storage_path('logs/query.log');
            $monolog = new Logger('log');
            $monolog->pushHandler(new StreamHandler($logFile), Logger::INFO);
            $monolog->info($query->sql, compact($query->bindings, $query->time));
        });
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
