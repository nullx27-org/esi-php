# nullx27\ESI\CharacterApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterId**](CharacterApi.md#getCharactersCharacterId) | **GET** /characters/{character_id}/ | Get character&#39;s public information
[**getCharactersCharacterIdAgentsResearch**](CharacterApi.md#getCharactersCharacterIdAgentsResearch) | **GET** /characters/{character_id}/agents_research/ | Get agents research
[**getCharactersCharacterIdBlueprints**](CharacterApi.md#getCharactersCharacterIdBlueprints) | **GET** /characters/{character_id}/blueprints/ | Get blueprints
[**getCharactersCharacterIdChatChannels**](CharacterApi.md#getCharactersCharacterIdChatChannels) | **GET** /characters/{character_id}/chat_channels/ | Get chat channels
[**getCharactersCharacterIdCorporationhistory**](CharacterApi.md#getCharactersCharacterIdCorporationhistory) | **GET** /characters/{character_id}/corporationhistory/ | Get corporation history
[**getCharactersCharacterIdMedals**](CharacterApi.md#getCharactersCharacterIdMedals) | **GET** /characters/{character_id}/medals/ | Get medals
[**getCharactersCharacterIdPortrait**](CharacterApi.md#getCharactersCharacterIdPortrait) | **GET** /characters/{character_id}/portrait/ | Get character portraits
[**getCharactersCharacterIdRoles**](CharacterApi.md#getCharactersCharacterIdRoles) | **GET** /characters/{character_id}/roles/ | Get character corporation roles
[**getCharactersCharacterIdStandings**](CharacterApi.md#getCharactersCharacterIdStandings) | **GET** /characters/{character_id}/standings/ | Get standings
[**getCharactersNames**](CharacterApi.md#getCharactersNames) | **GET** /characters/names/ | Get character names
[**postCharactersAffiliation**](CharacterApi.md#postCharactersAffiliation) | **POST** /characters/affiliation/ | Character affiliation
[**postCharactersCharacterIdCspa**](CharacterApi.md#postCharactersCharacterIdCspa) | **POST** /characters/{character_id}/cspa/ | Calculate a CSPA charge cost


# **getCharactersCharacterId**
> \nullx27\ESI\Models\GetCharactersCharacterIdOk getCharactersCharacterId($characterId, $datasource, $userAgent, $xUserAgent)

Get character's public information

Public information about a character  ---  Alternate route: `/v4/characters/{character_id}/`  Alternate route: `/dev/characters/{character_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterId($characterId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdOk**](../Model/GetCharactersCharacterIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdAgentsResearch**
> \nullx27\ESI\Models\GetCharactersCharacterIdAgentsResearch200Ok[] getCharactersCharacterIdAgentsResearch($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get agents research

Return a list of agents research information for a character. The formula for finding the current research points with an agent is: currentPoints = remainderPoints + pointsPerDay * days(currentTime - researchStartDate)  ---  Alternate route: `/v1/characters/{character_id}/agents_research/`  Alternate route: `/legacy/characters/{character_id}/agents_research/`  Alternate route: `/dev/characters/{character_id}/agents_research/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | ID for a character
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdAgentsResearch($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdAgentsResearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdAgentsResearch200Ok[]**](../Model/GetCharactersCharacterIdAgentsResearch200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdBlueprints**
> \nullx27\ESI\Models\GetCharactersCharacterIdBlueprints200Ok[] getCharactersCharacterIdBlueprints($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get blueprints

Return a list of blueprints the character has  ---  Alternate route: `/v1/characters/{character_id}/blueprints/`  Alternate route: `/legacy/characters/{character_id}/blueprints/`  Alternate route: `/dev/characters/{character_id}/blueprints/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | ID for a character
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdBlueprints($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdBlueprints: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdBlueprints200Ok[]**](../Model/GetCharactersCharacterIdBlueprints200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdChatChannels**
> \nullx27\ESI\Models\GetCharactersCharacterIdChatChannels200Ok[] getCharactersCharacterIdChatChannels($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get chat channels

Return chat channels that a character is the owner or an operator of  ---  Alternate route: `/v1/characters/{character_id}/chat_channels/`  Alternate route: `/legacy/characters/{character_id}/chat_channels/`  Alternate route: `/dev/characters/{character_id}/chat_channels/`   ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | ID for a character
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdChatChannels($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdChatChannels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdChatChannels200Ok[]**](../Model/GetCharactersCharacterIdChatChannels200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdCorporationhistory**
> \nullx27\ESI\Models\GetCharactersCharacterIdCorporationhistory200Ok[] getCharactersCharacterIdCorporationhistory($characterId, $datasource, $userAgent, $xUserAgent)

Get corporation history

Get a list of all the corporations a character has been a member of  ---  Alternate route: `/v1/characters/{character_id}/corporationhistory/`  Alternate route: `/legacy/characters/{character_id}/corporationhistory/`  Alternate route: `/dev/characters/{character_id}/corporationhistory/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdCorporationhistory($characterId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdCorporationhistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdCorporationhistory200Ok[]**](../Model/GetCharactersCharacterIdCorporationhistory200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdMedals**
> \nullx27\ESI\Models\GetCharactersCharacterIdMedals200Ok[] getCharactersCharacterIdMedals($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get medals

Return a list of medals the character has  ---  Alternate route: `/v1/characters/{character_id}/medals/`  Alternate route: `/legacy/characters/{character_id}/medals/`  Alternate route: `/dev/characters/{character_id}/medals/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | ID for a character
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdMedals($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdMedals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdMedals200Ok[]**](../Model/GetCharactersCharacterIdMedals200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdPortrait**
> \nullx27\ESI\Models\GetCharactersCharacterIdPortraitOk getCharactersCharacterIdPortrait($characterId, $datasource, $userAgent, $xUserAgent)

Get character portraits

Get portrait urls for a character  ---  Alternate route: `/v2/characters/{character_id}/portrait/`  Alternate route: `/dev/characters/{character_id}/portrait/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdPortrait($characterId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdPortrait: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdPortraitOk**](../Model/GetCharactersCharacterIdPortraitOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdRoles**
> string[] getCharactersCharacterIdRoles($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get character corporation roles

Returns a character's corporation roles  ---  Alternate route: `/v1/characters/{character_id}/roles/`  Alternate route: `/legacy/characters/{character_id}/roles/`  Alternate route: `/dev/characters/{character_id}/roles/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | A character ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdRoles($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| A character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**string[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdStandings**
> \nullx27\ESI\Models\GetCharactersCharacterIdStandings200Ok[] getCharactersCharacterIdStandings($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get standings

Return character standings from agents, NPC corporations, and factions  ---  Alternate route: `/v1/characters/{character_id}/standings/`  Alternate route: `/legacy/characters/{character_id}/standings/`  Alternate route: `/dev/characters/{character_id}/standings/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | ID for a character
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersCharacterIdStandings($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersCharacterIdStandings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdStandings200Ok[]**](../Model/GetCharactersCharacterIdStandings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersNames**
> \nullx27\ESI\Models\GetCharactersNames200Ok[] getCharactersNames($characterIds, $datasource, $userAgent, $xUserAgent)

Get character names

Resolve a set of character IDs to character names  ---  Alternate route: `/v1/characters/names/`  Alternate route: `/legacy/characters/names/`  Alternate route: `/dev/characters/names/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterIds = array(56); // int[] | A comma separated list of character IDs
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getCharactersNames($characterIds, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->getCharactersNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterIds** | [**int[]**](../Model/int.md)| A comma separated list of character IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetCharactersNames200Ok[]**](../Model/GetCharactersNames200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersAffiliation**
> \nullx27\ESI\Models\PostCharactersAffiliation200Ok[] postCharactersAffiliation($characters, $datasource, $userAgent, $xUserAgent)

Character affiliation

Bulk lookup of character IDs to corporation, alliance and faction  ---  Alternate route: `/v1/characters/affiliation/`  Alternate route: `/legacy/characters/affiliation/`  Alternate route: `/dev/characters/affiliation/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characters = array(new int[]()); // int[] | The character IDs to fetch affiliations for
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->postCharactersAffiliation($characters, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->postCharactersAffiliation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characters** | **int[]**| The character IDs to fetch affiliations for |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\PostCharactersAffiliation200Ok[]**](../Model/PostCharactersAffiliation200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdCspa**
> \nullx27\ESI\Models\PostCharactersCharacterIdCspaCreated postCharactersCharacterIdCspa($characterId, $characters, $datasource, $token, $userAgent, $xUserAgent)

Calculate a CSPA charge cost

Takes a source character ID in the url and a set of target character ID's in the body, returns a CSPA charge cost  ---  Alternate route: `/v3/characters/{character_id}/cspa/`  Alternate route: `/legacy/characters/{character_id}/cspa/`  Alternate route: `/dev/characters/{character_id}/cspa/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\CharacterApi();
$characterId = 56; // int | An EVE character ID
$characters = new \nullx27\ESI\Models\PostCharactersCharacterIdCspaCharacters(); // \nullx27\ESI\Models\PostCharactersCharacterIdCspaCharacters | The target characters to calculate the charge for
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->postCharactersCharacterIdCspa($characterId, $characters, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CharacterApi->postCharactersCharacterIdCspa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **characters** | [**\nullx27\ESI\Models\PostCharactersCharacterIdCspaCharacters**](../Model/\nullx27\ESI\Models\PostCharactersCharacterIdCspaCharacters.md)| The target characters to calculate the charge for |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\PostCharactersCharacterIdCspaCreated**](../Model/PostCharactersCharacterIdCspaCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

