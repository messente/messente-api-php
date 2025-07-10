# Messente\Api\PricingApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPricelist()**](PricingApi.md#getPricelist) | **GET** /pricelist | Get pricelist for account |
| [**getPrices()**](PricingApi.md#getPrices) | **GET** /prices | Get pricing for a specific country |


## `getPricelist()`

```php
getPricelist($username, $password): string
```
### URI(s):
- https://api2.messente.com Override base path for pricing API
Get pricelist for account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiPassword
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('password', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('password', 'Bearer');

// Configure API key authorization: apiUsername
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('username', 'Bearer');


$apiInstance = new Messente\Api\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The API username
$password = 'password_example'; // string | The API password

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getPricelist($username, $password, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->getPricelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The API username | |
| **password** | **string**| The API password | |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[apiPassword](../../README.md#apiPassword), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPrices()`

```php
getPrices($username, $password, $country, $format): \Messente\Api\Model\Price
```
### URI(s):
- https://api2.messente.com Override base path for pricing API
Get pricing for a specific country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiPassword
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('password', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('password', 'Bearer');

// Configure API key authorization: apiUsername
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('username', 'Bearer');


$apiInstance = new Messente\Api\Api\PricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The API username
$password = 'password_example'; // string | The API password
$country = EE; // string | The country code, for which to get the prices
$format = 'format_example'; // string | The format of the response. Can be either 'json' or 'xml'. If not specified, defaults to 'json'.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->getPrices($username, $password, $country, $format, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingApi->getPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The API username | |
| **password** | **string**| The API password | |
| **country** | **string**| The country code, for which to get the prices | |
| **format** | **string**| The format of the response. Can be either &#39;json&#39; or &#39;xml&#39;. If not specified, defaults to &#39;json&#39;. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

[**\Messente\Api\Model\Price**](../Model/Price.md)

### Authorization

[apiPassword](../../README.md#apiPassword), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/xml`, `text/plain; charset=utf-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
