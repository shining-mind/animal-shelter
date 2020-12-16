<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        if (config('app.debug')) {
            app('db')->listen(function ($query) {
                $bindings = $query->bindings;
                app('log')->debug(
                    Str::replaceArray('?', $bindings, $query->sql),
                    ['query_timing' => $query->time]
                );
            });
        }
    }
}
