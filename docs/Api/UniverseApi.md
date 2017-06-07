# nullx27\ESI\UniverseApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUniverseBloodlines**](UniverseApi.md#getUniverseBloodlines) | **GET** /universe/bloodlines/ | Get bloodlines
[**getUniverseCategories**](UniverseApi.md#getUniverseCategories) | **GET** /universe/categories/ | Get item categories
[**getUniverseCategoriesCategoryId**](UniverseApi.md#getUniverseCategoriesCategoryId) | **GET** /universe/categories/{category_id}/ | Get item category information
[**getUniverseConstellations**](UniverseApi.md#getUniverseConstellations) | **GET** /universe/constellations/ | Get constellations
[**getUniverseConstellationsConstellationId**](UniverseApi.md#getUniverseConstellationsConstellationId) | **GET** /universe/constellations/{constellation_id}/ | Get constellation information
[**getUniverseFactions**](UniverseApi.md#getUniverseFactions) | **GET** /universe/factions/ | Get factions
[**getUniverseGraphics**](UniverseApi.md#getUniverseGraphics) | **GET** /universe/graphics/ | Get graphics
[**getUniverseGraphicsGraphicId**](UniverseApi.md#getUniverseGraphicsGraphicId) | **GET** /universe/graphics/{graphic_id}/ | Get graphic information
[**getUniverseGroups**](UniverseApi.md#getUniverseGroups) | **GET** /universe/groups/ | Get item groups
[**getUniverseGroupsGroupId**](UniverseApi.md#getUniverseGroupsGroupId) | **GET** /universe/groups/{group_id}/ | Get item group information
[**getUniverseMoonsMoonId**](UniverseApi.md#getUniverseMoonsMoonId) | **GET** /universe/moons/{moon_id}/ | Get moon information
[**getUniversePlanetsPlanetId**](UniverseApi.md#getUniversePlanetsPlanetId) | **GET** /universe/planets/{planet_id}/ | Get planet information
[**getUniverseRaces**](UniverseApi.md#getUniverseRaces) | **GET** /universe/races/ | Get character races
[**getUniverseRegions**](UniverseApi.md#getUniverseRegions) | **GET** /universe/regions/ | Get regions
[**getUniverseRegionsRegionId**](UniverseApi.md#getUniverseRegionsRegionId) | **GET** /universe/regions/{region_id}/ | Get region information
[**getUniverseStargatesStargateId**](UniverseApi.md#getUniverseStargatesStargateId) | **GET** /universe/stargates/{stargate_id}/ | Get stargate information
[**getUniverseStationsStationId**](UniverseApi.md#getUniverseStationsStationId) | **GET** /universe/stations/{station_id}/ | Get station information
[**getUniverseStructures**](UniverseApi.md#getUniverseStructures) | **GET** /universe/structures/ | List all public structures
[**getUniverseStructuresStructureId**](UniverseApi.md#getUniverseStructuresStructureId) | **GET** /universe/structures/{structure_id}/ | Get structure information
[**getUniverseSystemJumps**](UniverseApi.md#getUniverseSystemJumps) | **GET** /universe/system_jumps/ | Get system jumps
[**getUniverseSystemKills**](UniverseApi.md#getUniverseSystemKills) | **GET** /universe/system_kills/ | Get system kills
[**getUniverseSystems**](UniverseApi.md#getUniverseSystems) | **GET** /universe/systems/ | Get solar systems
[**getUniverseSystemsSystemId**](UniverseApi.md#getUniverseSystemsSystemId) | **GET** /universe/systems/{system_id}/ | Get solar system information
[**getUniverseTypes**](UniverseApi.md#getUniverseTypes) | **GET** /universe/types/ | Get types
[**getUniverseTypesTypeId**](UniverseApi.md#getUniverseTypesTypeId) | **GET** /universe/types/{type_id}/ | Get type information
[**postUniverseNames**](UniverseApi.md#postUniverseNames) | **POST** /universe/names/ | Get names and categories for a set of ID&#39;s


# **getUniverseBloodlines**
> \nullx27\ESI\Models\GetUniverseBloodlines200Ok[] getUniverseBloodlines($datasource, $language, $userAgent, $xUserAgent)

Get bloodlines

Get a list of bloodlines  ---  Alternate route: `/v1/universe/bloodlines/`  Alternate route: `/legacy/universe/bloodlines/`  Alternate route: `/dev/universe/bloodlines/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseBloodlines($datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseBloodlines: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseBloodlines200Ok[]**](../Model/GetUniverseBloodlines200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseCategories**
> int[] getUniverseCategories($datasource, $userAgent, $xUserAgent)

Get item categories

Get a list of item categories  ---  Alternate route: `/v1/universe/categories/`  Alternate route: `/legacy/universe/categories/`  Alternate route: `/dev/universe/categories/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseCategories($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseCategories: ', $e->getMessage(), PHP_EOL;
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

# **getUniverseCategoriesCategoryId**
> \nullx27\ESI\Models\GetUniverseCategoriesCategoryIdOk getUniverseCategoriesCategoryId($categoryId, $datasource, $language, $userAgent, $xUserAgent)

Get item category information

Get information of an item category  ---  Alternate route: `/v1/universe/categories/{category_id}/`  Alternate route: `/legacy/universe/categories/{category_id}/`  Alternate route: `/dev/universe/categories/{category_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$categoryId = 56; // int | An Eve item category ID
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseCategoriesCategoryId($categoryId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseCategoriesCategoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **int**| An Eve item category ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseCategoriesCategoryIdOk**](../Model/GetUniverseCategoriesCategoryIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseConstellations**
> int[] getUniverseConstellations($datasource, $userAgent, $xUserAgent)

Get constellations

Get a list of constellations  ---  Alternate route: `/v1/universe/constellations/`  Alternate route: `/legacy/universe/constellations/`  Alternate route: `/dev/universe/constellations/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseConstellations($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseConstellations: ', $e->getMessage(), PHP_EOL;
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

# **getUniverseConstellationsConstellationId**
> \nullx27\ESI\Models\GetUniverseConstellationsConstellationIdOk getUniverseConstellationsConstellationId($constellationId, $datasource, $language, $userAgent, $xUserAgent)

Get constellation information

Get information on a constellation  ---  Alternate route: `/v1/universe/constellations/{constellation_id}/`  Alternate route: `/legacy/universe/constellations/{constellation_id}/`  Alternate route: `/dev/universe/constellations/{constellation_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$constellationId = 56; // int | constellation_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseConstellationsConstellationId($constellationId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseConstellationsConstellationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constellationId** | **int**| constellation_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseConstellationsConstellationIdOk**](../Model/GetUniverseConstellationsConstellationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseFactions**
> \nullx27\ESI\Models\GetUniverseFactions200Ok[] getUniverseFactions($datasource, $language, $userAgent, $xUserAgent)

Get factions

Get a list of factions  ---  Alternate route: `/v1/universe/factions/`  Alternate route: `/legacy/universe/factions/`  Alternate route: `/dev/universe/factions/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseFactions($datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseFactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseFactions200Ok[]**](../Model/GetUniverseFactions200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseGraphics**
> int[] getUniverseGraphics($datasource, $userAgent, $xUserAgent)

Get graphics

Get a list of graphics  ---  Alternate route: `/v1/universe/graphics/`  Alternate route: `/legacy/universe/graphics/`  Alternate route: `/dev/universe/graphics/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseGraphics($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGraphics: ', $e->getMessage(), PHP_EOL;
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

# **getUniverseGraphicsGraphicId**
> \nullx27\ESI\Models\GetUniverseGraphicsGraphicIdOk getUniverseGraphicsGraphicId($graphicId, $datasource, $userAgent, $xUserAgent)

Get graphic information

Get information on a graphic  ---  Alternate route: `/v1/universe/graphics/{graphic_id}/`  Alternate route: `/legacy/universe/graphics/{graphic_id}/`  Alternate route: `/dev/universe/graphics/{graphic_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$graphicId = 56; // int | graphic_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseGraphicsGraphicId($graphicId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGraphicsGraphicId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **graphicId** | **int**| graphic_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseGraphicsGraphicIdOk**](../Model/GetUniverseGraphicsGraphicIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseGroups**
> int[] getUniverseGroups($datasource, $page, $userAgent, $xUserAgent)

Get item groups

Get a list of item groups  ---  Alternate route: `/v1/universe/groups/`  Alternate route: `/legacy/universe/groups/`  Alternate route: `/dev/universe/groups/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$page = 56; // int | Which page to query
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseGroups($datasource, $page, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page to query | [optional]
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

# **getUniverseGroupsGroupId**
> \nullx27\ESI\Models\GetUniverseGroupsGroupIdOk getUniverseGroupsGroupId($groupId, $datasource, $language, $userAgent, $xUserAgent)

Get item group information

Get information on an item group  ---  Alternate route: `/v1/universe/groups/{group_id}/`  Alternate route: `/legacy/universe/groups/{group_id}/`  Alternate route: `/dev/universe/groups/{group_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$groupId = 56; // int | An Eve item group ID
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseGroupsGroupId($groupId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseGroupsGroupId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| An Eve item group ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseGroupsGroupIdOk**](../Model/GetUniverseGroupsGroupIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseMoonsMoonId**
> \nullx27\ESI\Models\GetUniverseMoonsMoonIdOk getUniverseMoonsMoonId($moonId, $datasource, $userAgent, $xUserAgent)

Get moon information

Get information on a moon  ---  Alternate route: `/v1/universe/moons/{moon_id}/`  Alternate route: `/legacy/universe/moons/{moon_id}/`  Alternate route: `/dev/universe/moons/{moon_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$moonId = 56; // int | moon_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseMoonsMoonId($moonId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseMoonsMoonId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **moonId** | **int**| moon_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseMoonsMoonIdOk**](../Model/GetUniverseMoonsMoonIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniversePlanetsPlanetId**
> \nullx27\ESI\Models\GetUniversePlanetsPlanetIdOk getUniversePlanetsPlanetId($planetId, $datasource, $userAgent, $xUserAgent)

Get planet information

Get information on a planet  ---  Alternate route: `/v1/universe/planets/{planet_id}/`  Alternate route: `/legacy/universe/planets/{planet_id}/`  Alternate route: `/dev/universe/planets/{planet_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$planetId = 56; // int | planet_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniversePlanetsPlanetId($planetId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniversePlanetsPlanetId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **planetId** | **int**| planet_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniversePlanetsPlanetIdOk**](../Model/GetUniversePlanetsPlanetIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseRaces**
> \nullx27\ESI\Models\GetUniverseRaces200Ok[] getUniverseRaces($datasource, $language, $userAgent, $xUserAgent)

Get character races

Get a list of character races  ---  Alternate route: `/v1/universe/races/`  Alternate route: `/legacy/universe/races/`  Alternate route: `/dev/universe/races/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseRaces($datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseRaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseRaces200Ok[]**](../Model/GetUniverseRaces200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseRegions**
> int[] getUniverseRegions($datasource, $userAgent, $xUserAgent)

Get regions

Get a list of regions  ---  Alternate route: `/v1/universe/regions/`  Alternate route: `/legacy/universe/regions/`  Alternate route: `/dev/universe/regions/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseRegions($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseRegions: ', $e->getMessage(), PHP_EOL;
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

# **getUniverseRegionsRegionId**
> \nullx27\ESI\Models\GetUniverseRegionsRegionIdOk getUniverseRegionsRegionId($regionId, $datasource, $language, $userAgent, $xUserAgent)

Get region information

Get information on a region  ---  Alternate route: `/v1/universe/regions/{region_id}/`  Alternate route: `/legacy/universe/regions/{region_id}/`  Alternate route: `/dev/universe/regions/{region_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$regionId = 56; // int | region_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseRegionsRegionId($regionId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseRegionsRegionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **regionId** | **int**| region_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseRegionsRegionIdOk**](../Model/GetUniverseRegionsRegionIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseStargatesStargateId**
> \nullx27\ESI\Models\GetUniverseStargatesStargateIdOk getUniverseStargatesStargateId($stargateId, $datasource, $userAgent, $xUserAgent)

Get stargate information

Get information on a stargate  ---  Alternate route: `/v1/universe/stargates/{stargate_id}/`  Alternate route: `/legacy/universe/stargates/{stargate_id}/`  Alternate route: `/dev/universe/stargates/{stargate_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$stargateId = 56; // int | stargate_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseStargatesStargateId($stargateId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStargatesStargateId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stargateId** | **int**| stargate_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseStargatesStargateIdOk**](../Model/GetUniverseStargatesStargateIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseStationsStationId**
> \nullx27\ESI\Models\GetUniverseStationsStationIdOk getUniverseStationsStationId($stationId, $datasource, $userAgent, $xUserAgent)

Get station information

Get information on a station  ---  Alternate route: `/v2/universe/stations/{station_id}/`  Alternate route: `/dev/universe/stations/{station_id}/`   ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$stationId = 56; // int | station_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseStationsStationId($stationId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStationsStationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stationId** | **int**| station_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseStationsStationIdOk**](../Model/GetUniverseStationsStationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseStructures**
> int[] getUniverseStructures($datasource, $userAgent, $xUserAgent)

List all public structures

List all public structures  ---  Alternate route: `/v1/universe/structures/`  Alternate route: `/legacy/universe/structures/`  Alternate route: `/dev/universe/structures/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseStructures($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStructures: ', $e->getMessage(), PHP_EOL;
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

# **getUniverseStructuresStructureId**
> \nullx27\ESI\Models\GetUniverseStructuresStructureIdOk getUniverseStructuresStructureId($structureId, $datasource, $token, $userAgent, $xUserAgent)

Get structure information

Returns information on requested structure, if you are on the ACL. Otherwise, returns \"Forbidden\" for all inputs.  ---  Alternate route: `/v1/universe/structures/{structure_id}/`  Alternate route: `/legacy/universe/structures/{structure_id}/`  Alternate route: `/dev/universe/structures/{structure_id}/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$structureId = 789; // int | An Eve structure ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use, if preferred over a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseStructuresStructureId($structureId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseStructuresStructureId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **structureId** | **int**| An Eve structure ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use, if preferred over a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseStructuresStructureIdOk**](../Model/GetUniverseStructuresStructureIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseSystemJumps**
> \nullx27\ESI\Models\GetUniverseSystemJumps200Ok[] getUniverseSystemJumps($datasource, $userAgent, $xUserAgent)

Get system jumps

Get the number of jumps in solar systems within the last hour, excluding wormhole space. Only systems with jumps will be listed  ---  Alternate route: `/v1/universe/system_jumps/`  Alternate route: `/legacy/universe/system_jumps/`  Alternate route: `/dev/universe/system_jumps/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseSystemJumps($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystemJumps: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\Models\GetUniverseSystemJumps200Ok[]**](../Model/GetUniverseSystemJumps200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseSystemKills**
> \nullx27\ESI\Models\GetUniverseSystemKills200Ok[] getUniverseSystemKills($datasource, $userAgent, $xUserAgent)

Get system kills

Get the number of ship, pod and NPC kills per solar system within the last hour, excluding wormhole space. Only systems with kills will be listed  ---  Alternate route: `/v1/universe/system_kills/`  Alternate route: `/legacy/universe/system_kills/`  Alternate route: `/dev/universe/system_kills/`   ---  This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseSystemKills($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystemKills: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\Models\GetUniverseSystemKills200Ok[]**](../Model/GetUniverseSystemKills200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseSystems**
> int[] getUniverseSystems($datasource, $userAgent, $xUserAgent)

Get solar systems

Get a list of solar systems  ---  Alternate route: `/v1/universe/systems/`  Alternate route: `/legacy/universe/systems/`  Alternate route: `/dev/universe/systems/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseSystems($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystems: ', $e->getMessage(), PHP_EOL;
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

# **getUniverseSystemsSystemId**
> \nullx27\ESI\Models\GetUniverseSystemsSystemIdOk getUniverseSystemsSystemId($systemId, $datasource, $language, $userAgent, $xUserAgent)

Get solar system information

Get information on a solar system  ---  Alternate route: `/v2/universe/systems/{system_id}/`  Alternate route: `/dev/universe/systems/{system_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$systemId = 56; // int | system_id integer
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseSystemsSystemId($systemId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseSystemsSystemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **systemId** | **int**| system_id integer |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseSystemsSystemIdOk**](../Model/GetUniverseSystemsSystemIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniverseTypes**
> int[] getUniverseTypes($datasource, $page, $userAgent, $xUserAgent)

Get types

Get a list of type ids  ---  Alternate route: `/v1/universe/types/`  Alternate route: `/legacy/universe/types/`  Alternate route: `/dev/universe/types/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$datasource = "tranquility"; // string | The server name you would like data from
$page = 56; // int | Which page to query
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseTypes($datasource, $page, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page to query | [optional]
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

# **getUniverseTypesTypeId**
> \nullx27\ESI\Models\GetUniverseTypesTypeIdOk getUniverseTypesTypeId($typeId, $datasource, $language, $userAgent, $xUserAgent)

Get type information

Get information on a type  ---  Alternate route: `/v2/universe/types/{type_id}/`   ---  This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$typeId = 56; // int | An Eve item type ID
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getUniverseTypesTypeId($typeId, $datasource, $language, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->getUniverseTypesTypeId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **typeId** | **int**| An Eve item type ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\GetUniverseTypesTypeIdOk**](../Model/GetUniverseTypesTypeIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUniverseNames**
> \nullx27\ESI\Models\PostUniverseNames200Ok[] postUniverseNames($ids, $datasource, $userAgent, $xUserAgent)

Get names and categories for a set of ID's

Resolve a set of IDs to names and categories. Supported ID's for resolving are: Characters, Corporations, Alliances, Stations, Solar Systems, Constellations, Regions, Types.  ---  Alternate route: `/v2/universe/names/`  Alternate route: `/dev/universe/names/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\UniverseApi();
$ids = array(new int[]()); // int[] | The ids to resolve
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->postUniverseNames($ids, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniverseApi->postUniverseNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | **int[]**| The ids to resolve |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27\ESI\Models\PostUniverseNames200Ok[]**](../Model/PostUniverseNames200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

