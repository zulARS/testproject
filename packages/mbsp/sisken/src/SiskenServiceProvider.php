<?php

namespace Mbsp\Sisken;

use Illuminate\Support\ServiceProvider;

class SiskenServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $cPath = __DIR__.'/../config/siskenconfig.php';
        $this->mergeConfigFrom($cPath, 'siskenconfig');

        $this->app->bind('siskenconfig', function($app){
            return new Api($app);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $cPath = __DIR__.'/../config/siskenconfig.php';
        $this->publishes([
            $cPath=>config_path('siskenconfig.php')
        ],'config');
    }
}
