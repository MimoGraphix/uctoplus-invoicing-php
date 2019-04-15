# MimoGraphix\Uctoplus\AddressListApi

All URIs are relative to *https://moje.uctoplus.sk/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddress**](AddressListApi.md#addAddress) | **POST** /address-list/add | addAddress
[**getAddressById**](AddressListApi.md#getAddressById) | **GET** /address-list/{id}/get | getAddressById.
[**getAddressByInternalId**](AddressListApi.md#getAddressByInternalId) | **GET** /address-list/{id}/get-by-internal-id | getAddressByInternalId.
[**getAddressList**](AddressListApi.md#getAddressList) | **GET** /address-list | getAddressList


# **addAddress**
> \MimoGraphix\Uctoplus\Models\Response addAddress($address)

addAddress

Create new Contact in Address book.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address = new \MimoGraphix\Uctoplus\Models\Address(); // \MimoGraphix\Uctoplus\Models\Address | Address

try {
    $result = $apiInstance->addAddress($address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | [**\MimoGraphix\Uctoplus\Models\Address**](../Model/Address.md)| Address |

### Return type

[**\MimoGraphix\Uctoplus\Models\Response**](../Model/Response.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressById**
> \MimoGraphix\Uctoplus\Models\Address getAddressById($id)

getAddressById.

Returns Address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Address identifier

try {
    $result = $apiInstance->getAddressById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->getAddressById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Address identifier |

### Return type

[**\MimoGraphix\Uctoplus\Models\Address**](../Model/Address.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressByInternalId**
> \MimoGraphix\Uctoplus\Models\Address getAddressByInternalId($id)

getAddressByInternalId.

Returns Address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Get Address by Internal Id

try {
    $result = $apiInstance->getAddressByInternalId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->getAddressByInternalId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Get Address by Internal Id |

### Return type

[**\MimoGraphix\Uctoplus\Models\Address**](../Model/Address.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddressList**
> \MimoGraphix\Uctoplus\Models\Address[] getAddressList()

getAddressList

Return all Addresses from Company Address List.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MimoGraphix\Uctoplus\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$apiInstance = new MimoGraphix\Uctoplus\Api\AddressListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAddressList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressListApi->getAddressList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MimoGraphix\Uctoplus\Models\Address[]**](../Model/Address.md)

### Authorization

[api-key](../../README.md#api-key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

