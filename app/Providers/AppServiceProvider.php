<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon; // jangan lupa import ini

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Set locale Carbon ke bahasa Indonesia
        Carbon::setLocale('id');
    }
}