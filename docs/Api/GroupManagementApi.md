# OpenAPI\Client\GroupManagementApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**instancesInstanceKeyGroupsAdminGet()**](GroupManagementApi.md#instancesInstanceKeyGroupsAdminGet) | **GET** /instances/{instance_key}/groups/admin | Get admin groupss. |
| [**instancesInstanceKeyGroupsCreatePost()**](GroupManagementApi.md#instancesInstanceKeyGroupsCreatePost) | **POST** /instances/{instance_key}/groups/create | Create group. |
| [**instancesInstanceKeyGroupsGet()**](GroupManagementApi.md#instancesInstanceKeyGroupsGet) | **GET** /instances/{instance_key}/groups/ | Get all groups. |
| [**instancesInstanceKeyGroupsGroupIdAnnouncePut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdAnnouncePut) | **PUT** /instances/{instance_key}/groups/{group_id}/announce | Set group announce. |
| [**instancesInstanceKeyGroupsGroupIdDelete()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdDelete) | **DELETE** /instances/{instance_key}/groups/{group_id}/ | Leaves the group. |
| [**instancesInstanceKeyGroupsGroupIdDescriptionPut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdDescriptionPut) | **PUT** /instances/{instance_key}/groups/{group_id}/description | Set group description. |
| [**instancesInstanceKeyGroupsGroupIdGet()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdGet) | **GET** /instances/{instance_key}/groups/{group_id} | Get group. |
| [**instancesInstanceKeyGroupsGroupIdInviteCodeGet()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdInviteCodeGet) | **GET** /instances/{instance_key}/groups/{group_id}/invite-code | Get group invite code. |
| [**instancesInstanceKeyGroupsGroupIdLockPut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdLockPut) | **PUT** /instances/{instance_key}/groups/{group_id}/lock | Set group locked. |
| [**instancesInstanceKeyGroupsGroupIdNamePut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdNamePut) | **PUT** /instances/{instance_key}/groups/{group_id}/name | Set group name. |
| [**instancesInstanceKeyGroupsGroupIdParticipantsAddPost()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdParticipantsAddPost) | **POST** /instances/{instance_key}/groups/{group_id}/participants/add | Add participant. |
| [**instancesInstanceKeyGroupsGroupIdParticipantsDemotePut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdParticipantsDemotePut) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/demote | Demote participant. |
| [**instancesInstanceKeyGroupsGroupIdParticipantsPromotePut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdParticipantsPromotePut) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/promote | Promote participant. |
| [**instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete) | **DELETE** /instances/{instance_key}/groups/{group_id}/participants/remove | Remove participant. |
| [**instancesInstanceKeyGroupsGroupIdProfilePicPut()**](GroupManagementApi.md#instancesInstanceKeyGroupsGroupIdProfilePicPut) | **PUT** /instances/{instance_key}/groups/{group_id}/profile-pic | Set group picture. |
| [**instancesInstanceKeyGroupsInviteInfoGet()**](GroupManagementApi.md#instancesInstanceKeyGroupsInviteInfoGet) | **GET** /instances/{instance_key}/groups/invite-info | Get group from invite link. |


## `instancesInstanceKeyGroupsAdminGet()`

```php
instancesInstanceKeyGroupsAdminGet($instance_key): \OpenAPI\Client\Model\MainAPIResponse
```

Get admin groupss.

Returns list of all groups in which you are admin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->instancesInstanceKeyGroupsAdminGet($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsAdminGet: ', $e->getMessage(), PHP_EOL;
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

## `instancesInstanceKeyGroupsCreatePost()`

```php
instancesInstanceKeyGroupsCreatePost($instance_key, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Create group.

Creates a group with the participant data. The creator is automatically added to the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \OpenAPI\Client\Model\StructsGroupCreatePayload(); // \OpenAPI\Client\Model\StructsGroupCreatePayload | Group create payload

try {
    $result = $apiInstance->instancesInstanceKeyGroupsCreatePost($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupCreatePayload**](../Model/StructsGroupCreatePayload.md)| Group create payload | |

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

## `instancesInstanceKeyGroupsGet()`

```php
instancesInstanceKeyGroupsGet($instance_key, $include_participants): \OpenAPI\Client\Model\MainAPIResponse
```

Get all groups.

Returns list of all groups with participants data. Set include_participants to false to exclude participants data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$include_participants = 'true'; // string | Include participants data

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGet($instance_key, $include_participants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **include_participants** | **string**| Include participants data | [optional] [default to &#39;true&#39;] |

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

## `instancesInstanceKeyGroupsGroupIdAnnouncePut()`

```php
instancesInstanceKeyGroupsGroupIdAnnouncePut($instance_key, $announce, $group_id): \OpenAPI\Client\Model\MainAPIResponse
```

Set group announce.

Set if non-admins are allowed to send messages in groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$announce = false; // bool | Announce status
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdAnnouncePut($instance_key, $announce, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdAnnouncePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **announce** | **bool**| Announce status | [default to false] |
| **group_id** | **string**| Group id of the group | |

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

## `instancesInstanceKeyGroupsGroupIdDelete()`

```php
instancesInstanceKeyGroupsGroupIdDelete($instance_key, $group_id): \OpenAPI\Client\Model\MainAPIResponse
```

Leaves the group.

Leaves the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdDelete($instance_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |

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

## `instancesInstanceKeyGroupsGroupIdDescriptionPut()`

```php
instancesInstanceKeyGroupsGroupIdDescriptionPut($instance_key, $group_id, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Set group description.

Changes the group description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \OpenAPI\Client\Model\StructsGroupUpdateDescriptionPayload(); // \OpenAPI\Client\Model\StructsGroupUpdateDescriptionPayload | Group description data

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdDescriptionPut($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdDescriptionPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupUpdateDescriptionPayload**](../Model/StructsGroupUpdateDescriptionPayload.md)| Group description data | |

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

## `instancesInstanceKeyGroupsGroupIdGet()`

```php
instancesInstanceKeyGroupsGroupIdGet($instance_key, $group_id): \OpenAPI\Client\Model\MainAPIResponse
```

Get group.

Fetches the group data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdGet($instance_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |

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

## `instancesInstanceKeyGroupsGroupIdInviteCodeGet()`

```php
instancesInstanceKeyGroupsGroupIdInviteCodeGet($instance_key, $group_id): \OpenAPI\Client\Model\MainAPIResponse
```

Get group invite code.

Gets the invite code of the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdInviteCodeGet($instance_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdInviteCodeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |

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

## `instancesInstanceKeyGroupsGroupIdLockPut()`

```php
instancesInstanceKeyGroupsGroupIdLockPut($instance_key, $locked, $group_id): \OpenAPI\Client\Model\MainAPIResponse
```

Set group locked.

Set if non-admins are allowed to change the group dp and other stuff

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$locked = false; // bool | Locked status
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdLockPut($instance_key, $locked, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdLockPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **locked** | **bool**| Locked status | [default to false] |
| **group_id** | **string**| Group id of the group | |

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

## `instancesInstanceKeyGroupsGroupIdNamePut()`

```php
instancesInstanceKeyGroupsGroupIdNamePut($instance_key, $group_id, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Set group name.

Changes the group name. The max limit is 22 chars

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \OpenAPI\Client\Model\StructsGroupUpdateNamePayload(); // \OpenAPI\Client\Model\StructsGroupUpdateNamePayload | Group name data

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdNamePut($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupUpdateNamePayload**](../Model/StructsGroupUpdateNamePayload.md)| Group name data | |

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

## `instancesInstanceKeyGroupsGroupIdParticipantsAddPost()`

```php
instancesInstanceKeyGroupsGroupIdParticipantsAddPost($instance_key, $group_id, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Add participant.

Handles adding participants to a group. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload(); // \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdParticipantsAddPost($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdParticipantsAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload**](../Model/StructsGroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `instancesInstanceKeyGroupsGroupIdParticipantsDemotePut()`

```php
instancesInstanceKeyGroupsGroupIdParticipantsDemotePut($instance_key, $group_id, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Demote participant.

Demotes admins in groups. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload(); // \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdParticipantsDemotePut($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdParticipantsDemotePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload**](../Model/StructsGroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `instancesInstanceKeyGroupsGroupIdParticipantsPromotePut()`

```php
instancesInstanceKeyGroupsGroupIdParticipantsPromotePut($instance_key, $group_id, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Promote participant.

Promotes participants to admin. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload(); // \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdParticipantsPromotePut($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdParticipantsPromotePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload**](../Model/StructsGroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete()`

```php
instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete($instance_key, $group_id, $data): \OpenAPI\Client\Model\MainAPIResponse
```

Remove participant.

Handles removing participants from a group. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload(); // \OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\OpenAPI\Client\Model\StructsGroupUpdateParticipantsPayload**](../Model/StructsGroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `instancesInstanceKeyGroupsGroupIdProfilePicPut()`

```php
instancesInstanceKeyGroupsGroupIdProfilePicPut($instance_key, $group_id, $instances_instance_key_groups_group_id_profile_pic_put_request): \OpenAPI\Client\Model\MainAPIResponse
```

Set group picture.

Changes the group profile picture. Currently it only seems to accept JPEG images only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$instances_instance_key_groups_group_id_profile_pic_put_request = new \OpenAPI\Client\Model\InstancesInstanceKeyGroupsGroupIdProfilePicPutRequest(); // \OpenAPI\Client\Model\InstancesInstanceKeyGroupsGroupIdProfilePicPutRequest

try {
    $result = $apiInstance->instancesInstanceKeyGroupsGroupIdProfilePicPut($instance_key, $group_id, $instances_instance_key_groups_group_id_profile_pic_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsGroupIdProfilePicPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **instances_instance_key_groups_group_id_profile_pic_put_request** | [**\OpenAPI\Client\Model\InstancesInstanceKeyGroupsGroupIdProfilePicPutRequest**](../Model/InstancesInstanceKeyGroupsGroupIdProfilePicPutRequest.md)|  | |

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

## `instancesInstanceKeyGroupsInviteInfoGet()`

```php
instancesInstanceKeyGroupsInviteInfoGet($instance_key, $invite_link): \OpenAPI\Client\Model\MainAPIResponse
```

Get group from invite link.

Gets a group info from an invite link. An invite link is a link that can be used to join a group. It is usually in the format https://chat.whatsapp.com/{invitecode}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$invite_link = 'invite_link_example'; // string | The invite link to check

try {
    $result = $apiInstance->instancesInstanceKeyGroupsInviteInfoGet($instance_key, $invite_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->instancesInstanceKeyGroupsInviteInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **invite_link** | **string**| The invite link to check | |

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
