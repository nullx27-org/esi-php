# nullx27\ESI\KillmailsApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdKillmailsRecent**](KillmailsApi.md#getCharactersCharacterIdKillmailsRecent) | **GET** /characters/{character_id}/killmails/recent/ | List kills and losses
[**getKillmailsKillmailIdKillmailHash**](KillmailsApi.md#getKillmailsKillmailIdKillmailHash) | **GET** /killmails/{killmail_id}/{killmail_hash}/ | Get a single killmail


# **getCharactersCharacterIdKillmailsRecent**
> \nullx27\ESI\Models\GetCharactersCharacterIdKillmailsRecent200Ok[] getCharactersCharacterIdKillmailsRecent($characterId, $maxCount, $maxKillId, $datasource)

List kills and losses

Return a list of character's recent kills and losses  ---  Alternate route: `/v1/characters/{character_id}/killmails/recent/`  Alternate route: `/legacy/characters/{character_id}/killmails/recent/`  Alternate route: `/dev/characters/{character_id}/killmails/recent/`   ---  This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\KillmailsApi();
$characterId = 56; // int | An EVE character ID
$maxCount = 50; // int | How many killmails to return at maximum
$maxKillId = 56; // int | Only return killmails with ID smaller than this.
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdKillmailsRecent($characterId, $maxCount, $maxKillId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getCharactersCharacterIdKillmailsRecent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **maxCount** | **int**| How many killmails to return at maximum | [optional] [default to 50]
 **maxKillId** | **int**| Only return killmails with ID smaller than this. | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdKillmailsRecent200Ok[]**](../Model/GetCharactersCharacterIdKillmailsRecent200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKillmailsKillmailIdKillmailHash**
> \nullx27\ESI\Models\GetKillmailsKillmailIdKillmailHashOk getKillmailsKillmailIdKillmailHash($killmailId, $killmailHash, $datasource)

Get a single killmail

Return a single killmail from its ID and hash  ---  Alternate route: `/v1/killmails/{killmail_id}/{killmail_hash}/`  Alternate route: `/legacy/killmails/{killmail_id}/{killmail_hash}/`  Alternate route: `/dev/killmails/{killmail_id}/{killmail_hash}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\KillmailsApi();
$killmailId = 56; // int | The killmail ID to be queried
$killmailHash = "killmailHash_example"; // string | The killmail hash for verification
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getKillmailsKillmailIdKillmailHash($killmailId, $killmailHash, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KillmailsApi->getKillmailsKillmailIdKillmailHash: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **killmailId** | **int**| The killmail ID to be queried |
 **killmailHash** | **string**| The killmail hash for verification |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetKillmailsKillmailIdKillmailHashOk**](../Model/GetKillmailsKillmailIdKillmailHashOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

