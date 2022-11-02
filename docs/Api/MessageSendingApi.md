# OpenAPI\Client\MessageSendingApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**instancesInstanceKeyBusinessCatalogGet()**](MessageSendingApi.md#instancesInstanceKeyBusinessCatalogGet) | **GET** /instances/{instance_key}/business/catalog | Fetches the catlog. |
| [**instancesInstanceKeySendAudioPost()**](MessageSendingApi.md#instancesInstanceKeySendAudioPost) | **POST** /instances/{instance_key}/send/audio | Send raw audio. |
| [**instancesInstanceKeySendButtonMediaPost()**](MessageSendingApi.md#instancesInstanceKeySendButtonMediaPost) | **POST** /instances/{instance_key}/send/button-media | Send a button message with a media header. |
| [**instancesInstanceKeySendButtonsPost()**](MessageSendingApi.md#instancesInstanceKeySendButtonsPost) | **POST** /instances/{instance_key}/send/buttons | Send a button message. |
| [**instancesInstanceKeySendContactPost()**](MessageSendingApi.md#instancesInstanceKeySendContactPost) | **POST** /instances/{instance_key}/send/contact | Send a contact message. |
| [**instancesInstanceKeySendDocumentPost()**](MessageSendingApi.md#instancesInstanceKeySendDocumentPost) | **POST** /instances/{instance_key}/send/document | Send raw document. |
| [**instancesInstanceKeySendImagePost()**](MessageSendingApi.md#instancesInstanceKeySendImagePost) | **POST** /instances/{instance_key}/send/image | Send raw image. |
| [**instancesInstanceKeySendListPost()**](MessageSendingApi.md#instancesInstanceKeySendListPost) | **POST** /instances/{instance_key}/send/list | Send a List message. |
| [**instancesInstanceKeySendLocationPost()**](MessageSendingApi.md#instancesInstanceKeySendLocationPost) | **POST** /instances/{instance_key}/send/location | Send a location message. |
| [**instancesInstanceKeySendMediaPost()**](MessageSendingApi.md#instancesInstanceKeySendMediaPost) | **POST** /instances/{instance_key}/send/media | Send a media message. |
| [**instancesInstanceKeySendPollPost()**](MessageSendingApi.md#instancesInstanceKeySendPollPost) | **POST** /instances/{instance_key}/send/poll | Send a Poll message with media. |
| [**instancesInstanceKeySendTemplateMediaPost()**](MessageSendingApi.md#instancesInstanceKeySendTemplateMediaPost) | **POST** /instances/{instance_key}/send/template-media | Send a template message with media. |
| [**instancesInstanceKeySendTemplatePost()**](MessageSendingApi.md#instancesInstanceKeySendTemplatePost) | **POST** /instances/{instance_key}/send/template | Send a template message. |
| [**instancesInstanceKeySendTextPost()**](MessageSendingApi.md#instancesInstanceKeySendTextPost) | **POST** /instances/{instance_key}/send/text | Send a text message. |
| [**instancesInstanceKeySendUploadPost()**](MessageSendingApi.md#instancesInstanceKeySendUploadPost) | **POST** /instances/{instance_key}/send/upload | Upload media. |
| [**instancesInstanceKeySendVideoPost()**](MessageSendingApi.md#instancesInstanceKeySendVideoPost) | **POST** /instances/{instance_key}/send/video | Send raw video. |


## `instancesInstanceKeyBusinessCatalogGet()`

```php
instancesInstanceKeyBusinessCatalogGet($instance_key): \OpenAPI\Client\Model\MainAPIResponse
```

Fetches the catlog.

Gets list of all products registered by you.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->instancesInstanceKeyBusinessCatalogGet($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeyBusinessCatalogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |

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

## `instancesInstanceKeySendAudioPost()`

```php
instancesInstanceKeySendAudioPost($instance_key, $to, $instances_instance_key_send_audio_post_request, $caption): \OpenAPI\Client\Model\MainAPIResponse
```

Send raw audio.

Sends a audio message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$instances_instance_key_send_audio_post_request = new \OpenAPI\Client\Model\InstancesInstanceKeySendAudioPostRequest(); // \OpenAPI\Client\Model\InstancesInstanceKeySendAudioPostRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->instancesInstanceKeySendAudioPost($instance_key, $to, $instances_instance_key_send_audio_post_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendAudioPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **instances_instance_key_send_audio_post_request** | [**\OpenAPI\Client\Model\InstancesInstanceKeySendAudioPostRequest**](../Model/InstancesInstanceKeySendAudioPostRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `instancesInstanceKeySendButtonMediaPost()`

```php
instancesInstanceKeySendButtonMediaPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a button message with a media header.

Sends an interactive button message to the given user. This message also has media header with it. Make sure that all the button ids are unique

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsButtonMessageWithMediaPayload(); // \OpenAPI\Client\Model\StructsButtonMessageWithMediaPayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendButtonMediaPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendButtonMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsButtonMessageWithMediaPayload**](../Model/StructsButtonMessageWithMediaPayload.md)| Message data | |

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

## `instancesInstanceKeySendButtonsPost()`

```php
instancesInstanceKeySendButtonsPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a button message.

Sends an interactive button message to the given user. Make sure that all the button ids are unique

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsButtonMessagePayload(); // \OpenAPI\Client\Model\StructsButtonMessagePayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendButtonsPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendButtonsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsButtonMessagePayload**](../Model/StructsButtonMessagePayload.md)| Message data | |

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

## `instancesInstanceKeySendContactPost()`

```php
instancesInstanceKeySendContactPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a contact message.

Sends a contact (vcard) message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsContactMessagePayload(); // \OpenAPI\Client\Model\StructsContactMessagePayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendContactPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendContactPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsContactMessagePayload**](../Model/StructsContactMessagePayload.md)| Message data | |

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

## `instancesInstanceKeySendDocumentPost()`

```php
instancesInstanceKeySendDocumentPost($instance_key, $to, $instances_instance_key_send_document_post_request, $caption): \OpenAPI\Client\Model\MainAPIResponse
```

Send raw document.

Sends a document message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$instances_instance_key_send_document_post_request = new \OpenAPI\Client\Model\InstancesInstanceKeySendDocumentPostRequest(); // \OpenAPI\Client\Model\InstancesInstanceKeySendDocumentPostRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->instancesInstanceKeySendDocumentPost($instance_key, $to, $instances_instance_key_send_document_post_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendDocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **instances_instance_key_send_document_post_request** | [**\OpenAPI\Client\Model\InstancesInstanceKeySendDocumentPostRequest**](../Model/InstancesInstanceKeySendDocumentPostRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `instancesInstanceKeySendImagePost()`

```php
instancesInstanceKeySendImagePost($instance_key, $to, $instances_instance_key_send_image_post_request, $caption): \OpenAPI\Client\Model\MainAPIResponse
```

Send raw image.

Sends a image message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$instances_instance_key_send_image_post_request = new \OpenAPI\Client\Model\InstancesInstanceKeySendImagePostRequest(); // \OpenAPI\Client\Model\InstancesInstanceKeySendImagePostRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->instancesInstanceKeySendImagePost($instance_key, $to, $instances_instance_key_send_image_post_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendImagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **instances_instance_key_send_image_post_request** | [**\OpenAPI\Client\Model\InstancesInstanceKeySendImagePostRequest**](../Model/InstancesInstanceKeySendImagePostRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `instancesInstanceKeySendListPost()`

```php
instancesInstanceKeySendListPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a List message.

Sends an interactive List message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsListMessagePayload(); // \OpenAPI\Client\Model\StructsListMessagePayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendListPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsListMessagePayload**](../Model/StructsListMessagePayload.md)| Message data | |

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

## `instancesInstanceKeySendLocationPost()`

```php
instancesInstanceKeySendLocationPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a location message.

Sends a location message to the given user. This is static location and does not update Note: The Address and Url fields are optional

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsLocationMessagePayload(); // \OpenAPI\Client\Model\StructsLocationMessagePayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendLocationPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendLocationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsLocationMessagePayload**](../Model/StructsLocationMessagePayload.md)| Message data | |

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

## `instancesInstanceKeySendMediaPost()`

```php
instancesInstanceKeySendMediaPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a media message.

Sends a media message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsSendMediaPayload(); // \OpenAPI\Client\Model\StructsSendMediaPayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendMediaPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsSendMediaPayload**](../Model/StructsSendMediaPayload.md)| Message data | |

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

## `instancesInstanceKeySendPollPost()`

```php
instancesInstanceKeySendPollPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a Poll message with media.

Sends an interactive poll message with a media header to the given user. The poll message is a new feature that is currently in beta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsPollMessagePayload(); // \OpenAPI\Client\Model\StructsPollMessagePayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendPollPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendPollPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsPollMessagePayload**](../Model/StructsPollMessagePayload.md)| Message data | |

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

## `instancesInstanceKeySendTemplateMediaPost()`

```php
instancesInstanceKeySendTemplateMediaPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a template message with media.

Sends an interactive template message with a media header to the given user. Note: The valid button types are \"replyButton\", \"urlButton\", \"callButton\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsTemplateButtonWithMediaPayload(); // \OpenAPI\Client\Model\StructsTemplateButtonWithMediaPayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendTemplateMediaPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendTemplateMediaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsTemplateButtonWithMediaPayload**](../Model/StructsTemplateButtonWithMediaPayload.md)| Message data | |

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

## `instancesInstanceKeySendTemplatePost()`

```php
instancesInstanceKeySendTemplatePost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a template message.

Sends an interactive template message to the given user. Note: The valid button types are \"replyButton\", \"urlButton\", \"callButton\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsTemplateButtonPayload(); // \OpenAPI\Client\Model\StructsTemplateButtonPayload | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendTemplatePost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendTemplatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsTemplateButtonPayload**](../Model/StructsTemplateButtonPayload.md)| Message data | |

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

## `instancesInstanceKeySendTextPost()`

```php
instancesInstanceKeySendTextPost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Send a text message.

Sends a text message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsTextMessage(); // \OpenAPI\Client\Model\StructsTextMessage | Message data

try {
    $result = $apiInstance->instancesInstanceKeySendTextPost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendTextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsTextMessage**](../Model/StructsTextMessage.md)| Message data | |

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

## `instancesInstanceKeySendUploadPost()`

```php
instancesInstanceKeySendUploadPost($instance_key, $type, $instances_instance_key_send_upload_post_request): \OpenAPI\Client\Model\MainAPIResponse
```

Upload media.

Uploads media to WhatsApp servers and returns the media keys. Store the returned media keys, as you will need them to send media messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$type = 'type_example'; // string | Media type
$instances_instance_key_send_upload_post_request = new \OpenAPI\Client\Model\InstancesInstanceKeySendUploadPostRequest(); // \OpenAPI\Client\Model\InstancesInstanceKeySendUploadPostRequest

try {
    $result = $apiInstance->instancesInstanceKeySendUploadPost($instance_key, $type, $instances_instance_key_send_upload_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **type** | **string**| Media type | |
| **instances_instance_key_send_upload_post_request** | [**\OpenAPI\Client\Model\InstancesInstanceKeySendUploadPostRequest**](../Model/InstancesInstanceKeySendUploadPostRequest.md)|  | |

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

## `instancesInstanceKeySendVideoPost()`

```php
instancesInstanceKeySendVideoPost($instance_key, $to, $instances_instance_key_send_video_post_request, $caption): \OpenAPI\Client\Model\MainAPIResponse
```

Send raw video.

Sends a video message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$instances_instance_key_send_video_post_request = new \OpenAPI\Client\Model\InstancesInstanceKeySendVideoPostRequest(); // \OpenAPI\Client\Model\InstancesInstanceKeySendVideoPostRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->instancesInstanceKeySendVideoPost($instance_key, $to, $instances_instance_key_send_video_post_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->instancesInstanceKeySendVideoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **instances_instance_key_send_video_post_request** | [**\OpenAPI\Client\Model\InstancesInstanceKeySendVideoPostRequest**](../Model/InstancesInstanceKeySendVideoPostRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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
