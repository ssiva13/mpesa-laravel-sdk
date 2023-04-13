<?php

namespace Ssiva\MpesaLaravelSdk;

use Illuminate\Support\ServiceProvider;
use Ssiva\MpesaDaraja\Mpesa;

/**
 * Date 13/04/2023
 *
 * @author   Simon Siva <simonsiva13@gmail.com>
 */
class MpesaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/config/mpesa.php' => config_path('mpesa.php')
        ], 'mpesa_config');
    }
    
    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->app->bind('Ssiva\MpesaDaraja\Mpesa', function ($app) {
            $config = $app['config']->get('mpesa');
            $config = $config ?: [] ;
            return new Mpesa($config);
        });
    }
}