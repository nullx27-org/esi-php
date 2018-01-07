# nullx27\ESI\BookmarksApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdBookmarks**](BookmarksApi.md#getCharactersCharacterIdBookmarks) | **GET** /characters/{character_id}/bookmarks/ | List bookmarks
[**getCharactersCharacterIdBookmarksFolders**](BookmarksApi.md#getCharactersCharacterIdBookmarksFolders) | **GET** /characters/{character_id}/bookmarks/folders/ | List bookmark folders
[**getCorporationsCorporationIdBookmarks**](BookmarksApi.md#getCorporationsCorporationIdBookmarks) | **GET** /corporations/{corporation_id}/bookmarks/ | List corporation bookmarks
[**getCorporationsCorporationIdBookmarksFolders**](BookmarksApi.md#getCorporationsCorporationIdBookmarksFolders) | **GET** /corporations/{corporation_id}/bookmarks/folders/ | List corporation bookmark folders


# **getCharactersCharacterIdBookmarks**
> \nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdBookmarks200Ok[] getCharactersCharacterIdBookmarks($characterId, $datasource, $page, $token, $userAgent, $xUserAgent)

List bookmarks

A list of your character's personal bookmarks  --- Alternate route: `/dev/characters/{character_id}/bookmarks/`  Alternate route: `/v2/characters/{character_id}/bookmarks/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\BookmarksApi(
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
    $result = $apiInstance->getCharactersCharacterIdBookmarks($characterId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCharactersCharacterIdBookmarks: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdBookmarks200Ok[]**](../Model/GetCharactersCharacterIdBookmarks200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdBookmarksFolders**
> \nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdBookmarksFolders200Ok[] getCharactersCharacterIdBookmarksFolders($characterId, $datasource, $page, $token, $userAgent, $xUserAgent)

List bookmark folders

A list of your character's personal bookmark folders  --- Alternate route: `/dev/characters/{character_id}/bookmarks/folders/`  Alternate route: `/v2/characters/{character_id}/bookmarks/folders/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\BookmarksApi(
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
    $result = $apiInstance->getCharactersCharacterIdBookmarksFolders($characterId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCharactersCharacterIdBookmarksFolders: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdBookmarksFolders200Ok[]**](../Model/GetCharactersCharacterIdBookmarksFolders200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdBookmarks**
> \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdBookmarks200Ok[] getCorporationsCorporationIdBookmarks($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

List corporation bookmarks

A list of your corporation's bookmarks  --- Alternate route: `/dev/corporations/{corporation_id}/bookmarks/`  Alternate route: `/legacy/corporations/{corporation_id}/bookmarks/`  Alternate route: `/v1/corporations/{corporation_id}/bookmarks/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\BookmarksApi(
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
    $result = $apiInstance->getCorporationsCorporationIdBookmarks($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCorporationsCorporationIdBookmarks: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdBookmarks200Ok[]**](../Model/GetCorporationsCorporationIdBookmarks200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdBookmarksFolders**
> \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdBookmarksFolders200Ok[] getCorporationsCorporationIdBookmarksFolders($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

List corporation bookmark folders

A list of your corporation's bookmark folders  --- Alternate route: `/dev/corporations/{corporation_id}/bookmarks/folders/`  Alternate route: `/legacy/corporations/{corporation_id}/bookmarks/folders/`  Alternate route: `/v1/corporations/{corporation_id}/bookmarks/folders/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\BookmarksApi(
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
    $result = $apiInstance->getCorporationsCorporationIdBookmarksFolders($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookmarksApi->getCorporationsCorporationIdBookmarksFolders: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdBookmarksFolders200Ok[]**](../Model/GetCorporationsCorporationIdBookmarksFolders200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

