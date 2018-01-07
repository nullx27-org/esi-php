# nullx27ESI\MarketApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdOrders**](MarketApi.md#getCharactersCharacterIdOrders) | **GET** /characters/{character_id}/orders/ | List orders from a character
[**getCorporationsCorporationIdOrders**](MarketApi.md#getCorporationsCorporationIdOrders) | **GET** /corporations/{corporation_id}/orders/ | List orders from a corporation
[**getMarketsGroups**](MarketApi.md#getMarketsGroups) | **GET** /markets/groups/ | Get item groups
[**getMarketsGroupsMarketGroupId**](MarketApi.md#getMarketsGroupsMarketGroupId) | **GET** /markets/groups/{market_group_id}/ | Get item group information
[**getMarketsPrices**](MarketApi.md#getMarketsPrices) | **GET** /markets/prices/ | List market prices
[**getMarketsRegionIdHistory**](MarketApi.md#getMarketsRegionIdHistory) | **GET** /markets/{region_id}/history/ | List historical market statistics in a region
[**getMarketsRegionIdOrders**](MarketApi.md#getMarketsRegionIdOrders) | **GET** /markets/{region_id}/orders/ | List orders in a region
[**getMarketsRegionIdTypes**](MarketApi.md#getMarketsRegionIdTypes) | **GET** /markets/{region_id}/types/ | List type IDs relevant to a market
[**getMarketsStructuresStructureId**](MarketApi.md#getMarketsStructuresStructureId) | **GET** /markets/structures/{structure_id}/ | List orders in a structure


# **getCharactersCharacterIdOrders**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdOrders200Ok[] getCharactersCharacterIdOrders($characterId, $datasource, $token, $userAgent, $xUserAgent)

List orders from a character

List market orders placed by a character  --- Alternate route: `/dev/characters/{character_id}/orders/`  Alternate route: `/legacy/characters/{character_id}/orders/`  Alternate route: `/v1/characters/{character_id}/orders/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\MarketApi(
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
    $result = $apiInstance->getCharactersCharacterIdOrders($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getCharactersCharacterIdOrders: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdOrders200Ok[]**](../Model/GetCharactersCharacterIdOrders200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdOrders**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOrders200Ok[] getCorporationsCorporationIdOrders($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

List orders from a corporation

List market orders placed on behalf of a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/orders/`  Alternate route: `/legacy/corporations/{corporation_id}/orders/`  Alternate route: `/v1/corporations/{corporation_id}/orders/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Accountant, Trader

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\MarketApi(
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
    $result = $apiInstance->getCorporationsCorporationIdOrders($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getCorporationsCorporationIdOrders: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOrders200Ok[]**](../Model/GetCorporationsCorporationIdOrders200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsGroups**
> int[] getMarketsGroups($datasource, $userAgent, $xUserAgent)

Get item groups

Get a list of item groups  --- Alternate route: `/dev/markets/groups/`  Alternate route: `/legacy/markets/groups/`  Alternate route: `/v1/markets/groups/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsGroups($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsGroupsMarketGroupId**
> \nullx27ESI\nullx27\ESI\Models\GetMarketsGroupsMarketGroupIdOk getMarketsGroupsMarketGroupId($marketGroupId, $datasource, $language, $userAgent, $xUserAgent)

Get item group information

Get information on an item group  --- Alternate route: `/dev/markets/groups/{market_group_id}/`  Alternate route: `/legacy/markets/groups/{market_group_id}/`  Alternate route: `/v1/markets/groups/{market_group_id}/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketGroupId = 56; // int | An Eve item group ID
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsGroupsMarketGroupId($marketGroupId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsGroupsMarketGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketGroupId** | **int**| An Eve item group ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetMarketsGroupsMarketGroupIdOk**](../Model/GetMarketsGroupsMarketGroupIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsPrices**
> \nullx27ESI\nullx27\ESI\Models\GetMarketsPrices200Ok[] getMarketsPrices($datasource, $userAgent, $xUserAgent)

List market prices

Return a list of prices  --- Alternate route: `/dev/markets/prices/`  Alternate route: `/legacy/markets/prices/`  Alternate route: `/v1/markets/prices/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsPrices($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetMarketsPrices200Ok[]**](../Model/GetMarketsPrices200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsRegionIdHistory**
> \nullx27ESI\nullx27\ESI\Models\GetMarketsRegionIdHistory200Ok[] getMarketsRegionIdHistory($regionId, $typeId, $datasource, $userAgent, $xUserAgent)

List historical market statistics in a region

Return a list of historical market statistics for the specified type in a region  --- Alternate route: `/dev/markets/{region_id}/history/`  Alternate route: `/legacy/markets/{region_id}/history/`  Alternate route: `/v1/markets/{region_id}/history/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$regionId = 56; // int | Return statistics in this region
$typeId = 56; // int | Return statistics for this type
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsRegionIdHistory($regionId, $typeId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsRegionIdHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regionId** | **int**| Return statistics in this region |
 **typeId** | **int**| Return statistics for this type |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetMarketsRegionIdHistory200Ok[]**](../Model/GetMarketsRegionIdHistory200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsRegionIdOrders**
> \nullx27ESI\nullx27\ESI\Models\GetMarketsRegionIdOrders200Ok[] getMarketsRegionIdOrders($orderType, $regionId, $datasource, $page, $typeId, $userAgent, $xUserAgent)

List orders in a region

Return a list of orders in a region  --- Alternate route: `/dev/markets/{region_id}/orders/`  Alternate route: `/legacy/markets/{region_id}/orders/`  Alternate route: `/v1/markets/{region_id}/orders/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderType = "all"; // string | Filter buy/sell orders, return all orders by default. If you query without type_id, we always return both buy and sell orders.
$regionId = 56; // int | Return orders in this region
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$typeId = 56; // int | Return orders only for this type
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsRegionIdOrders($orderType, $regionId, $datasource, $page, $typeId, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsRegionIdOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderType** | **string**| Filter buy/sell orders, return all orders by default. If you query without type_id, we always return both buy and sell orders. | [default to all]
 **regionId** | **int**| Return orders in this region |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **typeId** | **int**| Return orders only for this type | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetMarketsRegionIdOrders200Ok[]**](../Model/GetMarketsRegionIdOrders200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsRegionIdTypes**
> int[] getMarketsRegionIdTypes($regionId, $datasource, $page, $userAgent, $xUserAgent)

List type IDs relevant to a market

Return a list of type IDs that have active orders in the region, for efficient market indexing.  --- Alternate route: `/dev/markets/{region_id}/types/`  Alternate route: `/legacy/markets/{region_id}/types/`  Alternate route: `/v1/markets/{region_id}/types/`  --- This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$regionId = 56; // int | Return statistics in this region
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsRegionIdTypes($regionId, $datasource, $page, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsRegionIdTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regionId** | **int**| Return statistics in this region |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMarketsStructuresStructureId**
> \nullx27ESI\nullx27\ESI\Models\GetMarketsStructuresStructureId200Ok[] getMarketsStructuresStructureId($structureId, $datasource, $page, $token, $userAgent, $xUserAgent)

List orders in a structure

Return all orders in a structure  --- Alternate route: `/dev/markets/structures/{structure_id}/`  Alternate route: `/legacy/markets/structures/{structure_id}/`  Alternate route: `/v1/markets/structures/{structure_id}/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$structureId = 789; // int | Return orders in this structure
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getMarketsStructuresStructureId($structureId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getMarketsStructuresStructureId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **structureId** | **int**| Return orders in this structure |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetMarketsStructuresStructureId200Ok[]**](../Model/GetMarketsStructuresStructureId200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

