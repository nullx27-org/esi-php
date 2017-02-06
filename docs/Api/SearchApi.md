# nullx27\ESI\SearchApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdSearch**](SearchApi.md#getCharactersCharacterIdSearch) | **GET** /characters/{character_id}/search/ | Search on a string
[**getSearch**](SearchApi.md#getSearch) | **GET** /search/ | Search on a string


# **getCharactersCharacterIdSearch**
> \nullx27\ESI\Models\GetCharactersCharacterIdSearchOk getCharactersCharacterIdSearch($characterId, $search, $categories, $language, $strict, $datasource)

Search on a string

Search for entities that match a given sub-string.  ---  Alternate route: `/v2/characters/{character_id}/search/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\SearchApi();
$characterId = 56; // int | An EVE character ID
$search = "search_example"; // string | The string to search on
$categories = array("categories_example"); // string[] | Type of entities to search for
$language = "en-us"; // string | Search locale
$strict = false; // bool | Whether the search should be a strict match
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdSearch($characterId, $search, $categories, $language, $strict, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getCharactersCharacterIdSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **search** | **string**| The string to search on |
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **language** | **string**| Search locale | [optional] [default to en-us]
 **strict** | **bool**| Whether the search should be a strict match | [optional] [default to false]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdSearchOk**](../Model/GetCharactersCharacterIdSearchOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearch**
> \nullx27\ESI\Models\GetSearchOk getSearch($search, $categories, $language, $strict, $datasource)

Search on a string

Search for entities that match a given sub-string.  ---  Alternate route: `/v1/search/`  Alternate route: `/legacy/search/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\SearchApi();
$search = "search_example"; // string | The string to search on
$categories = array("categories_example"); // string[] | Type of entities to search for
$language = "en-us"; // string | Search locale
$strict = false; // bool | Whether the search should be a strict match
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getSearch($search, $categories, $language, $strict, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| The string to search on |
 **categories** | [**string[]**](../Model/string.md)| Type of entities to search for |
 **language** | **string**| Search locale | [optional] [default to en-us]
 **strict** | **bool**| Whether the search should be a strict match | [optional] [default to false]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetSearchOk**](../Model/GetSearchOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

