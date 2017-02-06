# nullx27\ESI\PlanetaryInteractionApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdPlanets**](PlanetaryInteractionApi.md#getCharactersCharacterIdPlanets) | **GET** /characters/{character_id}/planets/ | Get colonies
[**getCharactersCharacterIdPlanetsPlanetId**](PlanetaryInteractionApi.md#getCharactersCharacterIdPlanetsPlanetId) | **GET** /characters/{character_id}/planets/{planet_id}/ | Get colony layout
[**getUniverseSchematicsSchematicId**](PlanetaryInteractionApi.md#getUniverseSchematicsSchematicId) | **GET** /universe/schematics/{schematic_id}/ | Get schematic information


# **getCharactersCharacterIdPlanets**
> \nullx27\ESI\Models\GetCharactersCharacterIdPlanets200Ok[] getCharactersCharacterIdPlanets($characterId, $datasource)

Get colonies

Returns a list of all planetary colonies owned by a character.  ---  Alternate route: `/v1/characters/{character_id}/planets/`  Alternate route: `/legacy/characters/{character_id}/planets/`  Alternate route: `/dev/characters/{character_id}/planets/`   ---  This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\PlanetaryInteractionApi();
$characterId = 56; // int | Character id of the target character
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdPlanets($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCharactersCharacterIdPlanets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| Character id of the target character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdPlanets200Ok[]**](../Model/GetCharactersCharacterIdPlanets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdPlanetsPlanetId**
> \nullx27\ESI\Models\GetCharactersCharacterIdPlanetsPlanetIdOk getCharactersCharacterIdPlanetsPlanetId($characterId, $planetId, $datasource)

Get colony layout

Returns full details on the layout of a single planetary colony, including links, pins and routes. Note: Planetary information is only recalculated when the colony is viewed through the client. Information on this endpoint will not update until this criteria is met.  ---  Alternate route: `/v1/characters/{character_id}/planets/{planet_id}/`  Alternate route: `/legacy/characters/{character_id}/planets/{planet_id}/`  Alternate route: `/dev/characters/{character_id}/planets/{planet_id}/`   ---  This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\PlanetaryInteractionApi();
$characterId = 56; // int | Character id of the target character
$planetId = 56; // int | Planet id of the target planet
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdPlanetsPlanetId($characterId, $planetId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlanetaryInteractionApi->getCharactersCharacterIdPlanetsPlanetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| Character id of the target character |
 **planetId** | **int**| Planet id of the target planet |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdPlanetsPlanetIdOk**](../Model/GetCharactersCharacterIdPlanetsPlanetIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseSchematicsSchematicId**
> \nullx27\ESI\Models\GetUniverseSchematicsSchematicIdOk getUniverseSchematicsSchematicId($schematicId, $datasource)

Get schematic information

Get information on a planetary factory schematic  ---  Alternate route: `/v1/universe/schematics/{schematic_id}/`  Alternate route: `/legacy/universe/schematics/{schematic_id}/`  Alternate route: `/dev/universe/schematics/{schematic_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\PlanetaryInteractionApi();
$schematicId = 56; // int | A PI schematic ID
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getUniverseSchematicsSchematicId($schematicId, $datasource);
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

### Return type

[**\nullx27\ESI\Models\GetUniverseSchematicsSchematicIdOk**](../Model/GetUniverseSchematicsSchematicIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

