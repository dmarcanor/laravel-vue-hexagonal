<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Practice\ReviewSys\Review\Application\Create\CreateReviewContainer;
use Practice\ReviewSys\Review\Domain\ReviewRepository;
use Practice\ReviewSys\Review\Infrastructure\Bus\SimpleCommandBus;
use Practice\ReviewSys\Review\Infrastructure\Bus\SimpleQueryBus;
use Practice\ReviewSys\Review\Infrastructure\Eloquent\ReviewEloquentRepository;
use Practice\ReviewSys\Shared\Command\CommandBus;
use Practice\ReviewSys\Shared\Container\Container;
use Practice\ReviewSys\Shared\Queries\QueryBus;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            CommandBus::class,
            SimpleCommandBus::class
        );

        $this->app->bind(
            QueryBus::class,
            SimpleQueryBus::class
        );

        $this->app->bind(
            Container::class,
            CreateReviewContainer::class
        );

        $this->app->bind(
            ReviewRepository::class,
            ReviewEloquentRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
