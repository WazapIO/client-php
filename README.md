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
    $result = $apiInstance->fetchCatlog($instance_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessManagementApi->fetchCatlog: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to */api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BusinessManagementApi* | [**fetchCatlog**](docs/Api/BusinessManagementApi.md#fetchcatlog) | **GET** /instances/{instance_key}/business/catalog | Fetches the catlog.
*BusinessManagementApi* | [**sendPaymentRequest**](docs/Api/BusinessManagementApi.md#sendpaymentrequest) | **POST** /instances/{instance_key}/business/payment-request | Send a payment request.
*GroupManagementApi* | [**addParticipant**](docs/Api/GroupManagementApi.md#addparticipant) | **POST** /instances/{instance_key}/groups/{group_id}/participants/add | Add participant.
*GroupManagementApi* | [**createGroup**](docs/Api/GroupManagementApi.md#creategroup) | **POST** /instances/{instance_key}/groups/create | Create group.
*GroupManagementApi* | [**demoteParticipant**](docs/Api/GroupManagementApi.md#demoteparticipant) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/demote | Demote participant.
*GroupManagementApi* | [**getAdminGroups**](docs/Api/GroupManagementApi.md#getadmingroups) | **GET** /instances/{instance_key}/groups/admin | Get admin groups.
*GroupManagementApi* | [**getAllGroups**](docs/Api/GroupManagementApi.md#getallgroups) | **GET** /instances/{instance_key}/groups/ | Get all groups.
*GroupManagementApi* | [**getAllParticipants**](docs/Api/GroupManagementApi.md#getallparticipants) | **GET** /instances/{instance_key}/groups/{group_id}/participants | Get all participants.
*GroupManagementApi* | [**getGroup**](docs/Api/GroupManagementApi.md#getgroup) | **GET** /instances/{instance_key}/groups/{group_id} | Get group.
*GroupManagementApi* | [**getGroupFromInviteLink**](docs/Api/GroupManagementApi.md#getgroupfrominvitelink) | **GET** /instances/{instance_key}/groups/invite-info | Get group from invite link.
*GroupManagementApi* | [**getGroupInviteCode**](docs/Api/GroupManagementApi.md#getgroupinvitecode) | **GET** /instances/{instance_key}/groups/{group_id}/invite-code | Get group invite code.
*GroupManagementApi* | [**joinGroupWithLink**](docs/Api/GroupManagementApi.md#joingroupwithlink) | **GET** /instances/{instance_key}/groups/join | Join group with invite code.
*GroupManagementApi* | [**leaveGroup**](docs/Api/GroupManagementApi.md#leavegroup) | **DELETE** /instances/{instance_key}/groups/{group_id}/ | Leaves the group.
*GroupManagementApi* | [**promoteParticipant**](docs/Api/GroupManagementApi.md#promoteparticipant) | **PUT** /instances/{instance_key}/groups/{group_id}/participants/promote | Promote participant.
*GroupManagementApi* | [**removeParticipant**](docs/Api/GroupManagementApi.md#removeparticipant) | **DELETE** /instances/{instance_key}/groups/{group_id}/participants/remove | Remove participant.
*GroupManagementApi* | [**setGroupAnnounce**](docs/Api/GroupManagementApi.md#setgroupannounce) | **PUT** /instances/{instance_key}/groups/{group_id}/announce | Set group announce.
*GroupManagementApi* | [**setGroupDescription**](docs/Api/GroupManagementApi.md#setgroupdescription) | **PUT** /instances/{instance_key}/groups/{group_id}/description | Set group description.
*GroupManagementApi* | [**setGroupLocked**](docs/Api/GroupManagementApi.md#setgrouplocked) | **PUT** /instances/{instance_key}/groups/{group_id}/lock | Set group locked.
*GroupManagementApi* | [**setGroupName**](docs/Api/GroupManagementApi.md#setgroupname) | **PUT** /instances/{instance_key}/groups/{group_id}/name | Set group name.
*GroupManagementApi* | [**setGroupPicture**](docs/Api/GroupManagementApi.md#setgrouppicture) | **PUT** /instances/{instance_key}/groups/{group_id}/profile-pic | Set group picture.
*InstanceApi* | [**changeWebhookUrl**](docs/Api/InstanceApi.md#changewebhookurl) | **PUT** /instances/{instance_key}/webhook | Change Webhook url.
*InstanceApi* | [**createInstance**](docs/Api/InstanceApi.md#createinstance) | **GET** /instances/create | Creates a new instance key.
*InstanceApi* | [**deleteInstance**](docs/Api/InstanceApi.md#deleteinstance) | **DELETE** /instances/{instance_key}/delete | Delete Instance.
*InstanceApi* | [**getContacts**](docs/Api/InstanceApi.md#getcontacts) | **GET** /instances/{instance_key}/contacts | Get contacts.
*InstanceApi* | [**getInstance**](docs/Api/InstanceApi.md#getinstance) | **GET** /instances/{instance_key}/ | Get Instance.
*InstanceApi* | [**getQrCode**](docs/Api/InstanceApi.md#getqrcode) | **GET** /instances/{instance_key}/qrcode | Get QrCode.
*InstanceApi* | [**listInstances**](docs/Api/InstanceApi.md#listinstances) | **GET** /instances/list | Get all instances.
*InstanceApi* | [**logoutInstance**](docs/Api/InstanceApi.md#logoutinstance) | **DELETE** /instances/{instance_key}/logout | Logout Instance.
*MessageSendingApi* | [**sendAudio**](docs/Api/MessageSendingApi.md#sendaudio) | **POST** /instances/{instance_key}/send/audio | Send raw audio.
*MessageSendingApi* | [**sendButtonMessage**](docs/Api/MessageSendingApi.md#sendbuttonmessage) | **POST** /instances/{instance_key}/send/buttons | Send a button message.
*MessageSendingApi* | [**sendButtonWithMedia**](docs/Api/MessageSendingApi.md#sendbuttonwithmedia) | **POST** /instances/{instance_key}/send/button-media | Send a button message with a media header.
*MessageSendingApi* | [**sendContact**](docs/Api/MessageSendingApi.md#sendcontact) | **POST** /instances/{instance_key}/send/contact | Send a contact message.
*MessageSendingApi* | [**sendDocument**](docs/Api/MessageSendingApi.md#senddocument) | **POST** /instances/{instance_key}/send/document | Send raw document.
*MessageSendingApi* | [**sendGroupInvite**](docs/Api/MessageSendingApi.md#sendgroupinvite) | **POST** /instances/{instance_key}/send/group-invite | Send a group invite message
*MessageSendingApi* | [**sendImage**](docs/Api/MessageSendingApi.md#sendimage) | **POST** /instances/{instance_key}/send/image | Send raw image.
*MessageSendingApi* | [**sendListMessage**](docs/Api/MessageSendingApi.md#sendlistmessage) | **POST** /instances/{instance_key}/send/list | Send a List message.
*MessageSendingApi* | [**sendLocation**](docs/Api/MessageSendingApi.md#sendlocation) | **POST** /instances/{instance_key}/send/location | Send a location message.
*MessageSendingApi* | [**sendMediaMessage**](docs/Api/MessageSendingApi.md#sendmediamessage) | **POST** /instances/{instance_key}/send/media | Send a media message.
*MessageSendingApi* | [**sendPollMessage**](docs/Api/MessageSendingApi.md#sendpollmessage) | **POST** /instances/{instance_key}/send/poll | Send a Poll message.
*MessageSendingApi* | [**sendTemplate**](docs/Api/MessageSendingApi.md#sendtemplate) | **POST** /instances/{instance_key}/send/template | Send a template message.
*MessageSendingApi* | [**sendTemplateWithMedia**](docs/Api/MessageSendingApi.md#sendtemplatewithmedia) | **POST** /instances/{instance_key}/send/template-media | Send a template message with media.
*MessageSendingApi* | [**sendTextMessage**](docs/Api/MessageSendingApi.md#sendtextmessage) | **POST** /instances/{instance_key}/send/text | Send a text message.
*MessageSendingApi* | [**sendVideo**](docs/Api/MessageSendingApi.md#sendvideo) | **POST** /instances/{instance_key}/send/video | Send raw video.
*MessageSendingApi* | [**uploadMedia**](docs/Api/MessageSendingApi.md#uploadmedia) | **POST** /instances/{instance_key}/send/upload | Upload media.
*MessageSendingApi* | [**uploadMediaFromUrl**](docs/Api/MessageSendingApi.md#uploadmediafromurl) | **POST** /instances/{instance_key}/send/upload-url | Upload media from url.
*MiscellaneousApi* | [**downloadMedia**](docs/Api/MiscellaneousApi.md#downloadmedia) | **POST** /instances/{instance_key}/misc/download | Download media
*MiscellaneousApi* | [**getProfilePic**](docs/Api/MiscellaneousApi.md#getprofilepic) | **GET** /instances/{instance_key}/misc/profile-pic | Get profile pic.
*MiscellaneousApi* | [**getUsersInfo**](docs/Api/MiscellaneousApi.md#getusersinfo) | **POST** /instances/{instance_key}/misc/user-info | Fetches the users info.
*MiscellaneousApi* | [**setChatPresence**](docs/Api/MiscellaneousApi.md#setchatpresence) | **POST** /instances/{instance_key}/misc/chat-presence | Set chat presence
*MiscellaneousApi* | [**updateProfilePic**](docs/Api/MiscellaneousApi.md#updateprofilepic) | **PUT** /instances/{instance_key}/misc/profile-pic | Update profile picture

## Models

- [APIResponse](docs/Model/APIResponse.md)
- [ButtonMessagePayload](docs/Model/ButtonMessagePayload.md)
- [ButtonMessageWithMediaPayload](docs/Model/ButtonMessageWithMediaPayload.md)
- [ContactMessagePayload](docs/Model/ContactMessagePayload.md)
- [ContactMessagePayloadVcard](docs/Model/ContactMessagePayloadVcard.md)
- [FileUpload](docs/Model/FileUpload.md)
- [GroupCreatePayload](docs/Model/GroupCreatePayload.md)
- [GroupInviteMessagePayload](docs/Model/GroupInviteMessagePayload.md)
- [GroupUpdateDescriptionPayload](docs/Model/GroupUpdateDescriptionPayload.md)
- [GroupUpdateNamePayload](docs/Model/GroupUpdateNamePayload.md)
- [GroupUpdateParticipantsPayload](docs/Model/GroupUpdateParticipantsPayload.md)
- [ListItem](docs/Model/ListItem.md)
- [ListMessagePayload](docs/Model/ListMessagePayload.md)
- [ListSection](docs/Model/ListSection.md)
- [LocationMessagePayload](docs/Model/LocationMessagePayload.md)
- [LocationMessagePayloadLocation](docs/Model/LocationMessagePayloadLocation.md)
- [PaymentRequestPayload](docs/Model/PaymentRequestPayload.md)
- [PollMessagePayload](docs/Model/PollMessagePayload.md)
- [ReplyButton](docs/Model/ReplyButton.md)
- [SendAudioRequest](docs/Model/SendAudioRequest.md)
- [SendDocumentRequest](docs/Model/SendDocumentRequest.md)
- [SendMediaPayload](docs/Model/SendMediaPayload.md)
- [SendVideoRequest](docs/Model/SendVideoRequest.md)
- [SetGroupPictureRequest](docs/Model/SetGroupPictureRequest.md)
- [TemplateButton](docs/Model/TemplateButton.md)
- [TemplateButtonPayload](docs/Model/TemplateButtonPayload.md)
- [TemplateButtonWithMediaPayload](docs/Model/TemplateButtonWithMediaPayload.md)
- [TextMessage](docs/Model/TextMessage.md)
- [UpdateProfilePicRequest](docs/Model/UpdateProfilePicRequest.md)
- [UploadMediaRequest](docs/Model/UploadMediaRequest.md)
- [UrlMediaUploadPayload](docs/Model/UrlMediaUploadPayload.md)
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
