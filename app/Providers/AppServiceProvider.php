<?php

namespace Atnic\Inspinia\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->loadViewsFrom(__DIR__.'/../../resources/views', 'inspinia');
      $this->publishes([
          __DIR__.'/../../resources/views' => resource_path('views/vendor/inspinia')
      ], 'views');
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
