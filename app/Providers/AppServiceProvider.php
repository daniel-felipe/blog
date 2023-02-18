<?php

namespace App\Providers;

use App\Http\Resources\PostResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        PostResource::withoutWrapping();
        Model::shouldBeStrict(! $this->app->isProduction());
        Model::unguard();
    }
}
