# Messente\Api\StatisticsApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createStatisticsReport()**](StatisticsApi.md#createStatisticsReport) | **POST** /statistics/reports | Requests statistics reports for each country |


## `createStatisticsReport()`

```php
createStatisticsReport($statisticsReportSettings): \Messente\Api\Model\StatisticsReportSuccess
```

Requests statistics reports for each country

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\StatisticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statisticsReportSettings = {"start_date":"2017-01-01","end_date":"2019-06-20","message_types":["sms"]}; // \Messente\Api\Model\StatisticsReportSettings | Settings for statistics report

try {
    $result = $apiInstance->createStatisticsReport($statisticsReportSettings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticsApi->createStatisticsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statisticsReportSettings** | [**\Messente\Api\Model\StatisticsReportSettings**](../Model/StatisticsReportSettings.md)| Settings for statistics report | |

### Return type

[**\Messente\Api\Model\StatisticsReportSuccess**](../Model/StatisticsReportSuccess.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
