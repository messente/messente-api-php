# Messente\Api\AccountBalanceApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountBalance()**](AccountBalanceApi.md#getAccountBalance) | **GET** /get_balance | Get account balance |
| [**getAccountBalanceUsingPost()**](AccountBalanceApi.md#getAccountBalanceUsingPost) | **POST** /get_balance | Get account balance |


## `getAccountBalance()`

```php
getAccountBalance($username, $password): string
```
### URI(s):
- https://api2.messente.com Override base path for account balance API
Get account balance

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


$apiInstance = new Messente\Api\Api\AccountBalanceApi(
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
    $result = $apiInstance->getAccountBalance($username, $password, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBalanceApi->getAccountBalance: ', $e->getMessage(), PHP_EOL;
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

## `getAccountBalanceUsingPost()`

```php
getAccountBalanceUsingPost($username, $password): string
```
### URI(s):
- https://api2.messente.com Override base path for account balance API
Get account balance

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


$apiInstance = new Messente\Api\Api\AccountBalanceApi(
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
    $result = $apiInstance->getAccountBalanceUsingPost($username, $password, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBalanceApi->getAccountBalanceUsingPost: ', $e->getMessage(), PHP_EOL;
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
