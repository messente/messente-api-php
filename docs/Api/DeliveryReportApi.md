# Messente\Api\DeliveryReportApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveDeliveryReport**](DeliveryReportApi.md#retrieveDeliveryReport) | **GET** /omnimessage/{omnimessageId}/status | Retrieves the delivery report for the Omnimessage.



## retrieveDeliveryReport

> \Messente\Api\Model\DeliveryReportResponse retrieveDeliveryReport($omnimessageId)

Retrieves the delivery report for the Omnimessage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\DeliveryReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omnimessageId = 'omnimessageId_example'; // string | UUID of the Omnimessage to for which the delivery report is to be retrieved

try {
    $result = $apiInstance->retrieveDeliveryReport($omnimessageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportApi->retrieveDeliveryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessageId** | [**string**](../Model/.md)| UUID of the Omnimessage to for which the delivery report is to be retrieved |

### Return type

[**\Messente\Api\Model\DeliveryReportResponse**](../Model/DeliveryReportResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

