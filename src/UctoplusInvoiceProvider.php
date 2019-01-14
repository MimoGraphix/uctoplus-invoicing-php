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
    public function boot( Router $router )
    {
        $configPath = __DIR__ . '/../config/invoiceing.php';
        $this->mergeConfigFrom($configPath, 'invoiceing');
        $this->publishes([$configPath => config_path('invoiceing.php')], 'config');
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