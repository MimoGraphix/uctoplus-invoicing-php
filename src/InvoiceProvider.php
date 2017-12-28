<?php
/**
 * Created by PhpStorm.
 * User: mariocechovic
 * Date: 28/12/2017
 * Time: 13:16
 */

namespace Uctoplus\API;

use Illuminate\Support\ServiceProvider;

class InvoiceProvider extends ServiceProvider
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