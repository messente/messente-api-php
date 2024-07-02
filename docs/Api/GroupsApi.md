# Messente\Api\GroupsApi

All URIs are relative to https://api.messente.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createGroup()**](GroupsApi.md#createGroup) | **POST** /phonebook/groups | Creates a new group with the provided name
[**deleteGroup()**](GroupsApi.md#deleteGroup) | **DELETE** /phonebook/groups/{groupId} | Deletes a group
[**fetchGroup()**](GroupsApi.md#fetchGroup) | **GET** /phonebook/groups/{groupId} | Lists a group
[**fetchGroups()**](GroupsApi.md#fetchGroups) | **GET** /phonebook/groups | Returns all groups
[**updateGroup()**](GroupsApi.md#updateGroup) | **PUT** /phonebook/groups/{groupId} | Updates a group with the provided name


## `createGroup()`

```php
createGroup($groupName): \Messente\Api\Model\GroupEnvelope
```

Creates a new group with the provided name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = {"name":"Any group name"}; // \Messente\Api\Model\GroupName

try {
    $result = $apiInstance->createGroup($groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupName** | [**\Messente\Api\Model\GroupName**](../Model/GroupName.md)|  |

### Return type

[**\Messente\Api\Model\GroupEnvelope**](../Model/GroupEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteGroup()`

```php
deleteGroup($groupId)
```

Deletes a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 5792a02a-e5c2-422b-a0a0-0ae65d814663; // string | String in UUID format

try {
    $apiInstance->deleteGroup($groupId);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in UUID format |

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

## `fetchGroup()`

```php
fetchGroup($groupId): \Messente\Api\Model\GroupEnvelope
```

Lists a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 5792a02a-e5c2-422b-a0a0-0ae65d814663; // string | String in UUID format

try {
    $result = $apiInstance->fetchGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->fetchGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in UUID format |

### Return type

[**\Messente\Api\Model\GroupEnvelope**](../Model/GroupEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fetchGroups()`

```php
fetchGroups(): \Messente\Api\Model\GroupListEnvelope
```

Returns all groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fetchGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->fetchGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Messente\Api\Model\GroupListEnvelope**](../Model/GroupListEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateGroup()`

```php
updateGroup($groupId, $groupName): \Messente\Api\Model\GroupEnvelope
```

Updates a group with the provided name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 5792a02a-e5c2-422b-a0a0-0ae65d814663; // string | String in UUID format
$groupName = {"name":"Any group name"}; // \Messente\Api\Model\GroupName

try {
    $result = $apiInstance->updateGroup($groupId, $groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in UUID format |
 **groupName** | [**\Messente\Api\Model\GroupName**](../Model/GroupName.md)|  |

### Return type

[**\Messente\Api\Model\GroupEnvelope**](../Model/GroupEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
