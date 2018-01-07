# nullx27\ESI\SovereigntyApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSovereigntyCampaigns**](SovereigntyApi.md#getSovereigntyCampaigns) | **GET** /sovereignty/campaigns/ | List sovereignty campaigns
[**getSovereigntyMap**](SovereigntyApi.md#getSovereigntyMap) | **GET** /sovereignty/map/ | List sovereignty of systems
[**getSovereigntyStructures**](SovereigntyApi.md#getSovereigntyStructures) | **GET** /sovereignty/structures/ | List sovereignty structures


# **getSovereigntyCampaigns**
> \nullx27\ESI\nullx27\ESI\Models\GetSovereigntyCampaigns200Ok[] getSovereigntyCampaigns($datasource, $userAgent, $xUserAgent)

List sovereignty campaigns

Shows sovereignty data for campaigns.  --- Alternate route: `/dev/sovereignty/campaigns/`  Alternate route: `/legacy/sovereignty/campaigns/`  Alternate route: `/v1/sovereignty/campaigns/`  --- This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27\ESI\Api\SovereigntyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getSovereigntyCampaigns($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SovereigntyApi->getSovereigntyCampaigns: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetSovereigntyCampaigns200Ok[]**](../Model/GetSovereigntyCampaigns200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSovereigntyMap**
> \nullx27\ESI\nullx27\ESI\Models\GetSovereigntyMap200Ok[] getSovereigntyMap($datasource, $userAgent, $xUserAgent)

List sovereignty of systems

Shows sovereignty information for solar systems  --- Alternate route: `/dev/sovereignty/map/`  Alternate route: `/legacy/sovereignty/map/`  Alternate route: `/v1/sovereignty/map/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27\ESI\Api\SovereigntyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getSovereigntyMap($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SovereigntyApi->getSovereigntyMap: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetSovereigntyMap200Ok[]**](../Model/GetSovereigntyMap200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSovereigntyStructures**
> \nullx27\ESI\nullx27\ESI\Models\GetSovereigntyStructures200Ok[] getSovereigntyStructures($datasource, $userAgent, $xUserAgent)

List sovereignty structures

Shows sovereignty data for structures.  --- Alternate route: `/dev/sovereignty/structures/`  Alternate route: `/legacy/sovereignty/structures/`  Alternate route: `/v1/sovereignty/structures/`  --- This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27\ESI\Api\SovereigntyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getSovereigntyStructures($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SovereigntyApi->getSovereigntyStructures: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\nullx27\ESI\Models\GetSovereigntyStructures200Ok[]**](../Model/GetSovereigntyStructures200Ok.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

