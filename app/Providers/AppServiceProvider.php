<?php

namespace Atnic\Inspinia\Providers;

use Atnic\Inspinia\Console\Commands\InspiniaMakeCommand;
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
      $this->publishes([
           __DIR__.'/../../config/inspinia.php' => config_path('inspinia.php'),
       ], 'config');
      $this->loadViewsFrom(__DIR__.'/../../resources/views', 'inspinia');
      $this->publishes([
          __DIR__.'/../../resources/views' => resource_path('views/vendor/inspinia')
      ], 'views');
      if ($this->app->runningInConsole()) {
         $this->commands([
             InspiniaMakeCommand::class,
         ]);
      }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->mergeConfigFrom(
          __DIR__.'/../../config/inspinia.php', 'inspinia'
      );
    }
}
