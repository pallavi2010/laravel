<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryEloquent;
use App\User;
use App\Repositories\ArticleRepository;
use App\Repositories\ArticleRepositoryEloquent;
use App\Article;

class AppServiceProvider extends ServiceProvider
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
        $this->app->bind(UserRepository::class, function ($app) {
            return new UserRepositoryEloquent(new User());
        });

        $this->app->bind(ArticleRepository::class, function ($app) {
            return new ArticleRepositoryEloquent(new Article());
        });
        
    }
}
