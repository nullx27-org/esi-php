# nullx27\ESI\AssetsApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdAssets**](AssetsApi.md#getCharactersCharacterIdAssets) | **GET** /characters/{character_id}/assets/ | Get character assets
[**getCorporationsCorporationIdAssets**](AssetsApi.md#getCorporationsCorporationIdAssets) | **GET** /corporations/{corporation_id}/assets/ | Get corporation assets
[**postCharactersCharacterIdAssetsLocations**](AssetsApi.md#postCharactersCharacterIdAssetsLocations) | **POST** /characters/{character_id}/assets/locations/ | Get character asset locations
[**postCharactersCharacterIdAssetsNames**](AssetsApi.md#postCharactersCharacterIdAssetsNames) | **POST** /characters/{character_id}/assets/names/ | Get character asset names
[**postCorporationsCorporationIdAssetsLocations**](AssetsApi.md#postCorporationsCorporationIdAssetsLocations) | **POST** /corporations/{corporation_id}/assets/locations/ | Get corporation asset locations
[**postCorporationsCorporationIdAssetsNames**](AssetsApi.md#postCorporationsCorporationIdAssetsNames) | **POST** /corporations/{corporation_id}/assets/names/ | Get coporation asset names


# **getCharactersCharacterIdAssets**
> \nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdAssets200Ok[] getCharactersCharacterIdAssets($characterId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get character assets

Return a list of the characters assets  --- Alternate route: `/dev/characters/{character_id}/assets/`  Alternate route: `/v3/characters/{character_id}/assets/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\AssetsApi(
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
    $result = $apiInstance->getCharactersCharacterIdAssets($characterId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getCharactersCharacterIdAssets: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdAssets200Ok[]**](../Model/GetCharactersCharacterIdAssets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdAssets**
> \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdAssets200Ok[] getCorporationsCorporationIdAssets($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation assets

Return a list of the corporation assets  --- Alternate route: `/dev/corporations/{corporation_id}/assets/`  Alternate route: `/v2/corporations/{corporation_id}/assets/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\AssetsApi(
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
    $result = $apiInstance->getCorporationsCorporationIdAssets($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getCorporationsCorporationIdAssets: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdAssets200Ok[]**](../Model/GetCorporationsCorporationIdAssets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdAssetsLocations**
> \nullx27\ESI\nullx27\ESI\Models\PostCharactersCharacterIdAssetsLocations200Ok[] postCharactersCharacterIdAssetsLocations($characterId, $itemIds, $datasource, $token, $userAgent, $xUserAgent)

Get character asset locations

Return locations for a set of item ids, which you can get from character assets endpoint. Coordinates for items in hangars or stations are set to (0,0,0)  --- Alternate route: `/dev/characters/{character_id}/assets/locations/`  Alternate route: `/v2/characters/{character_id}/assets/locations/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$itemIds = array(new \nullx27\ESI\nullx27\ESI\Models\int[]()); // int[] | A list of item ids
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postCharactersCharacterIdAssetsLocations($characterId, $itemIds, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCharactersCharacterIdAssetsLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **itemIds** | **int[]**| A list of item ids |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\nullx27\ESI\Models\PostCharactersCharacterIdAssetsLocations200Ok[]**](../Model/PostCharactersCharacterIdAssetsLocations200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdAssetsNames**
> \nullx27\ESI\nullx27\ESI\Models\PostCharactersCharacterIdAssetsNames200Ok[] postCharactersCharacterIdAssetsNames($characterId, $itemIds, $datasource, $token, $userAgent, $xUserAgent)

Get character asset names

Return names for a set of item ids, which you can get from character assets endpoint. Typically used for items that can customize names, like containers or ships.  --- Alternate route: `/dev/characters/{character_id}/assets/names/`  Alternate route: `/legacy/characters/{character_id}/assets/names/`  Alternate route: `/v1/characters/{character_id}/assets/names/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$itemIds = array(new \nullx27\ESI\nullx27\ESI\Models\int[]()); // int[] | A list of item ids
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postCharactersCharacterIdAssetsNames($characterId, $itemIds, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCharactersCharacterIdAssetsNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **itemIds** | **int[]**| A list of item ids |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\nullx27\ESI\Models\PostCharactersCharacterIdAssetsNames200Ok[]**](../Model/PostCharactersCharacterIdAssetsNames200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCorporationsCorporationIdAssetsLocations**
> \nullx27\ESI\nullx27\ESI\Models\PostCorporationsCorporationIdAssetsLocations200Ok[] postCorporationsCorporationIdAssetsLocations($corporationId, $itemIds, $datasource, $token, $userAgent, $xUserAgent)

Get corporation asset locations

Return locations for a set of item ids, which you can get from corporation assets endpoint. Coordinates for items in hangars or stations are set to (0,0,0)  --- Alternate route: `/dev/corporations/{corporation_id}/assets/locations/`  Alternate route: `/v2/corporations/{corporation_id}/assets/locations/`   --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$itemIds = array(new \nullx27\ESI\nullx27\ESI\Models\int[]()); // int[] | A list of item ids
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postCorporationsCorporationIdAssetsLocations($corporationId, $itemIds, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCorporationsCorporationIdAssetsLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **itemIds** | **int[]**| A list of item ids |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\nullx27\ESI\Models\PostCorporationsCorporationIdAssetsLocations200Ok[]**](../Model/PostCorporationsCorporationIdAssetsLocations200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCorporationsCorporationIdAssetsNames**
> \nullx27\ESI\nullx27\ESI\Models\PostCorporationsCorporationIdAssetsNames200Ok[] postCorporationsCorporationIdAssetsNames($corporationId, $itemIds, $datasource, $token, $userAgent, $xUserAgent)

Get coporation asset names

Return names for a set of item ids, which you can get from corporation assets endpoint. Only valid for items that can customize names, like containers or ships.  --- Alternate route: `/dev/corporations/{corporation_id}/assets/names/`  Alternate route: `/legacy/corporations/{corporation_id}/assets/names/`  Alternate route: `/v1/corporations/{corporation_id}/assets/names/`   --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$itemIds = array(new \nullx27\ESI\nullx27\ESI\Models\int[]()); // int[] | A list of item ids
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->postCorporationsCorporationIdAssetsNames($corporationId, $itemIds, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->postCorporationsCorporationIdAssetsNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **itemIds** | **int[]**| A list of item ids |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\nullx27\ESI\Models\PostCorporationsCorporationIdAssetsNames200Ok[]**](../Model/PostCorporationsCorporationIdAssetsNames200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

