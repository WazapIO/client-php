# WhatsAPI\InstanceApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeWebhookUrl()**](InstanceApi.md#changeWebhookUrl) | **PUT** /instances/{instance_key}/webhook | Change Webhook url. |
| [**createInstance()**](InstanceApi.md#createInstance) | **GET** /instances/create | Creates a new instance key. |
| [**deleteInstance()**](InstanceApi.md#deleteInstance) | **DELETE** /instances/{instance_key}/delete | Delete Instance. |
| [**getContacts()**](InstanceApi.md#getContacts) | **GET** /instances/{instance_key}/contacts | Get contacts. |
| [**getInstance()**](InstanceApi.md#getInstance) | **GET** /instances/{instance_key}/ | Get Instance. |
| [**getQrCode()**](InstanceApi.md#getQrCode) | **GET** /instances/{instance_key}/qrcode | Get QrCode. |
| [**listInstances()**](InstanceApi.md#listInstances) | **GET** /instances/list | Get all instances. |
| [**logoutInstance()**](InstanceApi.md#logoutInstance) | **DELETE** /instances/{instance_key}/logout | Logout Instance. |


## `changeWebhookUrl()`

```php
changeWebhookUrl($instance_key, $data): \WhatsAPI\models\APIResponse
```

Change Webhook url.

Changes the webhook url of an instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\WebhookPayload(); // \WhatsAPI\models\WebhookPayload | Message data

try {
    $result = $apiInstance->changeWebhookUrl($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->changeWebhookUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\WebhookPayload**](../Model/WebhookPayload.md)| Message data | |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInstance()`

```php
createInstance($instance_key): \WhatsAPI\models\APIResponse
```

Creates a new instance key.

This endpoint is used to create a new WhatsApp Web instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Insert instance key if you want to provide custom key

try {
    $result = $apiInstance->createInstance($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->createInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Insert instance key if you want to provide custom key | [optional] |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInstance()`

```php
deleteInstance($instance_key): \WhatsAPI\models\APIResponse
```

Delete Instance.

Deletes the instance with the provided key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->deleteInstance($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->deleteInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContacts()`

```php
getContacts($instance_key): \WhatsAPI\models\APIResponse
```

Get contacts.

Fetches the list of contacts in the instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->getContacts($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstance()`

```php
getInstance($instance_key): \WhatsAPI\models\APIResponse
```

Get Instance.

Returns the instance data of single instance with connection status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->getInstance($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQrCode()`

```php
getQrCode($instance_key): \WhatsAPI\models\APIResponse
```

Get QrCode.

Returns the qrcode in the base64 format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->getQrCode($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->getQrCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listInstances()`

```php
listInstances(): \WhatsAPI\models\APIResponse
```

Get all instances.

Fetches the list of all Instances with login status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listInstances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->listInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutInstance()`

```php
logoutInstance($instance_key): \WhatsAPI\models\APIResponse
```

Logout Instance.

Logouts of the instance with the provided key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\InstanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->logoutInstance($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstanceApi->logoutInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |

### Return type

[**\WhatsAPI\models\APIResponse**](../Model/APIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
