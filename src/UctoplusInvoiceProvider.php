<?php

namespace Uctoplus\API;

use Illuminate\Support\ServiceProvider;

/**
 * Class UctoplusInvoiceProvider
 *
 * @author MimoGraphix <mimographix@gmail.com>
 * @copyright EpicFail | Studio
 * @package Uctoplus\API
 */
class UctoplusInvoiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot( )
    {
		$this->publishes([
            __DIR__ . '/../config'=> base_path('config'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}