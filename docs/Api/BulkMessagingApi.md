# Messente\Api\BulkMessagingApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendBulkOmnimessage()**](BulkMessagingApi.md#sendBulkOmnimessage) | **POST** /omnimessages | Sends a bulk Omnimessage |


## `sendBulkOmnimessage()`

```php
sendBulkOmnimessage($bulkOmnimessage): \Messente\Api\Model\BulkOmniMessageCreateSuccessResponse
```

Sends a bulk Omnimessage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\BulkMessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkOmnimessage = new \Messente\Api\Model\BulkOmnimessage(); // \Messente\Api\Model\BulkOmnimessage | Bulk Omnimessage to be sent

try {
    $result = $apiInstance->sendBulkOmnimessage($bulkOmnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkMessagingApi->sendBulkOmnimessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkOmnimessage** | [**\Messente\Api\Model\BulkOmnimessage**](../Model/BulkOmnimessage.md)| Bulk Omnimessage to be sent | |

### Return type

[**\Messente\Api\Model\BulkOmniMessageCreateSuccessResponse**](../Model/BulkOmniMessageCreateSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
