# MimoGraphix\Uctoplus\InvoiceApi

All URIs are relative to *https://moje.uctoplus.sk/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**invoiceAddPost**](InvoiceApi.md#invoiceAddPost) | **POST** /invoice/add | Create new Invoice.
[**invoiceIdGetGet**](InvoiceApi.md#invoiceIdGetGet) | **GET** /invoice/{id}/get | Returns Invoice.


# **invoiceAddPost**
> \MimoGraphix\Uctoplus\Models\Response invoiceAddPost($invoice)

Create new Invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice = new \MimoGraphix\Uctoplus\Models\Invoice(); // \MimoGraphix\Uctoplus\Models\Invoice | Invoice

try {
    $result = $apiInstance->invoiceAddPost($invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddPost: ', $e->getMessage(), PHP_EOL;
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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceIdGetGet**
> \MimoGraphix\Uctoplus\Models\Response invoiceIdGetGet($id)

Returns Invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\InvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | the user identifier, as userId

try {
    $result = $apiInstance->invoiceIdGetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceIdGetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| the user identifier, as userId |

### Return type

[**\MimoGraphix\Uctoplus\Models\Response**](../Model/Response.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

