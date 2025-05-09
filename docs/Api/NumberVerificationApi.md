# Messente\Api\NumberVerificationApi

All URIs are relative to https://api.messente.com/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**verifyNumber()**](NumberVerificationApi.md#verifyNumber) | **POST** /verify/start | verify number |
| [**verifyPin()**](NumberVerificationApi.md#verifyPin) | **POST** /verify/pin | verified the PIN code entered by the user. |


## `verifyNumber()`

```php
verifyNumber($username, $password, $to, $template, $pinLength, $from, $maxTries, $retryDelay, $validity, $ip, $browser, $cookie): string
```
### URI(s):
- https://api2.messente.com Override base path for number verification API
verify number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiPassword
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('password', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('password', 'Bearer');

// Configure API key authorization: apiUsername
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('username', 'Bearer');


$apiInstance = new Messente\Api\Api\NumberVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The API username
$password = 'password_example'; // string | The API password
$to = 'to_example'; // string | Receiver's phone number with the country code
$template = 'template_example'; // string | Template of the message, including PIN code. Placeholder for PIN code is <PIN>. When not set, default template is used: \"Your Verification PIN code is <PIN>\".
$pinLength = 'pinLength_example'; // string | Length of the PIN code. Minumum 4 digits, maximum 16. Defaults to 4.
$from = 'from_example'; // string | Sender name. When not set, the default Sender name \"Verigator\" is used. This sender ID also needs to be added to your account beforehand.
$maxTries = 'maxTries_example'; // string | Maximum number of times the PIN code is sent in total. Defaults to \"2\" - initial PIN code and one retry. It is discouraged to set this value to \"1\" as only the initial PIN code is sent and retry is disabled.
$retryDelay = 'retryDelay_example'; // string | For how long (in seconds) to wait for next retry, if the correct PIN code has not been entered yet? Defaults to 30 seconds.
$validity = 'validity_example'; // string | For how long (in seconds) is the PIN code valid. Defaults to 5 minutes (300 seconds). Maximum 30 minutes (1800 seconds).
$ip = 'ip_example'; // string | IP address of the client making verification request.
$browser = 'browser_example'; // string | User Agent of the browser. For example \"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\".
$cookie = 'cookie_example'; // string | Unique cookie assigned to this session. If a user tries logging in with the same cookie present, user is automatically logged in and no PIN code verification is needed.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->verifyNumber($username, $password, $to, $template, $pinLength, $from, $maxTries, $retryDelay, $validity, $ip, $browser, $cookie, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberVerificationApi->verifyNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The API username | |
| **password** | **string**| The API password | |
| **to** | **string**| Receiver&#39;s phone number with the country code | |
| **template** | **string**| Template of the message, including PIN code. Placeholder for PIN code is &lt;PIN&gt;. When not set, default template is used: \&quot;Your Verification PIN code is &lt;PIN&gt;\&quot;. | [optional] |
| **pinLength** | **string**| Length of the PIN code. Minumum 4 digits, maximum 16. Defaults to 4. | [optional] |
| **from** | **string**| Sender name. When not set, the default Sender name \&quot;Verigator\&quot; is used. This sender ID also needs to be added to your account beforehand. | [optional] |
| **maxTries** | **string**| Maximum number of times the PIN code is sent in total. Defaults to \&quot;2\&quot; - initial PIN code and one retry. It is discouraged to set this value to \&quot;1\&quot; as only the initial PIN code is sent and retry is disabled. | [optional] |
| **retryDelay** | **string**| For how long (in seconds) to wait for next retry, if the correct PIN code has not been entered yet? Defaults to 30 seconds. | [optional] |
| **validity** | **string**| For how long (in seconds) is the PIN code valid. Defaults to 5 minutes (300 seconds). Maximum 30 minutes (1800 seconds). | [optional] |
| **ip** | **string**| IP address of the client making verification request. | [optional] |
| **browser** | **string**| User Agent of the browser. For example \&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\&quot;. | [optional] |
| **cookie** | **string**| Unique cookie assigned to this session. If a user tries logging in with the same cookie present, user is automatically logged in and no PIN code verification is needed. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[apiPassword](../../README.md#apiPassword), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyPin()`

```php
verifyPin($username, $password, $verificationId, $pin, $ip, $browser, $cookie): string
```
### URI(s):
- https://api2.messente.com Override base path for number verification API
verified the PIN code entered by the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiPassword
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('password', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('password', 'Bearer');

// Configure API key authorization: apiUsername
$config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKey('username', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Messente\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('username', 'Bearer');


$apiInstance = new Messente\Api\Api\NumberVerificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The API username
$password = 'password_example'; // string | The API password
$verificationId = 'verificationId_example'; // string | Verification ID returned by the successful verification request.
$pin = 'pin_example'; // string | PIN code entered by the user.
$ip = 'ip_example'; // string | IP address of the client making verification request. If the IP address is from another country, PIN is required even if the cookies match.
$browser = 'browser_example'; // string | User Agent of the browser. For example \"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\".
$cookie = 'cookie_example'; // string | Unique cookie assigned to this session. If a user tries logging in with the same cookie present, user is automatically logged in and no PIN code verification is needed.

$hostIndex = 0;
$variables = [
];

try {
    $result = $apiInstance->verifyPin($username, $password, $verificationId, $pin, $ip, $browser, $cookie, $hostIndex, $variables);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NumberVerificationApi->verifyPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **username** | **string**| The API username | |
| **password** | **string**| The API password | |
| **verificationId** | **string**| Verification ID returned by the successful verification request. | |
| **pin** | **string**| PIN code entered by the user. | |
| **ip** | **string**| IP address of the client making verification request. If the IP address is from another country, PIN is required even if the cookies match. | [optional] |
| **browser** | **string**| User Agent of the browser. For example \&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36\&quot;. | [optional] |
| **cookie** | **string**| Unique cookie assigned to this session. If a user tries logging in with the same cookie present, user is automatically logged in and no PIN code verification is needed. | [optional] |
| hostIndex | null|int | Host index. Defaults to null. If null, then the library will use $this->hostIndex instead | [optional] |
| variables | array | Associative array of variables to pass to the host. Defaults to empty array. | [optional] |

### Return type

**string**

### Authorization

[apiPassword](../../README.md#apiPassword), [apiUsername](../../README.md#apiUsername)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
