# Messente\Api\ContactsApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactToGroup**](ContactsApi.md#addContactToGroup) | **POST** /phonebook/groups/{groupId}/contacts/{phone} | Adds a contact to a group
[**createContact**](ContactsApi.md#createContact) | **POST** /phonebook/contacts | Creates a new contact
[**deleteContact**](ContactsApi.md#deleteContact) | **DELETE** /phonebook/contacts/{phone} | Deletes a contact
[**fetchContact**](ContactsApi.md#fetchContact) | **GET** /phonebook/contacts/{phone} | Lists a contact
[**fetchContactGroups**](ContactsApi.md#fetchContactGroups) | **GET** /phonebook/contacts/{phone}/groups | Lists groups of a contact
[**fetchContacts**](ContactsApi.md#fetchContacts) | **GET** /phonebook/contacts | Returns all contacts
[**removeContactFromGroup**](ContactsApi.md#removeContactFromGroup) | **DELETE** /phonebook/groups/{groupId}/contacts/{phone} | Removes a contact from a group
[**updateContact**](ContactsApi.md#updateContact) | **PATCH** /phonebook/contacts/{phone} | Updates a contact



## addContactToGroup

> object addContactToGroup($groupId, $phone)

Adds a contact to a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in UUID format
$phone = 'phone_example'; // string | A phone number

try {
    $result = $apiInstance->addContactToGroup($groupId, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->addContactToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in UUID format |
 **phone** | **string**| A phone number |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createContact

> \Messente\Api\Model\ContactEnvelope createContact($contactFields)

Creates a new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contactFields = {"phoneNumber":"+37251000000","email":"anyone@messente.com","firstName":"Any","lastName":"One","company":"Messente","title":"Sir","custom":"Any custom","custom2":"Any custom two","custom3":"Any custom three","custom4":"Any custom four"}; // \Messente\Api\Model\ContactFields | 

try {
    $result = $apiInstance->createContact($contactFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contactFields** | [**\Messente\Api\Model\ContactFields**](../Model/ContactFields.md)|  |

### Return type

[**\Messente\Api\Model\ContactEnvelope**](../Model/ContactEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteContact

> deleteContact($phone)

Deletes a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number

try {
    $apiInstance->deleteContact($phone);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## fetchContact

> \Messente\Api\Model\ContactEnvelope fetchContact($phone)

Lists a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number

try {
    $result = $apiInstance->fetchContact($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |

### Return type

[**\Messente\Api\Model\ContactEnvelope**](../Model/ContactEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## fetchContactGroups

> \Messente\Api\Model\GroupListEnvelope fetchContactGroups($phone)

Lists groups of a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number

try {
    $result = $apiInstance->fetchContactGroups($phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContactGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |

### Return type

[**\Messente\Api\Model\GroupListEnvelope**](../Model/GroupListEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## fetchContacts

> \Messente\Api\Model\ContactListEnvelope fetchContacts($groupIds)

Returns all contacts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupIds = array('groupIds_example'); // string[] | Optional one or many group id strings in UUID format. For example: \"/contacts?groupIds=group_id_one&groupIds=group_id_two\"

try {
    $result = $apiInstance->fetchContacts($groupIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->fetchContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupIds** | [**string[]**](../Model/string.md)| Optional one or many group id strings in UUID format. For example: \&quot;/contacts?groupIds&#x3D;group_id_one&amp;groupIds&#x3D;group_id_two\&quot; | [optional]

### Return type

[**\Messente\Api\Model\ContactListEnvelope**](../Model/ContactListEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeContactFromGroup

> removeContactFromGroup($groupId, $phone)

Removes a contact from a group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 'groupId_example'; // string | String in UUID format
$phone = 'phone_example'; // string | A phone number

try {
    $apiInstance->removeContactFromGroup($groupId, $phone);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->removeContactFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **string**| String in UUID format |
 **phone** | **string**| A phone number |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateContact

> \Messente\Api\Model\ContactEnvelope updateContact($phone, $contactUpdateFields)

Updates a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = Messente\Api\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Messente\Api\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phone = 'phone_example'; // string | A phone number
$contactUpdateFields = new \Messente\Api\Model\ContactUpdateFields(); // \Messente\Api\Model\ContactUpdateFields | 

try {
    $result = $apiInstance->updateContact($phone, $contactUpdateFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone** | **string**| A phone number |
 **contactUpdateFields** | [**\Messente\Api\Model\ContactUpdateFields**](../Model/ContactUpdateFields.md)|  |

### Return type

[**\Messente\Api\Model\ContactEnvelope**](../Model/ContactEnvelope.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

