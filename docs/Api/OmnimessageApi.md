# Messente\Api\OmnimessageApi

All URIs are relative to https://api.messente.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelScheduledMessage()**](OmnimessageApi.md#cancelScheduledMessage) | **DELETE** /omnimessage/{omnimessageId} | Cancels a scheduled Omnimessage
[**sendOmnimessage()**](OmnimessageApi.md#sendOmnimessage) | **POST** /omnimessage | Sends an Omnimessage


## `cancelScheduledMessage()`

```php
cancelScheduledMessage($omnimessageId): object
```

Cancels a scheduled Omnimessage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\OmnimessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omnimessageId = 'omnimessageId_example'; // string | UUID of the scheduled omnimessage to be cancelled

try {
    $result = $apiInstance->cancelScheduledMessage($omnimessageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->cancelScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessageId** | **string**| UUID of the scheduled omnimessage to be cancelled |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendOmnimessage()`

```php
sendOmnimessage($omnimessage): \Messente\Api\Model\OmniMessageCreateSuccessResponse
```

Sends an Omnimessage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\OmnimessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omnimessage = new \Messente\Api\Model\Omnimessage(); // \Messente\Api\Model\Omnimessage | Omnimessage to be sent

try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessage** | [**\Messente\Api\Model\Omnimessage**](../Model/Omnimessage.md)| Omnimessage to be sent |

### Return type

[**\Messente\Api\Model\OmniMessageCreateSuccessResponse**](../Model/OmniMessageCreateSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
