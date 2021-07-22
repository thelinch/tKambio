<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use managmentChange\application\TypeChangeCreate;
use managmentChange\application\TypeChangeDelete;
use managmentChange\application\TypeChangeFinder;
use managmentChange\application\TypeChangeList;
use managmentChange\application\TypeChangeUpdate;
use managmentChange\Domain\TypeChangeIRepository;
use managmentChange\Infraestructure\EloquentTypeChangeRepository;
use src\Shared\Domain\Bus\Event\EventBus;
use src\Shared\Domain\UuidGenerator;
use src\Shared\Infraestructure\Bus\Event\LaravelEventBus;
use src\Shared\Infraestructure\RamseyUuidGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            TypeChangeIRepository::class,
            EloquentTypeChangeRepository::class,
        );
        $this->app->bind(UuidGenerator::class, RamseyUuidGenerator::class);
        $this->app->bind(EventBus::class, LaravelEventBus::class);

        $this->app->bind("TypeChangeCreate", function ($app) {
            return new TypeChangeCreate($app->make("managmentChange\infraestructure\EloquentTypeChangeRepository"));
        });

        $this->app->bind("TypeChangeDelete", function ($app) {
            return new TypeChangeDelete($app->make("managmentChange\infraestructure\EloquentTypeChangeRepository"));
        });
        $this->app->bind("TypeChangeList", function ($app) {
            return new TypeChangeList($app->make("managmentChange\infraestructure\EloquentTypeChangeRepository"));
        });
        $this->app->bind("TypeChangeUpdate", function ($app) {
            return new TypeChangeUpdate($app->make("managmentChange\infraestructure\EloquentTypeChangeRepository"));
        });
        $this->app->bind("TypeChangeFinder", function ($app) {
            return new TypeChangeFinder($app->make("managmentChange\infraestructure\EloquentTypeChangeRepository"));
        });
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
