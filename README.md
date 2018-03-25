# Účto+ Invoiceing Repository Class

Package for generate Invoice via Účto+ 

## Installation

You can install this package quick and easy with Composer.

Require the package via Composer:

    $ composer require mimographix/uctoplus-invoiceing-php

### Laravel 5 Framework Implementation

The Invoiceing Repository is built to work with the Laravel Framework. The integration is done in seconds.

Open your Laravel config file `config/app.php` and add service provider in the `$providers` array:
    
    'providers' => array(

        ...

        'Uctoplus\API\InvoiceProvider'

    ), 

Publish configuration into `config` folder

    php artisan vendor:publish --provider="Uctoplus\API\InvoiceProvider"
  

## Usage with Laravel

## License

Účto+ Invoiceing Repository is licensed under the [MIT License](http://opensource.org/licenses/MIT).