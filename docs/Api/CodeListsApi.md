# MimoGraphix\Uctoplus\CodeListsApi

All URIs are relative to *https://moje.uctoplus.sk/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCountries**](CodeListsApi.md#getCountries) | **GET** /dial/global/countries | getCountries
[**getCurrencies**](CodeListsApi.md#getCurrencies) | **GET** /dial/global/currencies | getCurrencies
[**getDeliveryTypes**](CodeListsApi.md#getDeliveryTypes) | **GET** /dial/delivery-types | getDeliveryTypes
[**getInvoiceCounters**](CodeListsApi.md#getInvoiceCounters) | **GET** /dial/invoice-type/{invoiceType}/counters | getInvoiceCounters
[**getLogos**](CodeListsApi.md#getLogos) | **GET** /dial/logos | getLogos
[**getPaymentTypes**](CodeListsApi.md#getPaymentTypes) | **GET** /dial/payment-types | getPaymentTypes
[**getSignatures**](CodeListsApi.md#getSignatures) | **GET** /dial/signatures | getSignatures
[**getTemplates**](CodeListsApi.md#getTemplates) | **GET** /dial/templates | getTemplates



## getCountries

> \MimoGraphix\Uctoplus\Models\Country[] getCountries()

getCountries

Return all Countries in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\Country[]**](../Model/Country.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCurrencies

> \MimoGraphix\Uctoplus\Models\Currency[] getCurrencies()

getCurrencies

Return all Currencies in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\Currency[]**](../Model/Currency.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeliveryTypes

> \MimoGraphix\Uctoplus\Models\DeliveryType[] getDeliveryTypes()

getDeliveryTypes

Return all DeliveryTypes in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDeliveryTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getDeliveryTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\DeliveryType[]**](../Model/DeliveryType.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getInvoiceCounters

> \MimoGraphix\Uctoplus\Models\InvoiceCounter[] getInvoiceCounters($invoice_type)

getInvoiceCounters

Return all InvoiceCounters in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_type = 'invoice_type_example'; // string | * `INVOICE` - Invocie * `PROFORMA_INVOICE` - Proforma Invoice * `DODACI_LIST` - Dodací list * `VAT_PROOF` - VAT Proof * `PRICE_QUOTATION` - Price Quotation

try {
    $result = $apiInstance->getInvoiceCounters($invoice_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getInvoiceCounters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_type** | **string**| * &#x60;INVOICE&#x60; - Invocie * &#x60;PROFORMA_INVOICE&#x60; - Proforma Invoice * &#x60;DODACI_LIST&#x60; - Dodací list * &#x60;VAT_PROOF&#x60; - VAT Proof * &#x60;PRICE_QUOTATION&#x60; - Price Quotation |

### Return type

[**\MimoGraphix\Uctoplus\Models\InvoiceCounter[]**](../Model/InvoiceCounter.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLogos

> \MimoGraphix\Uctoplus\Models\Logo[] getLogos()

getLogos

Return all Logos in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLogos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getLogos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\Logo[]**](../Model/Logo.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentTypes

> \MimoGraphix\Uctoplus\Models\PaymentType[] getPaymentTypes()

getPaymentTypes

Return all PaymentTypes in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPaymentTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getPaymentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\PaymentType[]**](../Model/PaymentType.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSignatures

> \MimoGraphix\Uctoplus\Models\Signature[] getSignatures()

getSignatures

Return all Signatures in Company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSignatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getSignatures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\Signature[]**](../Model/Signature.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTemplates

> \MimoGraphix\Uctoplus\Models\InvoiceTemplate[] getTemplates()

getTemplates

Return all Invoice Templates for specific InvoiceType.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');


$apiInstance = new MimoGraphix\Uctoplus\Api\CodeListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CodeListsApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\InvoiceTemplate[]**](../Model/InvoiceTemplate.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

