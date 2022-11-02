# OpenAPI\Client\MiscellaneousApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**instancesInstanceKeyMiscProfilePicGet()**](MiscellaneousApi.md#instancesInstanceKeyMiscProfilePicGet) | **GET** /instances/{instance_key}/misc/profile-pic | Get profile pic. |
| [**instancesInstanceKeyMiscUserInfoPost()**](MiscellaneousApi.md#instancesInstanceKeyMiscUserInfoPost) | **POST** /instances/{instance_key}/misc/user-info | Fetches the users info. |


## `instancesInstanceKeyMiscProfilePicGet()`

```php
instancesInstanceKeyMiscProfilePicGet($instance_key, $jid): \OpenAPI\Client\Model\MainAPIResponse
```

Get profile pic.

Returns the profile pic of the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$jid = 'jid_example'; // string | JID

try {
    $result = $apiInstance->instancesInstanceKeyMiscProfilePicGet($instance_key, $jid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->instancesInstanceKeyMiscProfilePicGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **jid** | **string**| JID | |

### Return type

[**\OpenAPI\Client\Model\MainAPIResponse**](../Model/MainAPIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `instancesInstanceKeyMiscUserInfoPost()`

```php
instancesInstanceKeyMiscUserInfoPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Fetches the users info.

Gets the user info for the given user ids. This does not checks if user is registered or not

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MiscellaneousApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsUserInfoPayload(); // \OpenAPI\Client\Model\StructsUserInfoPayload | Data

try {
    $result = $apiInstance->instancesInstanceKeyMiscUserInfoPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscellaneousApi->instancesInstanceKeyMiscUserInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsUserInfoPayload**](../Model/StructsUserInfoPayload.md)| Data | |

### Return type

[**\OpenAPI\Client\Model\MainAPIResponse**](../Model/MainAPIResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
