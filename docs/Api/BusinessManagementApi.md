# WhatsAPI\BusinessManagementApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fetchCatlog()**](BusinessManagementApi.md#fetchCatlog) | **GET** /instances/{instance_key}/business/catalog | Fetches the catlog. |


## `fetchCatlog()`

```php
fetchCatlog($instance_key): \WhatsAPI\models\APIResponse
```

Fetches the catlog.

Gets list of all products registered by you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\BusinessManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->fetchCatlog($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessManagementApi->fetchCatlog: ', $e->getMessage(), PHP_EOL;
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
