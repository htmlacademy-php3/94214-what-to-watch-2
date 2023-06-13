<?php

namespace App\Providers;

use App\Services\MovieService\MovieRepositoryInterface;
use App\Services\MovieService\MovieOmdbRepository;
use App\Services\MovieService\MovieAcademyRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(MovieRepositoryInterface::class, MovieOmdbRepository::class);
        $this->app->bind(MovieRepositoryInterface::class, MovieAcademyRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
