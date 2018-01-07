# nullx27ESI\CorporationApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCorporationsCorporationId**](CorporationApi.md#getCorporationsCorporationId) | **GET** /corporations/{corporation_id}/ | Get corporation information
[**getCorporationsCorporationIdAlliancehistory**](CorporationApi.md#getCorporationsCorporationIdAlliancehistory) | **GET** /corporations/{corporation_id}/alliancehistory/ | Get alliance history
[**getCorporationsCorporationIdBlueprints**](CorporationApi.md#getCorporationsCorporationIdBlueprints) | **GET** /corporations/{corporation_id}/blueprints/ | Get corporation blueprints
[**getCorporationsCorporationIdContainersLogs**](CorporationApi.md#getCorporationsCorporationIdContainersLogs) | **GET** /corporations/{corporation_id}/containers/logs/ | Get all corporation ALSC logs
[**getCorporationsCorporationIdDivisions**](CorporationApi.md#getCorporationsCorporationIdDivisions) | **GET** /corporations/{corporation_id}/divisions/ | Get corporation divisions
[**getCorporationsCorporationIdFacilities**](CorporationApi.md#getCorporationsCorporationIdFacilities) | **GET** /corporations/{corporation_id}/facilities/ | Get corporation facilities
[**getCorporationsCorporationIdIcons**](CorporationApi.md#getCorporationsCorporationIdIcons) | **GET** /corporations/{corporation_id}/icons/ | Get corporation icon
[**getCorporationsCorporationIdMedals**](CorporationApi.md#getCorporationsCorporationIdMedals) | **GET** /corporations/{corporation_id}/medals/ | Get corporation medals
[**getCorporationsCorporationIdMedalsIssued**](CorporationApi.md#getCorporationsCorporationIdMedalsIssued) | **GET** /corporations/{corporation_id}/medals/issued/ | Get corporation issued medals
[**getCorporationsCorporationIdMembers**](CorporationApi.md#getCorporationsCorporationIdMembers) | **GET** /corporations/{corporation_id}/members/ | Get corporation members
[**getCorporationsCorporationIdMembersLimit**](CorporationApi.md#getCorporationsCorporationIdMembersLimit) | **GET** /corporations/{corporation_id}/members/limit/ | Get corporation member limit
[**getCorporationsCorporationIdMembersTitles**](CorporationApi.md#getCorporationsCorporationIdMembersTitles) | **GET** /corporations/{corporation_id}/members/titles/ | Get corporation&#39;s members&#39; titles
[**getCorporationsCorporationIdMembertracking**](CorporationApi.md#getCorporationsCorporationIdMembertracking) | **GET** /corporations/{corporation_id}/membertracking/ | Track corporation members
[**getCorporationsCorporationIdOutposts**](CorporationApi.md#getCorporationsCorporationIdOutposts) | **GET** /corporations/{corporation_id}/outposts/ | Get corporation outposts
[**getCorporationsCorporationIdOutpostsOutpostId**](CorporationApi.md#getCorporationsCorporationIdOutpostsOutpostId) | **GET** /corporations/{corporation_id}/outposts/{outpost_id}/ | Get corporation outpost details
[**getCorporationsCorporationIdRoles**](CorporationApi.md#getCorporationsCorporationIdRoles) | **GET** /corporations/{corporation_id}/roles/ | Get corporation member roles
[**getCorporationsCorporationIdRolesHistory**](CorporationApi.md#getCorporationsCorporationIdRolesHistory) | **GET** /corporations/{corporation_id}/roles/history/ | Get corporation member roles history
[**getCorporationsCorporationIdShareholders**](CorporationApi.md#getCorporationsCorporationIdShareholders) | **GET** /corporations/{corporation_id}/shareholders/ | Get corporation members
[**getCorporationsCorporationIdStandings**](CorporationApi.md#getCorporationsCorporationIdStandings) | **GET** /corporations/{corporation_id}/standings/ | Get corporation standings
[**getCorporationsCorporationIdStarbases**](CorporationApi.md#getCorporationsCorporationIdStarbases) | **GET** /corporations/{corporation_id}/starbases/ | Get corporation starbases (POSes)
[**getCorporationsCorporationIdStarbasesStarbaseId**](CorporationApi.md#getCorporationsCorporationIdStarbasesStarbaseId) | **GET** /corporations/{corporation_id}/starbases/{starbase_id}/ | Get starbase (POS) detail
[**getCorporationsCorporationIdStructures**](CorporationApi.md#getCorporationsCorporationIdStructures) | **GET** /corporations/{corporation_id}/structures/ | Get corporation structures
[**getCorporationsCorporationIdTitles**](CorporationApi.md#getCorporationsCorporationIdTitles) | **GET** /corporations/{corporation_id}/titles/ | Get corporation titles
[**getCorporationsNames**](CorporationApi.md#getCorporationsNames) | **GET** /corporations/names/ | Get corporation names
[**getCorporationsNpccorps**](CorporationApi.md#getCorporationsNpccorps) | **GET** /corporations/npccorps/ | Get npc corporations
[**putCorporationsCorporationIdStructuresStructureId**](CorporationApi.md#putCorporationsCorporationIdStructuresStructureId) | **PUT** /corporations/{corporation_id}/structures/{structure_id}/ | Update structure vulnerability schedule


# **getCorporationsCorporationId**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOk getCorporationsCorporationId($corporationId, $datasource, $userAgent, $xUserAgent)

Get corporation information

Public information about a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/`  Alternate route: `/v4/corporations/{corporation_id}/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationId($corporationId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOk**](../Model/GetCorporationsCorporationIdOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdAlliancehistory**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdAlliancehistory200Ok[] getCorporationsCorporationIdAlliancehistory($corporationId, $datasource, $userAgent, $xUserAgent)

Get alliance history

Get a list of all the alliances a corporation has been a member of  --- Alternate route: `/dev/corporations/{corporation_id}/alliancehistory/`  Alternate route: `/v2/corporations/{corporation_id}/alliancehistory/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdAlliancehistory($corporationId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdAlliancehistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdAlliancehistory200Ok[]**](../Model/GetCorporationsCorporationIdAlliancehistory200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdBlueprints**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdBlueprints200Ok[] getCorporationsCorporationIdBlueprints($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation blueprints

Returns a list of blueprints the corporation owns  --- Alternate route: `/dev/corporations/{corporation_id}/blueprints/`  Alternate route: `/legacy/corporations/{corporation_id}/blueprints/`  Alternate route: `/v1/corporations/{corporation_id}/blueprints/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdBlueprints($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdBlueprints: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdBlueprints200Ok[]**](../Model/GetCorporationsCorporationIdBlueprints200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContainersLogs**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContainersLogs200Ok[] getCorporationsCorporationIdContainersLogs($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get all corporation ALSC logs

Returns logs recorded in the past seven days from all audit log secure containers (ALSC) owned by a given corporation  --- Alternate route: `/dev/corporations/{corporation_id}/containers/logs/`  Alternate route: `/legacy/corporations/{corporation_id}/containers/logs/`  Alternate route: `/v1/corporations/{corporation_id}/containers/logs/`  --- This route is cached for up to 600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdContainersLogs($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdContainersLogs: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContainersLogs200Ok[]**](../Model/GetCorporationsCorporationIdContainersLogs200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdDivisions**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdDivisionsOk getCorporationsCorporationIdDivisions($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation divisions

Return corporation hangar and wallet division names, only show if a division is not using the default name  --- Alternate route: `/dev/corporations/{corporation_id}/divisions/`  Alternate route: `/legacy/corporations/{corporation_id}/divisions/`  Alternate route: `/v1/corporations/{corporation_id}/divisions/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdDivisions($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdDivisions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdDivisionsOk**](../Model/GetCorporationsCorporationIdDivisionsOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdFacilities**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdFacilities200Ok[] getCorporationsCorporationIdFacilities($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation facilities

Return a corporation's facilities  --- Alternate route: `/dev/corporations/{corporation_id}/facilities/`  Alternate route: `/legacy/corporations/{corporation_id}/facilities/`  Alternate route: `/v1/corporations/{corporation_id}/facilities/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Factory_Manager

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdFacilities($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdFacilities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdFacilities200Ok[]**](../Model/GetCorporationsCorporationIdFacilities200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdIcons**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdIconsOk getCorporationsCorporationIdIcons($corporationId, $datasource, $userAgent, $xUserAgent)

Get corporation icon

Get the icon urls for a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/icons/`  Alternate route: `/legacy/corporations/{corporation_id}/icons/`  Alternate route: `/v1/corporations/{corporation_id}/icons/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdIcons($corporationId, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdIcons: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdIconsOk**](../Model/GetCorporationsCorporationIdIconsOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMedals**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMedals200Ok[] getCorporationsCorporationIdMedals($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation medals

Returns a corporation's medals  --- Alternate route: `/dev/corporations/{corporation_id}/medals/`  Alternate route: `/legacy/corporations/{corporation_id}/medals/`  Alternate route: `/v1/corporations/{corporation_id}/medals/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMedals($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMedals: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMedals200Ok[]**](../Model/GetCorporationsCorporationIdMedals200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMedalsIssued**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMedalsIssued200Ok[] getCorporationsCorporationIdMedalsIssued($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation issued medals

Returns medals issued by a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/medals/issued/`  Alternate route: `/legacy/corporations/{corporation_id}/medals/issued/`  Alternate route: `/v1/corporations/{corporation_id}/medals/issued/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdMedalsIssued($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMedalsIssued: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMedalsIssued200Ok[]**](../Model/GetCorporationsCorporationIdMedalsIssued200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMembers**
> int[] getCorporationsCorporationIdMembers($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation members

Return the current member list of a corporation, the token's character need to be a member of the corporation.  --- Alternate route: `/dev/corporations/{corporation_id}/members/`  Alternate route: `/v3/corporations/{corporation_id}/members/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdMembers($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMembersLimit**
> int getCorporationsCorporationIdMembersLimit($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation member limit

Return a corporation's member limit, not including CEO himself  --- Alternate route: `/dev/corporations/{corporation_id}/members/limit/`  Alternate route: `/legacy/corporations/{corporation_id}/members/limit/`  Alternate route: `/v1/corporations/{corporation_id}/members/limit/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdMembersLimit($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembersLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

**int**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMembersTitles**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMembersTitles200Ok[] getCorporationsCorporationIdMembersTitles($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation's members' titles

Returns a corporation's members' titles  --- Alternate route: `/dev/corporations/{corporation_id}/members/titles/`  Alternate route: `/legacy/corporations/{corporation_id}/members/titles/`  Alternate route: `/v1/corporations/{corporation_id}/members/titles/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdMembersTitles($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembersTitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMembersTitles200Ok[]**](../Model/GetCorporationsCorporationIdMembersTitles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdMembertracking**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMembertracking200Ok[] getCorporationsCorporationIdMembertracking($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Track corporation members

Returns additional information about a corporation's members which helps tracking their activities  --- Alternate route: `/dev/corporations/{corporation_id}/membertracking/`  Alternate route: `/legacy/corporations/{corporation_id}/membertracking/`  Alternate route: `/v1/corporations/{corporation_id}/membertracking/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdMembertracking($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdMembertracking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdMembertracking200Ok[]**](../Model/GetCorporationsCorporationIdMembertracking200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdOutposts**
> int[] getCorporationsCorporationIdOutposts($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation outposts

Get a list of corporation outpost IDs Note: This endpoint will be removed once outposts are migrated to Citadels as talked about in this blog: https://community.eveonline.com/news/dev-blogs/the-next-steps-in-structure-transition/  --- Alternate route: `/dev/corporations/{corporation_id}/outposts/`  Alternate route: `/legacy/corporations/{corporation_id}/outposts/`  Alternate route: `/v1/corporations/{corporation_id}/outposts/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdOutposts($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdOutposts: ', $e->getMessage(), PHP_EOL;
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

**int[]**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdOutpostsOutpostId**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdOk getCorporationsCorporationIdOutpostsOutpostId($corporationId, $outpostId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation outpost details

Get details about a given outpost. Note: This endpoint will be removed once outposts are migrated to Citadels as talked about in this blog: https://community.eveonline.com/news/dev-blogs/the-next-steps-in-structure-transition/  --- Alternate route: `/dev/corporations/{corporation_id}/outposts/{outpost_id}/`  Alternate route: `/legacy/corporations/{corporation_id}/outposts/{outpost_id}/`  Alternate route: `/v1/corporations/{corporation_id}/outposts/{outpost_id}/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$outpostId = 56; // int | A station (outpost) ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdOutpostsOutpostId($corporationId, $outpostId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdOutpostsOutpostId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **outpostId** | **int**| A station (outpost) ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdOutpostsOutpostIdOk**](../Model/GetCorporationsCorporationIdOutpostsOutpostIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdRoles**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdRoles200Ok[] getCorporationsCorporationIdRoles($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation member roles

Return the roles of all members if the character has the personnel manager role or any grantable role.  --- Alternate route: `/dev/corporations/{corporation_id}/roles/`  Alternate route: `/legacy/corporations/{corporation_id}/roles/`  Alternate route: `/v1/corporations/{corporation_id}/roles/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdRoles($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdRoles200Ok[]**](../Model/GetCorporationsCorporationIdRoles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdRolesHistory**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdRolesHistory200Ok[] getCorporationsCorporationIdRolesHistory($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation member roles history

Return how roles have changed for a coporation's members, up to a month  --- Alternate route: `/dev/corporations/{corporation_id}/roles/history/`  Alternate route: `/legacy/corporations/{corporation_id}/roles/history/`  Alternate route: `/v1/corporations/{corporation_id}/roles/history/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdRolesHistory($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdRolesHistory: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdRolesHistory200Ok[]**](../Model/GetCorporationsCorporationIdRolesHistory200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdShareholders**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdShareholders200Ok[] getCorporationsCorporationIdShareholders($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation members

Return the current member list of a corporation, the token's character need to be a member of the corporation.  --- Alternate route: `/dev/corporations/{corporation_id}/shareholders/`  Alternate route: `/legacy/corporations/{corporation_id}/shareholders/`  Alternate route: `/v1/corporations/{corporation_id}/shareholders/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdShareholders($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdShareholders: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdShareholders200Ok[]**](../Model/GetCorporationsCorporationIdShareholders200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdStandings**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStandings200Ok[] getCorporationsCorporationIdStandings($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation standings

Return corporation standings from agents, NPC corporations, and factions  --- Alternate route: `/dev/corporations/{corporation_id}/standings/`  Alternate route: `/legacy/corporations/{corporation_id}/standings/`  Alternate route: `/v1/corporations/{corporation_id}/standings/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdStandings($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStandings: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStandings200Ok[]**](../Model/GetCorporationsCorporationIdStandings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdStarbases**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbases200Ok[] getCorporationsCorporationIdStarbases($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation starbases (POSes)

Returns list of corporation starbases (POSes)  --- Alternate route: `/dev/corporations/{corporation_id}/starbases/`  Alternate route: `/legacy/corporations/{corporation_id}/starbases/`  Alternate route: `/v1/corporations/{corporation_id}/starbases/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
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
    $result = $apiInstance->getCorporationsCorporationIdStarbases($corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStarbases: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbases200Ok[]**](../Model/GetCorporationsCorporationIdStarbases200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdStarbasesStarbaseId**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbasesStarbaseIdOk getCorporationsCorporationIdStarbasesStarbaseId($corporationId, $starbaseId, $systemId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get starbase (POS) detail

Returns various settings and fuels of a starbase (POS)  --- Alternate route: `/dev/corporations/{corporation_id}/starbases/{starbase_id}/`  Alternate route: `/legacy/corporations/{corporation_id}/starbases/{starbase_id}/`  Alternate route: `/v1/corporations/{corporation_id}/starbases/{starbase_id}/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$starbaseId = 789; // int | An EVE starbase (POS) ID
$systemId = 56; // int | The solar system this starbase (POS) is located in,
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdStarbasesStarbaseId($corporationId, $starbaseId, $systemId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStarbasesStarbaseId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **starbaseId** | **int**| An EVE starbase (POS) ID |
 **systemId** | **int**| The solar system this starbase (POS) is located in, |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStarbasesStarbaseIdOk**](../Model/GetCorporationsCorporationIdStarbasesStarbaseIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdStructures**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructures200Ok[] getCorporationsCorporationIdStructures($corporationId, $datasource, $language, $page, $token, $userAgent, $xUserAgent)

Get corporation structures

Get a list of corporation structures  --- Alternate route: `/dev/corporations/{corporation_id}/structures/`  Alternate route: `/legacy/corporations/{corporation_id}/structures/`  Alternate route: `/v1/corporations/{corporation_id}/structures/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): StationManager

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$language = "en-us"; // string | Language to use in the response
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdStructures($corporationId, $datasource, $language, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdStructures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **language** | **string**| Language to use in the response | [optional] [default to en-us]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdStructures200Ok[]**](../Model/GetCorporationsCorporationIdStructures200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdTitles**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdTitles200Ok[] getCorporationsCorporationIdTitles($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation titles

Returns a corporation's titles  --- Alternate route: `/dev/corporations/{corporation_id}/titles/`  Alternate route: `/legacy/corporations/{corporation_id}/titles/`  Alternate route: `/v1/corporations/{corporation_id}/titles/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Director

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdTitles($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsCorporationIdTitles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdTitles200Ok[]**](../Model/GetCorporationsCorporationIdTitles200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsNames**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsNames200Ok[] getCorporationsNames($corporationIds, $datasource, $userAgent, $xUserAgent)

Get corporation names

Resolve a set of corporation IDs to corporation names  --- Alternate route: `/dev/corporations/names/`  Alternate route: `/v2/corporations/names/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$corporationIds = array(56); // int[] | A comma separated list of corporation IDs
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsNames($corporationIds, $datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationIds** | [**int[]**](../Model/int.md)| A comma separated list of corporation IDs |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsNames200Ok[]**](../Model/GetCorporationsNames200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsNpccorps**
> int[] getCorporationsNpccorps($datasource, $userAgent, $xUserAgent)

Get npc corporations

Get a list of npc corporations  --- Alternate route: `/dev/corporations/npccorps/`  Alternate route: `/legacy/corporations/npccorps/`  Alternate route: `/v1/corporations/npccorps/`  --- This route expires daily at 11:05

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsNpccorps($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->getCorporationsNpccorps: ', $e->getMessage(), PHP_EOL;
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

# **putCorporationsCorporationIdStructuresStructureId**
> putCorporationsCorporationIdStructuresStructureId($corporationId, $newSchedule, $structureId, $datasource, $token, $userAgent, $xUserAgent)

Update structure vulnerability schedule

Update the vulnerability window schedule of a corporation structure  --- Alternate route: `/dev/corporations/{corporation_id}/structures/{structure_id}/`  Alternate route: `/legacy/corporations/{corporation_id}/structures/{structure_id}/`  Alternate route: `/v1/corporations/{corporation_id}/structures/{structure_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CorporationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$newSchedule = array(new \nullx27ESI\nullx27\ESI\Models\PutCorporationsCorporationIdStructuresStructureIdNewSchedule()); // \nullx27ESI\nullx27\ESI\Models\PutCorporationsCorporationIdStructuresStructureIdNewSchedule[] | New vulnerability window schedule for the structure
$structureId = 789; // int | A structure ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putCorporationsCorporationIdStructuresStructureId($corporationId, $newSchedule, $structureId, $datasource, $token, $userAgent, $xUserAgent);
} catch (Exception $e) {
    echo 'Exception when calling CorporationApi->putCorporationsCorporationIdStructuresStructureId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **newSchedule** | [**\nullx27ESI\nullx27\ESI\Models\PutCorporationsCorporationIdStructuresStructureIdNewSchedule[]**](../Model/PutCorporationsCorporationIdStructuresStructureIdNewSchedule.md)| New vulnerability window schedule for the structure |
 **structureId** | **int**| A structure ID |
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

