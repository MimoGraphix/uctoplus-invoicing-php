# MimoGraphix\Uctoplus\InvoiceApi

All URIs are relative to *https://moje.uctoplus.sk/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoice**](InvoiceApi.md#addInvoice) | **POST** /invoice/add | addInvoice
[**addPaymentToInvoice**](InvoiceApi.md#addPaymentToInvoice) | **POST** /invoice/{id}/pay | addPaymentToInvoice
[**getInvoice**](InvoiceApi.md#getInvoice) | **GET** /invoice/{id}/get | getInvoice


# **addInvoice**
> \MimoGraphix\Uctoplus\Models\Response addInvoice($invoice)

addInvoice

Create new Invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \MimoGraphix\Uctoplus\Models\Invoice(); // \MimoGraphix\Uctoplus\Models\Invoice | Invoice

try {
    $result = $apiInstance->addInvoice($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->addInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice** | [**\MimoGraphix\Uctoplus\Models\Invoice**](../Model/Invoice.md)| Invoice |

### Return type

[**\MimoGraphix\Uctoplus\Models\Response**](../Model/Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPaymentToInvoice**
> \MimoGraphix\Uctoplus\Models\Response addPaymentToInvoice($id, $payment)

addPaymentToInvoice

Add payment to invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Invoice identifier
$payment = new \MimoGraphix\Uctoplus\Models\Payment(); // \MimoGraphix\Uctoplus\Models\Payment | Payment

try {
    $result = $apiInstance->addPaymentToInvoice($id, $payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->addPaymentToInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Invoice identifier |
 **payment** | [**\MimoGraphix\Uctoplus\Models\Payment**](../Model/Payment.md)| Payment |

### Return type

[**\MimoGraphix\Uctoplus\Models\Response**](../Model/Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \MimoGraphix\Uctoplus\Models\Response getInvoice($id)

getInvoice

Returns Invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Invoice identifier

try {
    $result = $apiInstance->getInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Invoice identifier |

### Return type

[**\MimoGraphix\Uctoplus\Models\Response**](../Model/Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

