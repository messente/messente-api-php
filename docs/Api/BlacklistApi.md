# Messente\Api\BlacklistApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addToBlacklist()**](BlacklistApi.md#addToBlacklist) | **POST** /phonebook/blacklist | Adds a phone number to the blacklist |
| [**deleteFromBlacklist()**](BlacklistApi.md#deleteFromBlacklist) | **DELETE** /phonebook/blacklist/{phone} | Deletes a phone number from the blacklist |
| [**fetchBlacklist()**](BlacklistApi.md#fetchBlacklist) | **GET** /phonebook/blacklist | Returns all blacklisted phone numbers |
| [**isBlacklisted()**](BlacklistApi.md#isBlacklisted) | **GET** /phonebook/blacklist/{phone} | Checks if a phone number is blacklisted |


## `addToBlacklist()`

```php
addToBlacklist($numberToBlacklist)
```

Adds a phone number to the blacklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$numberToBlacklist = {"phoneNumber":"+37251000000"}; // \Messente\Api\Model\NumberToBlacklist | Phone number to be blacklisted

try {
    $apiInstance->addToBlacklist($numberToBlacklist);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->addToBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **numberToBlacklist** | [**\Messente\Api\Model\NumberToBlacklist**](../Model/NumberToBlacklist.md)| Phone number to be blacklisted | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFromBlacklist()`

```php
deleteFromBlacklist($phone)
```

Deletes a phone number from the blacklist

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = +37251000000; // string | A phone number

try {
    $apiInstance->deleteFromBlacklist($phone);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->deleteFromBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| A phone number | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchBlacklist()`

```php
fetchBlacklist(): \Messente\Api\Model\FetchBlacklistSuccess
```

Returns all blacklisted phone numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fetchBlacklist();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->fetchBlacklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Messente\Api\Model\FetchBlacklistSuccess**](../Model/FetchBlacklistSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `isBlacklisted()`

```php
isBlacklisted($phone)
```

Checks if a phone number is blacklisted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\BlacklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = +37251000000; // string | A phone number

try {
    $apiInstance->isBlacklisted($phone);
} catch (Exception $e) {
    echo 'Exception when calling BlacklistApi->isBlacklisted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phone** | **string**| A phone number | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
