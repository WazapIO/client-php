# WhatsAPI\GroupManagementApi

All URIs are relative to /api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addParticipant()**](GroupManagementApi.md#addParticipant) | **POST** /instances/{instance_key}/groups/{group_id}/participants/add | Add participant. |
| [**createGroup()**](GroupManagementApi.md#createGroup) | **POST** /instances/{instance_key}/groups/create | Create group. |
| [**demoteParticipant()**](GroupManagementApi.md#demoteParticipant) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/demote | Demote participant. |
| [**getAdminGroups()**](GroupManagementApi.md#getAdminGroups) | **GET** /instances/{instance_key}/groups/admin | Get admin groups. |
| [**getAllGroups()**](GroupManagementApi.md#getAllGroups) | **GET** /instances/{instance_key}/groups/ | Get all groups. |
| [**getGroup()**](GroupManagementApi.md#getGroup) | **GET** /instances/{instance_key}/groups/{group_id} | Get group. |
| [**getGroupFromInviteLink()**](GroupManagementApi.md#getGroupFromInviteLink) | **GET** /instances/{instance_key}/groups/invite-info | Get group from invite link. |
| [**getGroupInviteCode()**](GroupManagementApi.md#getGroupInviteCode) | **GET** /instances/{instance_key}/groups/{group_id}/invite-code | Get group invite code. |
| [**leaveGroup()**](GroupManagementApi.md#leaveGroup) | **DELETE** /instances/{instance_key}/groups/{group_id}/ | Leaves the group. |
| [**promoteParticipant()**](GroupManagementApi.md#promoteParticipant) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/promote | Promote participant. |
| [**removeParticipant()**](GroupManagementApi.md#removeParticipant) | **DELETE** /instances/{instance_key}/groups/{group_id}/participants/remove | Remove participant. |
| [**setGroupAnnounce()**](GroupManagementApi.md#setGroupAnnounce) | **PUT** /instances/{instance_key}/groups/{group_id}/announce | Set group announce. |
| [**setGroupDescription()**](GroupManagementApi.md#setGroupDescription) | **PUT** /instances/{instance_key}/groups/{group_id}/description | Set group description. |
| [**setGroupLocked()**](GroupManagementApi.md#setGroupLocked) | **PUT** /instances/{instance_key}/groups/{group_id}/lock | Set group locked. |
| [**setGroupName()**](GroupManagementApi.md#setGroupName) | **PUT** /instances/{instance_key}/groups/{group_id}/name | Set group name. |
| [**setGroupPicture()**](GroupManagementApi.md#setGroupPicture) | **PUT** /instances/{instance_key}/groups/{group_id}/profile-pic | Set group picture. |


## `addParticipant()`

```php
addParticipant($instance_key, $group_id, $data): \WhatsAPI\models\APIResponse
```

Add participant.

Handles adding participants to a group. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \WhatsAPI\models\GroupUpdateParticipantsPayload(); // \WhatsAPI\models\GroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->addParticipant($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->addParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\WhatsAPI\models\GroupUpdateParticipantsPayload**](../Model/GroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `createGroup()`

```php
createGroup($instance_key, $data): \WhatsAPI\models\APIResponse
```

Create group.

Creates a group with the participant data. The creator is automatically added to the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$data = new \WhatsAPI\models\GroupCreatePayload(); // \WhatsAPI\models\GroupCreatePayload | Group create payload

try {
    $result = $apiInstance->createGroup($instance_key, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **data** | [**\WhatsAPI\models\GroupCreatePayload**](../Model/GroupCreatePayload.md)| Group create payload | |

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

## `demoteParticipant()`

```php
demoteParticipant($instance_key, $group_id, $data): \WhatsAPI\models\APIResponse
```

Demote participant.

Demotes admins in groups. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \WhatsAPI\models\GroupUpdateParticipantsPayload(); // \WhatsAPI\models\GroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->demoteParticipant($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->demoteParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\WhatsAPI\models\GroupUpdateParticipantsPayload**](../Model/GroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `getAdminGroups()`

```php
getAdminGroups($instance_key): \WhatsAPI\models\APIResponse
```

Get admin groups.

Returns list of all groups in which you are admin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key

try {
    $result = $apiInstance->getAdminGroups($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->getAdminGroups: ', $e->getMessage(), PHP_EOL;
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

## `getAllGroups()`

```php
getAllGroups($instance_key, $include_participants): \WhatsAPI\models\APIResponse
```

Get all groups.

Returns list of all groups with participants data. Set include_participants to false to exclude participants data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$include_participants = 'true'; // string | Include participants data

try {
    $result = $apiInstance->getAllGroups($instance_key, $include_participants);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->getAllGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **include_participants** | **string**| Include participants data | [optional] [default to &#39;true&#39;] |

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

## `getGroup()`

```php
getGroup($instance_key, $group_id): \WhatsAPI\models\APIResponse
```

Get group.

Fetches the group data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->getGroup($instance_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |

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

## `getGroupFromInviteLink()`

```php
getGroupFromInviteLink($instance_key, $invite_link): \WhatsAPI\models\APIResponse
```

Get group from invite link.

Gets a group info from an invite link. An invite link is a link that can be used to join a group. It is usually in the format https://chat.whatsapp.com/{invitecode}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$invite_link = 'invite_link_example'; // string | The invite link to check

try {
    $result = $apiInstance->getGroupFromInviteLink($instance_key, $invite_link);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->getGroupFromInviteLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **invite_link** | **string**| The invite link to check | |

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

## `getGroupInviteCode()`

```php
getGroupInviteCode($instance_key, $group_id): \WhatsAPI\models\APIResponse
```

Get group invite code.

Gets the invite code of the group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->getGroupInviteCode($instance_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->getGroupInviteCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |

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

## `leaveGroup()`

```php
leaveGroup($instance_key, $group_id): \WhatsAPI\models\APIResponse
```

Leaves the group.

Leaves the specified group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->leaveGroup($instance_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->leaveGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |

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

## `promoteParticipant()`

```php
promoteParticipant($instance_key, $group_id, $data): \WhatsAPI\models\APIResponse
```

Promote participant.

Promotes participants to admin. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \WhatsAPI\models\GroupUpdateParticipantsPayload(); // \WhatsAPI\models\GroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->promoteParticipant($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->promoteParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\WhatsAPI\models\GroupUpdateParticipantsPayload**](../Model/GroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `removeParticipant()`

```php
removeParticipant($instance_key, $group_id, $data): \WhatsAPI\models\APIResponse
```

Remove participant.

Handles removing participants from a group. You must be admin in the group or the query will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \WhatsAPI\models\GroupUpdateParticipantsPayload(); // \WhatsAPI\models\GroupUpdateParticipantsPayload | Group update payload

try {
    $result = $apiInstance->removeParticipant($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->removeParticipant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\WhatsAPI\models\GroupUpdateParticipantsPayload**](../Model/GroupUpdateParticipantsPayload.md)| Group update payload | |

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

## `setGroupAnnounce()`

```php
setGroupAnnounce($instance_key, $announce, $group_id): \WhatsAPI\models\APIResponse
```

Set group announce.

Set if non-admins are allowed to send messages in groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$announce = false; // bool | Announce status
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->setGroupAnnounce($instance_key, $announce, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->setGroupAnnounce: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **announce** | **bool**| Announce status | [default to false] |
| **group_id** | **string**| Group id of the group | |

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

## `setGroupDescription()`

```php
setGroupDescription($instance_key, $group_id, $data): \WhatsAPI\models\APIResponse
```

Set group description.

Changes the group description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \WhatsAPI\models\GroupUpdateDescriptionPayload(); // \WhatsAPI\models\GroupUpdateDescriptionPayload | Group description data

try {
    $result = $apiInstance->setGroupDescription($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->setGroupDescription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\WhatsAPI\models\GroupUpdateDescriptionPayload**](../Model/GroupUpdateDescriptionPayload.md)| Group description data | |

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

## `setGroupLocked()`

```php
setGroupLocked($instance_key, $locked, $group_id): \WhatsAPI\models\APIResponse
```

Set group locked.

Set if non-admins are allowed to change the group dp and other stuff

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$locked = false; // bool | Locked status
$group_id = 'group_id_example'; // string | Group id of the group

try {
    $result = $apiInstance->setGroupLocked($instance_key, $locked, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->setGroupLocked: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **locked** | **bool**| Locked status | [default to false] |
| **group_id** | **string**| Group id of the group | |

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

## `setGroupName()`

```php
setGroupName($instance_key, $group_id, $data): \WhatsAPI\models\APIResponse
```

Set group name.

Changes the group name. The max limit is 22 chars

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$data = new \WhatsAPI\models\GroupUpdateNamePayload(); // \WhatsAPI\models\GroupUpdateNamePayload | Group name data

try {
    $result = $apiInstance->setGroupName($instance_key, $group_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->setGroupName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **data** | [**\WhatsAPI\models\GroupUpdateNamePayload**](../Model/GroupUpdateNamePayload.md)| Group name data | |

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

## `setGroupPicture()`

```php
setGroupPicture($instance_key, $group_id, $set_group_picture_request): \WhatsAPI\models\APIResponse
```

Set group picture.

Changes the group profile picture. Currently it only seems to accept JPEG images only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAPI\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new WhatsAPI\Api\GroupManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$instance_key = 'instance_key_example'; // string | Instance key
$group_id = 'group_id_example'; // string | Group id of the group
$set_group_picture_request = new \WhatsAPI\models\SetGroupPictureRequest(); // \WhatsAPI\models\SetGroupPictureRequest

try {
    $result = $apiInstance->setGroupPicture($instance_key, $group_id, $set_group_picture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupManagementApi->setGroupPicture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **instance_key** | **string**| Instance key | |
| **group_id** | **string**| Group id of the group | |
| **set_group_picture_request** | [**\WhatsAPI\models\SetGroupPictureRequest**](../Model/SetGroupPictureRequest.md)|  | |

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
