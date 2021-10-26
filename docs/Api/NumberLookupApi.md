# Messente\Api\NumberLookupApi

All URIs are relative to https://api.messente.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchInfo()**](NumberLookupApi.md#fetchInfo) | **POST** /hlr/sync | Requests info about phone numbers


## `fetchInfo()`

```php
fetchInfo($numbersToInvestigate): \Messente\Api\Model\SyncNumberLookupSuccess
```

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
$numbersToInvestigate = {"numbers":["+37251000000","+37251000001"]}; // \Messente\Api\Model\NumbersToInvestigate | Numbers for lookup

try {
    $result = $apiInstance->fetchInfo($numbersToInvestigate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberLookupApi->fetchInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **numbersToInvestigate** | [**\Messente\Api\Model\NumbersToInvestigate**](../Model/NumbersToInvestigate.md)| Numbers for lookup |

### Return type

[**\Messente\Api\Model\SyncNumberLookupSuccess**](../Model/SyncNumberLookupSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
