<?php

namespace Core\Providers;

use Core\Repositories\BookRepository;
use Core\Repositories\BookRepositoryContract;
use Core\Repositories\JabtaskEventsRepository;
use Core\Repositories\JabtaskEventsRepositoryContract;
use Core\Repositories\JabtaskUsersRepository;
use Core\Repositories\JabtaskUsersRepositoryContract;
use Core\Services\BookService;
use Core\Services\BookServiceContract;
use Core\Services\JabtaskEventsService;
use Core\Services\JabtaskEventsServiceContract;
use Core\Services\JabtaskUsersService;
use Core\Services\JabtaskUsersServiceContract;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BookRepositoryContract::class, BookRepository::class);
        $this->app->bind(BookServiceContract::class, BookService::class);

        $this->app->bind(JabtaskUsersRepositoryContract::class, JabtaskUsersRepository::class);
        $this->app->bind(JabtaskUsersServiceContract::class, JabtaskUsersService::class);

        $this->app->bind(JabtaskEventsRepositoryContract::class, JabtaskEventsRepository::class);
        $this->app->bind(JabtaskEventsServiceContract::class, JabtaskEventsService::class);
    }
}