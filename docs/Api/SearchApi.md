# nullx27ESI\SearchApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdSearch**](SearchApi.md#getCharactersCharacterIdSearch) | **GET** /characters/{character_id}/search/ | Search on a string
[**getSearch**](SearchApi.md#getSearch) | **GET** /search/ | Search on a string


# **getCharactersCharacterIdSearch**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdSearchOk getCharactersCharacterIdSearch($categories, $characterId, $search, $datasource, $language, $strict, $token, $userAgent, $xUserAgent)

Search on a string

Search for entities that match a given sub-string.  --- Alternate route: `/dev/characters/{character_id}/search/`  Alternate route: `/v3/characters/{character_id}/search/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categories = array("categories_example"); // string[] | Type of entities to search for
$characterId = 56; // int | An EVE character ID
$search = "search_example"; // string | The string to search on
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$strict = false; // bool | Whether the search should be a strict match
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdSearch($categories, $characterId, $search, $datasource, $language, $strict, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getCharactersCharacterIdSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **characterId** | **int**| An EVE character ID |
 **search** | **string**| The string to search on |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **strict** | **bool**| Whether the search should be a strict match | [optional] [default to false]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdSearchOk**](../Model/GetCharactersCharacterIdSearchOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearch**
> \nullx27ESI\nullx27\ESI\Models\GetSearchOk getSearch($categories, $search, $datasource, $language, $strict, $userAgent, $xUserAgent)

Search on a string

Search for entities that match a given sub-string.  --- Alternate route: `/dev/search/`  Alternate route: `/v2/search/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categories = array("categories_example"); // string[] | Type of entities to search for
$search = "search_example"; // string | The string to search on
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$strict = false; // bool | Whether the search should be a strict match
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getSearch($categories, $search, $datasource, $language, $strict, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **search** | **string**| The string to search on |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **strict** | **bool**| Whether the search should be a strict match | [optional] [default to false]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetSearchOk**](../Model/GetSearchOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

