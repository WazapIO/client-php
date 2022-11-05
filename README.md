# WhatsAPI

The V2 of WhatsAPI Go


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/WhatsAPI/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    $result = $apiInstance->instancesInstanceKeyBusinessCatalogGet($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessManagementApi->instancesInstanceKeyBusinessCatalogGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BusinessManagementApi* | [**instancesInstanceKeyBusinessCatalogGet**](docs/Api/BusinessManagementApi.md#instancesinstancekeybusinesscatalogget) | **GET** /instances/{instance_key}/business/catalog | Fetches the catlog.
*GroupManagementApi* | [**instancesInstanceKeyGroupsAdminGet**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsadminget) | **GET** /instances/{instance_key}/groups/admin | Get admin groupss.
*GroupManagementApi* | [**instancesInstanceKeyGroupsCreatePost**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupscreatepost) | **POST** /instances/{instance_key}/groups/create | Create group.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGet**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsget) | **GET** /instances/{instance_key}/groups/ | Get all groups.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdAnnouncePut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidannounceput) | **PUT** /instances/{instance_key}/groups/{group_id}/announce | Set group announce.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdDelete**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupiddelete) | **DELETE** /instances/{instance_key}/groups/{group_id}/ | Leaves the group.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdDescriptionPut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupiddescriptionput) | **PUT** /instances/{instance_key}/groups/{group_id}/description | Set group description.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdGet**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidget) | **GET** /instances/{instance_key}/groups/{group_id} | Get group.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdInviteCodeGet**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidinvitecodeget) | **GET** /instances/{instance_key}/groups/{group_id}/invite-code | Get group invite code.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdLockPut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidlockput) | **PUT** /instances/{instance_key}/groups/{group_id}/lock | Set group locked.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdNamePut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidnameput) | **PUT** /instances/{instance_key}/groups/{group_id}/name | Set group name.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdParticipantsAddPost**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidparticipantsaddpost) | **POST** /instances/{instance_key}/groups/{group_id}/participants/add | Add participant.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdParticipantsDemotePut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidparticipantsdemoteput) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/demote | Demote participant.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdParticipantsPromotePut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidparticipantspromoteput) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/promote | Promote participant.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdParticipantsRemoveDelete**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidparticipantsremovedelete) | **DELETE** /instances/{instance_key}/groups/{group_id}/participants/remove | Remove participant.
*GroupManagementApi* | [**instancesInstanceKeyGroupsGroupIdProfilePicPut**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsgroupidprofilepicput) | **PUT** /instances/{instance_key}/groups/{group_id}/profile-pic | Set group picture.
*GroupManagementApi* | [**instancesInstanceKeyGroupsInviteInfoGet**](docs/Api/GroupManagementApi.md#instancesinstancekeygroupsinviteinfoget) | **GET** /instances/{instance_key}/groups/invite-info | Get group from invite link.
*InstanceApi* | [**instancesCreateGet**](docs/Api/InstanceApi.md#instancescreateget) | **GET** /instances/create | Creates a new instance key.
*InstanceApi* | [**instancesInstanceKeyContactsGet**](docs/Api/InstanceApi.md#instancesinstancekeycontactsget) | **GET** /instances/{instance_key}/contacts | Get contacts.
*InstanceApi* | [**instancesInstanceKeyDeleteDelete**](docs/Api/InstanceApi.md#instancesinstancekeydeletedelete) | **DELETE** /instances/{instance_key}/delete | Delete Instance.
*InstanceApi* | [**instancesInstanceKeyGet**](docs/Api/InstanceApi.md#instancesinstancekeyget) | **GET** /instances/{instance_key}/ | Get Instance.
*InstanceApi* | [**instancesInstanceKeyLogoutDelete**](docs/Api/InstanceApi.md#instancesinstancekeylogoutdelete) | **DELETE** /instances/{instance_key}/logout | Logout Instance.
*InstanceApi* | [**instancesInstanceKeyQrcodeGet**](docs/Api/InstanceApi.md#instancesinstancekeyqrcodeget) | **GET** /instances/{instance_key}/qrcode | Get QrCode.
*InstanceApi* | [**instancesInstanceKeyWebhookPut**](docs/Api/InstanceApi.md#instancesinstancekeywebhookput) | **PUT** /instances/{instance_key}/webhook | Change Webhook url.
*InstanceApi* | [**instancesListGet**](docs/Api/InstanceApi.md#instanceslistget) | **GET** /instances/list | Get all instances.
*MessageSendingApi* | [**instancesInstanceKeySendAudioPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendaudiopost) | **POST** /instances/{instance_key}/send/audio | Send raw audio.
*MessageSendingApi* | [**instancesInstanceKeySendButtonMediaPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendbuttonmediapost) | **POST** /instances/{instance_key}/send/button-media | Send a button message with a media header.
*MessageSendingApi* | [**instancesInstanceKeySendButtonsPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendbuttonspost) | **POST** /instances/{instance_key}/send/buttons | Send a button message.
*MessageSendingApi* | [**instancesInstanceKeySendContactPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendcontactpost) | **POST** /instances/{instance_key}/send/contact | Send a contact message.
*MessageSendingApi* | [**instancesInstanceKeySendDocumentPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysenddocumentpost) | **POST** /instances/{instance_key}/send/document | Send raw document.
*MessageSendingApi* | [**instancesInstanceKeySendImagePost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendimagepost) | **POST** /instances/{instance_key}/send/image | Send raw image.
*MessageSendingApi* | [**instancesInstanceKeySendListPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendlistpost) | **POST** /instances/{instance_key}/send/list | Send a List message.
*MessageSendingApi* | [**instancesInstanceKeySendLocationPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendlocationpost) | **POST** /instances/{instance_key}/send/location | Send a location message.
*MessageSendingApi* | [**instancesInstanceKeySendMediaPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendmediapost) | **POST** /instances/{instance_key}/send/media | Send a media message.
*MessageSendingApi* | [**instancesInstanceKeySendPollPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendpollpost) | **POST** /instances/{instance_key}/send/poll | Send a Poll message.
*MessageSendingApi* | [**instancesInstanceKeySendTemplateMediaPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendtemplatemediapost) | **POST** /instances/{instance_key}/send/template-media | Send a template message with media.
*MessageSendingApi* | [**instancesInstanceKeySendTemplatePost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendtemplatepost) | **POST** /instances/{instance_key}/send/template | Send a template message.
*MessageSendingApi* | [**instancesInstanceKeySendTextPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendtextpost) | **POST** /instances/{instance_key}/send/text | Send a text message.
*MessageSendingApi* | [**instancesInstanceKeySendUploadPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysenduploadpost) | **POST** /instances/{instance_key}/send/upload | Upload media.
*MessageSendingApi* | [**instancesInstanceKeySendVideoPost**](docs/Api/MessageSendingApi.md#instancesinstancekeysendvideopost) | **POST** /instances/{instance_key}/send/video | Send raw video.
*MiscellaneousApi* | [**instancesInstanceKeyMiscProfilePicGet**](docs/Api/MiscellaneousApi.md#instancesinstancekeymiscprofilepicget) | **GET** /instances/{instance_key}/misc/profile-pic | Get profile pic.
*MiscellaneousApi* | [**instancesInstanceKeyMiscUserInfoPost**](docs/Api/MiscellaneousApi.md#instancesinstancekeymiscuserinfopost) | **POST** /instances/{instance_key}/misc/user-info | Fetches the users info.

## Models

- [APIResponse](docs/Model/APIResponse.md)
- [ButtonMessagePayload](docs/Model/ButtonMessagePayload.md)
- [ButtonMessageWithMediaPayload](docs/Model/ButtonMessageWithMediaPayload.md)
- [ContactMessagePayload](docs/Model/ContactMessagePayload.md)
- [ContactMessagePayloadVcard](docs/Model/ContactMessagePayloadVcard.md)
- [FileUpload](docs/Model/FileUpload.md)
- [GroupCreatePayload](docs/Model/GroupCreatePayload.md)
- [GroupUpdateDescriptionPayload](docs/Model/GroupUpdateDescriptionPayload.md)
- [GroupUpdateNamePayload](docs/Model/GroupUpdateNamePayload.md)
- [GroupUpdateParticipantsPayload](docs/Model/GroupUpdateParticipantsPayload.md)
- [InstancesInstanceKeyGroupsGroupIdProfilePicPutRequest](docs/Model/InstancesInstanceKeyGroupsGroupIdProfilePicPutRequest.md)
- [InstancesInstanceKeySendAudioPostRequest](docs/Model/InstancesInstanceKeySendAudioPostRequest.md)
- [InstancesInstanceKeySendDocumentPostRequest](docs/Model/InstancesInstanceKeySendDocumentPostRequest.md)
- [InstancesInstanceKeySendImagePostRequest](docs/Model/InstancesInstanceKeySendImagePostRequest.md)
- [InstancesInstanceKeySendUploadPostRequest](docs/Model/InstancesInstanceKeySendUploadPostRequest.md)
- [InstancesInstanceKeySendVideoPostRequest](docs/Model/InstancesInstanceKeySendVideoPostRequest.md)
- [ListItem](docs/Model/ListItem.md)
- [ListMessagePayload](docs/Model/ListMessagePayload.md)
- [ListSection](docs/Model/ListSection.md)
- [LocationMessagePayload](docs/Model/LocationMessagePayload.md)
- [LocationMessagePayloadLocation](docs/Model/LocationMessagePayloadLocation.md)
- [PollMessagePayload](docs/Model/PollMessagePayload.md)
- [ReplyButton](docs/Model/ReplyButton.md)
- [SendMediaPayload](docs/Model/SendMediaPayload.md)
- [TemplateButton](docs/Model/TemplateButton.md)
- [TemplateButtonPayload](docs/Model/TemplateButtonPayload.md)
- [TemplateButtonWithMediaPayload](docs/Model/TemplateButtonWithMediaPayload.md)
- [TextMessage](docs/Model/TextMessage.md)
- [UserInfoPayload](docs/Model/UserInfoPayload.md)
- [WebhookPayload](docs/Model/WebhookPayload.md)

## Authorization

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

manjit@sponsorbook.io

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
