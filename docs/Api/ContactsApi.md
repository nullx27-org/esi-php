# nullx27ESI\ContactsApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCharactersCharacterIdContacts**](ContactsApi.md#deleteCharactersCharacterIdContacts) | **DELETE** /characters/{character_id}/contacts/ | Delete contacts
[**getAlliancesAllianceIdContacts**](ContactsApi.md#getAlliancesAllianceIdContacts) | **GET** /alliances/{alliance_id}/contacts/ | Get alliance contacts
[**getCharactersCharacterIdContacts**](ContactsApi.md#getCharactersCharacterIdContacts) | **GET** /characters/{character_id}/contacts/ | Get contacts
[**getCharactersCharacterIdContactsLabels**](ContactsApi.md#getCharactersCharacterIdContactsLabels) | **GET** /characters/{character_id}/contacts/labels/ | Get contact labels
[**getCorporationsCorporationIdContacts**](ContactsApi.md#getCorporationsCorporationIdContacts) | **GET** /corporations/{corporation_id}/contacts/ | Get corporation contacts
[**postCharactersCharacterIdContacts**](ContactsApi.md#postCharactersCharacterIdContacts) | **POST** /characters/{character_id}/contacts/ | Add contacts
[**putCharactersCharacterIdContacts**](ContactsApi.md#putCharactersCharacterIdContacts) | **PUT** /characters/{character_id}/contacts/ | Edit contacts


# **deleteCharactersCharacterIdContacts**
> deleteCharactersCharacterIdContacts($characterId, $contactIds, $datasource, $token, $userAgent, $xUserAgent)

Delete contacts

Bulk delete contacts  --- Alternate route: `/dev/characters/{character_id}/contacts/`  Alternate route: `/v2/characters/{character_id}/contacts/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$contactIds = array(56); // int[] | A list of contacts to delete
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->deleteCharactersCharacterIdContacts($characterId, $contactIds, $datasource, $token, $userAgent, $xUserAgent);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->deleteCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **contactIds** | [**int[]**](../Model/int.md)| A list of contacts to delete |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAlliancesAllianceIdContacts**
> \nullx27ESI\nullx27\ESI\Models\GetAlliancesAllianceIdContacts200Ok[] getAlliancesAllianceIdContacts($allianceId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get alliance contacts

Return contacts of an alliance  --- Alternate route: `/dev/alliances/{alliance_id}/contacts/`  Alternate route: `/legacy/alliances/{alliance_id}/contacts/`  Alternate route: `/v1/alliances/{alliance_id}/contacts/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allianceId = 56; // int | An EVE alliance ID
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getAlliancesAllianceIdContacts($allianceId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getAlliancesAllianceIdContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allianceId** | **int**| An EVE alliance ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetAlliancesAllianceIdContacts200Ok[]**](../Model/GetAlliancesAllianceIdContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdContacts**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContacts200Ok[] getCharactersCharacterIdContacts($characterId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get contacts

Return contacts of a character  --- Alternate route: `/dev/characters/{character_id}/contacts/`  Alternate route: `/legacy/characters/{character_id}/contacts/`  Alternate route: `/v1/characters/{character_id}/contacts/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContacts($characterId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContacts200Ok[]**](../Model/GetCharactersCharacterIdContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdContactsLabels**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContactsLabels200Ok[] getCharactersCharacterIdContactsLabels($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get contact labels

Return custom labels for contacts the character defined  --- Alternate route: `/dev/characters/{character_id}/contacts/labels/`  Alternate route: `/legacy/characters/{character_id}/contacts/labels/`  Alternate route: `/v1/characters/{character_id}/contacts/labels/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContactsLabels($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCharactersCharacterIdContactsLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContactsLabels200Ok[]**](../Model/GetCharactersCharacterIdContactsLabels200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContacts**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContacts200Ok[] getCorporationsCorporationIdContacts($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation contacts

Return contacts of a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/contacts/`  Alternate route: `/legacy/corporations/{corporation_id}/contacts/`  Alternate route: `/v1/corporations/{corporation_id}/contacts/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdContacts($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->getCorporationsCorporationIdContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContacts200Ok[]**](../Model/GetCorporationsCorporationIdContacts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdContacts**
> int[] postCharactersCharacterIdContacts($characterId, $contactIds, $standing, $datasource, $labelId, $token, $userAgent, $watched, $xUserAgent)

Add contacts

Bulk add contacts with same settings  --- Alternate route: `/dev/characters/{character_id}/contacts/`  Alternate route: `/legacy/characters/{character_id}/contacts/`  Alternate route: `/v1/characters/{character_id}/contacts/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$contactIds = array(new \nullx27ESI\nullx27\ESI\Models\int[]()); // int[] | A list of contacts to add
$standing = 3.4; // float | Standing for the new contact
$datasource = "tranquility"; // string | The server name you would like data from
$labelId = 0; // int | Add a custom label to the new contact
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$watched = false; // bool | Whether the new contact should be watched, note this is only effective on characters
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postCharactersCharacterIdContacts($characterId, $contactIds, $standing, $datasource, $labelId, $token, $userAgent, $watched, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->postCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **contactIds** | **int[]**| A list of contacts to add |
 **standing** | **float**| Standing for the new contact |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **labelId** | **int**| Add a custom label to the new contact | [optional] [default to 0]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **watched** | **bool**| Whether the new contact should be watched, note this is only effective on characters | [optional] [default to false]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCharactersCharacterIdContacts**
> putCharactersCharacterIdContacts($characterId, $contactIds, $standing, $datasource, $labelId, $token, $userAgent, $watched, $xUserAgent)

Edit contacts

Bulk edit contacts with same settings  --- Alternate route: `/dev/characters/{character_id}/contacts/`  Alternate route: `/legacy/characters/{character_id}/contacts/`  Alternate route: `/v1/characters/{character_id}/contacts/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$contactIds = array(new \nullx27ESI\nullx27\ESI\Models\int[]()); // int[] | A list of contacts to edit
$standing = 3.4; // float | Standing for the contact
$datasource = "tranquility"; // string | The server name you would like data from
$labelId = 0; // int | Add a custom label to the contact, use 0 for clearing label
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$watched = false; // bool | Whether the contact should be watched, note this is only effective on characters
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putCharactersCharacterIdContacts($characterId, $contactIds, $standing, $datasource, $labelId, $token, $userAgent, $watched, $xUserAgent);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->putCharactersCharacterIdContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **contactIds** | **int[]**| A list of contacts to edit |
 **standing** | **float**| Standing for the contact |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **labelId** | **int**| Add a custom label to the contact, use 0 for clearing label | [optional] [default to 0]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **watched** | **bool**| Whether the contact should be watched, note this is only effective on characters | [optional] [default to false]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

