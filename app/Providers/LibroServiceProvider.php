<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LibroServiceInterface;
use App\Services\LibroService;

class LibroServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LibroServiceInterface::class, LibroService::class);
    }

    public function boot(): void
    {
        //
    }
}
