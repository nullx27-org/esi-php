# nullx27\ESI\PlanetaryInteractionApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdPlanets**](PlanetaryInteractionApi.md#getCharactersCharacterIdPlanets) | **GET** /characters/{character_id}/planets/ | Get colonies
[**getCharactersCharacterIdPlanetsPlanetId**](PlanetaryInteractionApi.md#getCharactersCharacterIdPlanetsPlanetId) | **GET** /characters/{character_id}/planets/{planet_id}/ | Get colony layout
[**getCorporationsCorporationIdCustomsOffices**](PlanetaryInteractionApi.md#getCorporationsCorporationIdCustomsOffices) | **GET** /corporations/{corporation_id}/customs_offices/ | List corporation customs offices
[**getUniverseSchematicsSchematicId**](PlanetaryInteractionApi.md#getUniverseSchematicsSchematicId) | **GET** /universe/schematics/{schematic_id}/ | Get schematic information


# **getCharactersCharacterIdPlanets**
> \nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdPlanets200Ok[] getCharactersCharacterIdPlanets($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get colonies

Returns a list of all planetary colonies owned by a character.  --- Alternate route: `/dev/characters/{character_id}/planets/`  Alternate route: `/legacy/characters/{character_id}/planets/`  Alternate route: `/v1/characters/{character_id}/planets/`  --- This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\PlanetaryInteractionApi(
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
    $result = $apiInstance->getCharactersCharacterIdPlanets($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCharactersCharacterIdPlanets: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdPlanets200Ok[]**](../Model/GetCharactersCharacterIdPlanets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdPlanetsPlanetId**
> \nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdPlanetsPlanetIdOk getCharactersCharacterIdPlanetsPlanetId($characterId, $planetId, $datasource, $token, $userAgent, $xUserAgent)

Get colony layout

Returns full details on the layout of a single planetary colony, including links, pins and routes. Note: Planetary information is only recalculated when the colony is viewed through the client. Information will not update until this criteria is met.  --- Alternate route: `/dev/characters/{character_id}/planets/{planet_id}/`  Alternate route: `/v3/characters/{character_id}/planets/{planet_id}/`  --- This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\PlanetaryInteractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$planetId = 56; // int | Planet id of the target planet
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdPlanetsPlanetId($characterId, $planetId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCharactersCharacterIdPlanetsPlanetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **planetId** | **int**| Planet id of the target planet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\nullx27\ESI\Models\GetCharactersCharacterIdPlanetsPlanetIdOk**](../Model/GetCharactersCharacterIdPlanetsPlanetIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdCustomsOffices**
> \nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdCustomsOffices200Ok[] getCorporationsCorporationIdCustomsOffices($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

List corporation customs offices

List customs offices owned by a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/customs_offices/`  Alternate route: `/legacy/corporations/{corporation_id}/customs_offices/`  Alternate route: `/v1/corporations/{corporation_id}/customs_offices/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27\ESI\Api\PlanetaryInteractionApi(
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
    $result = $apiInstance->getCorporationsCorporationIdCustomsOffices($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCorporationsCorporationIdCustomsOffices: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetCorporationsCorporationIdCustomsOffices200Ok[]**](../Model/GetCorporationsCorporationIdCustomsOffices200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseSchematicsSchematicId**
> \nullx27\ESI\nullx27\ESI\Models\GetUniverseSchematicsSchematicIdOk getUniverseSchematicsSchematicId($schematicId, $datasource, $userAgent, $xUserAgent)

Get schematic information

Get information on a planetary factory schematic  --- Alternate route: `/dev/universe/schematics/{schematic_id}/`  Alternate route: `/legacy/universe/schematics/{schematic_id}/`  Alternate route: `/v1/universe/schematics/{schematic_id}/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27\ESI\Api\PlanetaryInteractionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$schematicId = 56; // int | A PI schematic ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getUniverseSchematicsSchematicId($schematicId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getUniverseSchematicsSchematicId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schematicId** | **int**| A PI schematic ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\nullx27\ESI\Models\GetUniverseSchematicsSchematicIdOk**](../Model/GetUniverseSchematicsSchematicIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

