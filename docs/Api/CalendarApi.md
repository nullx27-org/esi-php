# nullx27ESI\CalendarApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdCalendar**](CalendarApi.md#getCharactersCharacterIdCalendar) | **GET** /characters/{character_id}/calendar/ | List calendar event summaries
[**getCharactersCharacterIdCalendarEventId**](CalendarApi.md#getCharactersCharacterIdCalendarEventId) | **GET** /characters/{character_id}/calendar/{event_id}/ | Get an event
[**getCharactersCharacterIdCalendarEventIdAttendees**](CalendarApi.md#getCharactersCharacterIdCalendarEventIdAttendees) | **GET** /characters/{character_id}/calendar/{event_id}/attendees/ | Get attendees
[**putCharactersCharacterIdCalendarEventId**](CalendarApi.md#putCharactersCharacterIdCalendarEventId) | **PUT** /characters/{character_id}/calendar/{event_id}/ | Respond to an event


# **getCharactersCharacterIdCalendar**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdCalendar200Ok[] getCharactersCharacterIdCalendar($characterId, $datasource, $fromEvent, $token, $userAgent, $xUserAgent)

List calendar event summaries

Get 50 event summaries from the calendar. If no from_event ID is given, the resource will return the next 50 chronological event summaries from now. If a from_event ID is specified, it will return the next 50 chronological event summaries from after that event.  --- Alternate route: `/dev/characters/{character_id}/calendar/`  Alternate route: `/legacy/characters/{character_id}/calendar/`  Alternate route: `/v1/characters/{character_id}/calendar/`  --- This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$fromEvent = 56; // int | The event ID to retrieve events from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdCalendar($characterId, $datasource, $fromEvent, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCharactersCharacterIdCalendar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **fromEvent** | **int**| The event ID to retrieve events from | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdCalendar200Ok[]**](../Model/GetCharactersCharacterIdCalendar200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdCalendarEventId**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdCalendarEventIdOk getCharactersCharacterIdCalendarEventId($characterId, $eventId, $datasource, $token, $userAgent, $xUserAgent)

Get an event

Get all the information for a specific event  --- Alternate route: `/dev/characters/{character_id}/calendar/{event_id}/`  Alternate route: `/v3/characters/{character_id}/calendar/{event_id}/`  --- This route is cached for up to 5 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$eventId = 56; // int | The id of the event requested
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdCalendarEventId($characterId, $eventId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCharactersCharacterIdCalendarEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **eventId** | **int**| The id of the event requested |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdCalendarEventIdOk**](../Model/GetCharactersCharacterIdCalendarEventIdOk.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdCalendarEventIdAttendees**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[] getCharactersCharacterIdCalendarEventIdAttendees($characterId, $eventId, $datasource, $token, $userAgent, $xUserAgent)

Get attendees

Get all invited attendees for a given event  --- Alternate route: `/dev/characters/{character_id}/calendar/{event_id}/attendees/`  Alternate route: `/legacy/characters/{character_id}/calendar/{event_id}/attendees/`  Alternate route: `/v1/characters/{character_id}/calendar/{event_id}/attendees/`  --- This route is cached for up to 600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$eventId = 56; // int | The id of the event requested
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdCalendarEventIdAttendees($characterId, $eventId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->getCharactersCharacterIdCalendarEventIdAttendees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **eventId** | **int**| The id of the event requested |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdCalendarEventIdAttendees200Ok[]**](../Model/GetCharactersCharacterIdCalendarEventIdAttendees200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCharactersCharacterIdCalendarEventId**
> putCharactersCharacterIdCalendarEventId($characterId, $eventId, $response, $datasource, $token, $userAgent, $xUserAgent)

Respond to an event

Set your response status to an event  --- Alternate route: `/dev/characters/{character_id}/calendar/{event_id}/`  Alternate route: `/v3/characters/{character_id}/calendar/{event_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\CalendarApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$eventId = 56; // int | The ID of the event requested
$response = new \nullx27ESI\nullx27\ESI\Models\PutCharactersCharacterIdCalendarEventIdResponse(); // \nullx27ESI\nullx27\ESI\Models\PutCharactersCharacterIdCalendarEventIdResponse | The response value to set, overriding current value.
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $apiInstance->putCharactersCharacterIdCalendarEventId($characterId, $eventId, $response, $datasource, $token, $userAgent, $xUserAgent);
} catch (Exception $e) {
    echo 'Exception when calling CalendarApi->putCharactersCharacterIdCalendarEventId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **eventId** | **int**| The ID of the event requested |
 **response** | [**\nullx27ESI\nullx27\ESI\Models\PutCharactersCharacterIdCalendarEventIdResponse**](../Model/PutCharactersCharacterIdCalendarEventIdResponse.md)| The response value to set, overriding current value. |
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

