# Messente\Api\NumberLookupApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**syncNumberLookup**](NumberLookupApi.md#syncNumberLookup) | **POST** /hlr/sync | Requests info about phone numbers



## syncNumberLookup

> \Messente\Api\Model\SyncNumberLookupSuccess syncNumberLookup($syncNumberLookup)

Requests info about phone numbers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\NumberLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$syncNumberLookup = {"numbers":["+37251000000","+37251000001"]}; // \Messente\Api\Model\SyncNumberLookup | Numbers for lookup

try {
    $result = $apiInstance->syncNumberLookup($syncNumberLookup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberLookupApi->syncNumberLookup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **syncNumberLookup** | [**\Messente\Api\Model\SyncNumberLookup**](../Model/SyncNumberLookup.md)| Numbers for lookup |

### Return type

[**\Messente\Api\Model\SyncNumberLookupSuccess**](../Model/SyncNumberLookupSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

