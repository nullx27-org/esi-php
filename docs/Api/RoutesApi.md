# nullx27\ESI\RoutesApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRouteOriginDestination**](RoutesApi.md#getRouteOriginDestination) | **GET** /route/{origin}/{destination}/ | Get route


# **getRouteOriginDestination**
> int[] getRouteOriginDestination($destination, $origin, $avoid, $connections, $datasource, $flag, $userAgent, $xUserAgent)

Get route

Get the systems between origin and destination  --- Alternate route: `/dev/route/{origin}/{destination}/`  Alternate route: `/legacy/route/{origin}/{destination}/`  Alternate route: `/v1/route/{origin}/{destination}/`  --- This route is cached for up to 86400 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new nullx27\ESI\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destination = 56; // int | destination solar system ID
$origin = 56; // int | origin solar system ID
$avoid = array(56); // int[] | avoid solar system ID(s)
$connections = array(new \nullx27\ESI\nullx27\ESI\Models\int[]()); // int[][] | connected solar system pairs
$datasource = "tranquility"; // string | The server name you would like data from
$flag = "shortest"; // string | route security preference
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getRouteOriginDestination($destination, $origin, $avoid, $connections, $datasource, $flag, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->getRouteOriginDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination** | **int**| destination solar system ID |
 **origin** | **int**| origin solar system ID |
 **avoid** | [**int[]**](../Model/int.md)| avoid solar system ID(s) | [optional]
 **connections** | [**int[][]**](../Model/int[].md)| connected solar system pairs | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **flag** | **string**| route security preference | [optional] [default to shortest]
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

