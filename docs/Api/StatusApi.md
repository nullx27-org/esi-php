# nullx27\ESI\StatusApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatus**](StatusApi.md#getStatus) | **GET** /status/ | Retrieve the uptime and player counts


# **getStatus**
> \nullx27\ESI\Models\GetStatusOk getStatus($datasource, $userAgent, $xUserAgent)

Retrieve the uptime and player counts

EVE Server status  ---  Alternate route: `/v1/status/`  Alternate route: `/legacy/status/`  Alternate route: `/dev/status/`   ---  This route is cached for up to 30 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new nullx27\ESI\Api\StatusApi();
$datasource = "tranquility"; // string | The server name you would like data from
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $api_instance->getStatus($datasource, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->getStatus: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27\ESI\Models\GetStatusOk**](../Model/GetStatusOk.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

