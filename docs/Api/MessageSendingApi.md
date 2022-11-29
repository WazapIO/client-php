# WhatsAPI\MessageSendingApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendAudio()**](MessageSendingApi.md#sendAudio) | **POST** /instances/{instance_key}/send/audio | Send raw audio. |
| [**sendButtonMessage()**](MessageSendingApi.md#sendButtonMessage) | **POST** /instances/{instance_key}/send/buttons | Send a button message. |
| [**sendButtonWithMedia()**](MessageSendingApi.md#sendButtonWithMedia) | **POST** /instances/{instance_key}/send/button-media | Send a button message with a media header. |
| [**sendContact()**](MessageSendingApi.md#sendContact) | **POST** /instances/{instance_key}/send/contact | Send a contact message. |
| [**sendDocument()**](MessageSendingApi.md#sendDocument) | **POST** /instances/{instance_key}/send/document | Send raw document. |
| [**sendGroupInvite()**](MessageSendingApi.md#sendGroupInvite) | **POST** /instances/{instance_key}/send/group-invite | Send a group invite message |
| [**sendImage()**](MessageSendingApi.md#sendImage) | **POST** /instances/{instance_key}/send/image | Send raw image. |
| [**sendListMessage()**](MessageSendingApi.md#sendListMessage) | **POST** /instances/{instance_key}/send/list | Send a List message. |
| [**sendLocation()**](MessageSendingApi.md#sendLocation) | **POST** /instances/{instance_key}/send/location | Send a location message. |
| [**sendMediaMessage()**](MessageSendingApi.md#sendMediaMessage) | **POST** /instances/{instance_key}/send/media | Send a media message. |
| [**sendPollMessage()**](MessageSendingApi.md#sendPollMessage) | **POST** /instances/{instance_key}/send/poll | Send a Poll message. |
| [**sendTemplate()**](MessageSendingApi.md#sendTemplate) | **POST** /instances/{instance_key}/send/template | Send a template message. |
| [**sendTemplateWithMedia()**](MessageSendingApi.md#sendTemplateWithMedia) | **POST** /instances/{instance_key}/send/template-media | Send a template message with media. |
| [**sendTextMessage()**](MessageSendingApi.md#sendTextMessage) | **POST** /instances/{instance_key}/send/text | Send a text message. |
| [**sendVideo()**](MessageSendingApi.md#sendVideo) | **POST** /instances/{instance_key}/send/video | Send raw video. |
| [**uploadMedia()**](MessageSendingApi.md#uploadMedia) | **POST** /instances/{instance_key}/send/upload | Upload media. |
| [**uploadMediaFromUrl()**](MessageSendingApi.md#uploadMediaFromUrl) | **POST** /instances/{instance_key}/send/upload-url | Upload media from url. |


## `sendAudio()`

```php
sendAudio($instance_key, $to, $send_audio_request, $caption): \WhatsAPI\models\APIResponse
```

Send raw audio.

Sends a audio message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$send_audio_request = new \WhatsAPI\models\SendAudioRequest(); // \WhatsAPI\models\SendAudioRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->sendAudio($instance_key, $to, $send_audio_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendAudio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **send_audio_request** | [**\WhatsAPI\models\SendAudioRequest**](../Model/SendAudioRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `sendButtonMessage()`

```php
sendButtonMessage($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a button message.

Sends an interactive button message to the given user. Make sure that all the button ids are unique

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\ButtonMessagePayload(); // \WhatsAPI\models\ButtonMessagePayload | Message data

try {
    $result = $apiInstance->sendButtonMessage($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendButtonMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\ButtonMessagePayload**](../Model/ButtonMessagePayload.md)| Message data | |

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

## `sendButtonWithMedia()`

```php
sendButtonWithMedia($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a button message with a media header.

Sends an interactive button message to the given user. This message also has media header with it. Make sure that all the button ids are unique

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\ButtonMessageWithMediaPayload(); // \WhatsAPI\models\ButtonMessageWithMediaPayload | Message data

try {
    $result = $apiInstance->sendButtonWithMedia($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendButtonWithMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\ButtonMessageWithMediaPayload**](../Model/ButtonMessageWithMediaPayload.md)| Message data | |

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

## `sendContact()`

```php
sendContact($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a contact message.

Sends a contact (vcard) message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\ContactMessagePayload(); // \WhatsAPI\models\ContactMessagePayload | Message data

try {
    $result = $apiInstance->sendContact($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\ContactMessagePayload**](../Model/ContactMessagePayload.md)| Message data | |

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

## `sendDocument()`

```php
sendDocument($instance_key, $to, $send_document_request, $caption): \WhatsAPI\models\APIResponse
```

Send raw document.

Sends a document message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$send_document_request = new \WhatsAPI\models\SendDocumentRequest(); // \WhatsAPI\models\SendDocumentRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->sendDocument($instance_key, $to, $send_document_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **send_document_request** | [**\WhatsAPI\models\SendDocumentRequest**](../Model/SendDocumentRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `sendGroupInvite()`

```php
sendGroupInvite($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a group invite message

Sends a group invite message to the specified number. Don't include \"https://chat.whatsapp.com/\" in the invite code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\GroupInviteMessagePayload(); // \WhatsAPI\models\GroupInviteMessagePayload | Message data

try {
    $result = $apiInstance->sendGroupInvite($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendGroupInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\GroupInviteMessagePayload**](../Model/GroupInviteMessagePayload.md)| Message data | |

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

## `sendImage()`

```php
sendImage($instance_key, $to, $update_profile_pic_request, $caption): \WhatsAPI\models\APIResponse
```

Send raw image.

Sends a image message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$update_profile_pic_request = new \WhatsAPI\models\UpdateProfilePicRequest(); // \WhatsAPI\models\UpdateProfilePicRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->sendImage($instance_key, $to, $update_profile_pic_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **update_profile_pic_request** | [**\WhatsAPI\models\UpdateProfilePicRequest**](../Model/UpdateProfilePicRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `sendListMessage()`

```php
sendListMessage($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a List message.

Sends an interactive List message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\ListMessagePayload(); // \WhatsAPI\models\ListMessagePayload | Message data

try {
    $result = $apiInstance->sendListMessage($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendListMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\ListMessagePayload**](../Model/ListMessagePayload.md)| Message data | |

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

## `sendLocation()`

```php
sendLocation($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a location message.

Sends a location message to the given user. This is static location and does not update Note: The Address and Url fields are optional

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\LocationMessagePayload(); // \WhatsAPI\models\LocationMessagePayload | Message data

try {
    $result = $apiInstance->sendLocation($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendLocation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\LocationMessagePayload**](../Model/LocationMessagePayload.md)| Message data | |

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

## `sendMediaMessage()`

```php
sendMediaMessage($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a media message.

Sends a media message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\SendMediaPayload(); // \WhatsAPI\models\SendMediaPayload | Message data

try {
    $result = $apiInstance->sendMediaMessage($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendMediaMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\SendMediaPayload**](../Model/SendMediaPayload.md)| Message data | |

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

## `sendPollMessage()`

```php
sendPollMessage($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a Poll message.

Sends an interactive poll message to the given user. The poll message is a new feature that is currently in beta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\PollMessagePayload(); // \WhatsAPI\models\PollMessagePayload | Message data

try {
    $result = $apiInstance->sendPollMessage($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendPollMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\PollMessagePayload**](../Model/PollMessagePayload.md)| Message data | |

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

## `sendTemplate()`

```php
sendTemplate($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a template message.

Sends an interactive template message to the given user. Note: The valid button types are \"replyButton\", \"urlButton\", \"callButton\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\TemplateButtonPayload(); // \WhatsAPI\models\TemplateButtonPayload | Message data

try {
    $result = $apiInstance->sendTemplate($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\TemplateButtonPayload**](../Model/TemplateButtonPayload.md)| Message data | |

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

## `sendTemplateWithMedia()`

```php
sendTemplateWithMedia($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a template message with media.

Sends an interactive template message with a media header to the given user. Note: The valid button types are \"replyButton\", \"urlButton\", \"callButton\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\TemplateButtonWithMediaPayload(); // \WhatsAPI\models\TemplateButtonWithMediaPayload | Message data

try {
    $result = $apiInstance->sendTemplateWithMedia($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendTemplateWithMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\TemplateButtonWithMediaPayload**](../Model/TemplateButtonWithMediaPayload.md)| Message data | |

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

## `sendTextMessage()`

```php
sendTextMessage($instance_key, $data): \WhatsAPI\models\APIResponse
```

Send a text message.

Sends a text message to the given user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\TextMessage(); // \WhatsAPI\models\TextMessage | Message data

try {
    $result = $apiInstance->sendTextMessage($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendTextMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\TextMessage**](../Model/TextMessage.md)| Message data | |

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

## `sendVideo()`

```php
sendVideo($instance_key, $to, $send_video_request, $caption): \WhatsAPI\models\APIResponse
```

Send raw video.

Sends a video message by uploading to the WhatsApp servers every time. This is not recommended for bulk sending.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$to = 'to_example'; // string | The recipient's number
$send_video_request = new \WhatsAPI\models\SendVideoRequest(); // \WhatsAPI\models\SendVideoRequest
$caption = 'caption_example'; // string | Attached caption

try {
    $result = $apiInstance->sendVideo($instance_key, $to, $send_video_request, $caption);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->sendVideo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **to** | **string**| The recipient&#39;s number | |
| **send_video_request** | [**\WhatsAPI\models\SendVideoRequest**](../Model/SendVideoRequest.md)|  | |
| **caption** | **string**| Attached caption | [optional] |

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

## `uploadMedia()`

```php
uploadMedia($instance_key, $type, $upload_media_request): \WhatsAPI\models\APIResponse
```

Upload media.

Uploads media to WhatsApp servers and returns the media keys. Store the returned media keys, as you will need them to send media messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$type = 'type_example'; // string | Media type
$upload_media_request = new \WhatsAPI\models\UploadMediaRequest(); // \WhatsAPI\models\UploadMediaRequest

try {
    $result = $apiInstance->uploadMedia($instance_key, $type, $upload_media_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->uploadMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **type** | **string**| Media type | |
| **upload_media_request** | [**\WhatsAPI\models\UploadMediaRequest**](../Model/UploadMediaRequest.md)|  | |

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

## `uploadMediaFromUrl()`

```php
uploadMediaFromUrl($instance_key, $type, $data): \WhatsAPI\models\APIResponse
```

Upload media from url.

Uploads media from a url to WhatsApp servers and returns the media keys. Store the returned media keys, as you will need them to send media messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\MessageSendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$type = 'type_example'; // string | Media type
$data = new \WhatsAPI\models\UrlMediaUploadPayload(); // \WhatsAPI\models\UrlMediaUploadPayload | Media data

try {
    $result = $apiInstance->uploadMediaFromUrl($instance_key, $type, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageSendingApi->uploadMediaFromUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **type** | **string**| Media type | |
| **data** | [**\WhatsAPI\models\UrlMediaUploadPayload**](../Model/UrlMediaUploadPayload.md)| Media data | |

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
