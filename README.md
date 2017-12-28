# Účto+ Invoiceing Repository Class

Intervention Validation is an extension library for Laravel's own validation system. The package adds rules to validate data like IBAN, BIC, ISBN, creditcard numbers and more.

## Installation

You can install this package quick and easy with Composer.

Require the package via Composer:

    $ composer require uctoplus/uctoplus-invoiceing-php

### Laravel 5 Framework Implementation

The Invoiceing Repository is built to work with the Laravel Framework. The integration is done in seconds.

Open your Laravel config file `config/app.php` and add service provider in the `$providers` array:
    
    'providers' => array(

        ...

        'Uctoplus\API\InvoiceProvider'

    ),
  

## Usage with Laravel

## License

Účto+ Invoiceing Repository is licensed under the [MIT License](http://opensource.org/licenses/MIT).