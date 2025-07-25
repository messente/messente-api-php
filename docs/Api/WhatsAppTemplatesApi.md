# Messente\Api\WhatsAppTemplatesApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWhatsappTemplate()**](WhatsAppTemplatesApi.md#createWhatsappTemplate) | **POST** /whatsapp/wabas/{wabaId}/templates | Creates a WhatsApp template |
| [**deleteWhatsappTemplate()**](WhatsAppTemplatesApi.md#deleteWhatsappTemplate) | **DELETE** /whatsapp/wabas/{wabaId}/templates | Deletes a WhatsApp template |
| [**getWhatsappTemplateById()**](WhatsAppTemplatesApi.md#getWhatsappTemplateById) | **GET** /whatsapp/wabas/{wabaId}/templates/{templateId} | Requests a WhatsApp template with the given ID |
| [**listWhatsappTemplates()**](WhatsAppTemplatesApi.md#listWhatsappTemplates) | **GET** /whatsapp/wabas/{wabaId}/templates | Requests a list of WhatsApp templates |
| [**updateWhatsappTemplate()**](WhatsAppTemplatesApi.md#updateWhatsappTemplate) | **PUT** /whatsapp/wabas/{wabaId}/templates/{templateId} | Updates a WhatsApp template |


## `createWhatsappTemplate()`

```php
createWhatsappTemplate($wabaId, $whatsappCreateTemplateRequest): \Messente\Api\Model\WhatsappCreateTemplateResponse
```

Creates a WhatsApp template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\WhatsAppTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wabaId = 'wabaId_example'; // string | The ID of the WABA
$whatsappCreateTemplateRequest = new \Messente\Api\Model\WhatsappCreateTemplateRequest(); // \Messente\Api\Model\WhatsappCreateTemplateRequest | The WhatsApp template to create

try {
    $result = $apiInstance->createWhatsappTemplate($wabaId, $whatsappCreateTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppTemplatesApi->createWhatsappTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wabaId** | **string**| The ID of the WABA | |
| **whatsappCreateTemplateRequest** | [**\Messente\Api\Model\WhatsappCreateTemplateRequest**](../Model/WhatsappCreateTemplateRequest.md)| The WhatsApp template to create | |

### Return type

[**\Messente\Api\Model\WhatsappCreateTemplateResponse**](../Model/WhatsappCreateTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWhatsappTemplate()`

```php
deleteWhatsappTemplate($wabaId, $name, $hsmId): object
```

Deletes a WhatsApp template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\WhatsAppTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wabaId = 'wabaId_example'; // string | The ID of the WABA
$name = template_name; // string | The name of the template to delete
$hsmId = 1; // string | The ID of the template to delete

try {
    $result = $apiInstance->deleteWhatsappTemplate($wabaId, $name, $hsmId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppTemplatesApi->deleteWhatsappTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wabaId** | **string**| The ID of the WABA | |
| **name** | **string**| The name of the template to delete | |
| **hsmId** | **string**| The ID of the template to delete | [optional] |

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

## `getWhatsappTemplateById()`

```php
getWhatsappTemplateById($wabaId, $templateId): \Messente\Api\Model\WhatsappTemplateResponse
```

Requests a WhatsApp template with the given ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\WhatsAppTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wabaId = 'wabaId_example'; // string | The ID of the WABA
$templateId = 'templateId_example'; // string | The ID of the template to retrieve

try {
    $result = $apiInstance->getWhatsappTemplateById($wabaId, $templateId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppTemplatesApi->getWhatsappTemplateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wabaId** | **string**| The ID of the WABA | |
| **templateId** | **string**| The ID of the template to retrieve | |

### Return type

[**\Messente\Api\Model\WhatsappTemplateResponse**](../Model/WhatsappTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWhatsappTemplates()`

```php
listWhatsappTemplates($wabaId, $limit, $before, $after, $category, $content, $language, $name, $status): \Messente\Api\Model\WhatsappListTemplatesResponse
```

Requests a list of WhatsApp templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\WhatsAppTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wabaId = 'wabaId_example'; // string | The ID of the WABA
$limit = 10; // int | The number of templates to return in the list. Although the max size is 500, for large datasets it is recommended to use a lower limit and instead use pagination to avoid potential timeouts. Defaults to 25.
$before = MAZDZD; // string | A cursor point used for a paginated request to indicate the template to paginate backwards from.
$after = MjQZD; // string | A cursor point used for a paginated request to indicate the template to paginate forwards from.
$category = new \Messente\Api\Model\\Messente\Api\Model\WhatsappTemplateCategory(); // \Messente\Api\Model\WhatsappTemplateCategory | A filter for returning only templates matching a specific category.
$content = special offer; // string | A search filter representing the content of a template. Only matching templates will be returned in the list.
$language = en; // string | A filter  for returning only templates matching a specific language code. A list of supported languages is available in the [WhatsApp documentation](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates/)
$name = Sample Template; // string | A search filter representing the name, either full or partial, of a template. Only matching templates will be returned in the list.
$status = new \Messente\Api\Model\\Messente\Api\Model\WhatsappTemplateStatus(); // \Messente\Api\Model\WhatsappTemplateStatus | A filter for returning only templates matching a specific status.

try {
    $result = $apiInstance->listWhatsappTemplates($wabaId, $limit, $before, $after, $category, $content, $language, $name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppTemplatesApi->listWhatsappTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wabaId** | **string**| The ID of the WABA | |
| **limit** | **int**| The number of templates to return in the list. Although the max size is 500, for large datasets it is recommended to use a lower limit and instead use pagination to avoid potential timeouts. Defaults to 25. | [optional] [default to 25] |
| **before** | **string**| A cursor point used for a paginated request to indicate the template to paginate backwards from. | [optional] |
| **after** | **string**| A cursor point used for a paginated request to indicate the template to paginate forwards from. | [optional] |
| **category** | [**\Messente\Api\Model\WhatsappTemplateCategory**](../Model/.md)| A filter for returning only templates matching a specific category. | [optional] |
| **content** | **string**| A search filter representing the content of a template. Only matching templates will be returned in the list. | [optional] |
| **language** | **string**| A filter  for returning only templates matching a specific language code. A list of supported languages is available in the [WhatsApp documentation](https://developers.facebook.com/docs/whatsapp/api/messages/message-templates/) | [optional] |
| **name** | **string**| A search filter representing the name, either full or partial, of a template. Only matching templates will be returned in the list. | [optional] |
| **status** | [**\Messente\Api\Model\WhatsappTemplateStatus**](../Model/.md)| A filter for returning only templates matching a specific status. | [optional] |

### Return type

[**\Messente\Api\Model\WhatsappListTemplatesResponse**](../Model/WhatsappListTemplatesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWhatsappTemplate()`

```php
updateWhatsappTemplate($wabaId, $templateId, $whatsappUpdateTemplateRequest): object
```

Updates a WhatsApp template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\WhatsAppTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wabaId = 'wabaId_example'; // string | The ID of the WABA
$templateId = 'templateId_example'; // string | The ID of the template to update
$whatsappUpdateTemplateRequest = new \Messente\Api\Model\WhatsappUpdateTemplateRequest(); // \Messente\Api\Model\WhatsappUpdateTemplateRequest | The template data to be updated

try {
    $result = $apiInstance->updateWhatsappTemplate($wabaId, $templateId, $whatsappUpdateTemplateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppTemplatesApi->updateWhatsappTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wabaId** | **string**| The ID of the WABA | |
| **templateId** | **string**| The ID of the template to update | |
| **whatsappUpdateTemplateRequest** | [**\Messente\Api\Model\WhatsappUpdateTemplateRequest**](../Model/WhatsappUpdateTemplateRequest.md)| The template data to be updated | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
