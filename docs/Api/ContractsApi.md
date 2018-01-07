# nullx27ESI\ContractsApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdContracts**](ContractsApi.md#getCharactersCharacterIdContracts) | **GET** /characters/{character_id}/contracts/ | Get contracts
[**getCharactersCharacterIdContractsContractIdBids**](ContractsApi.md#getCharactersCharacterIdContractsContractIdBids) | **GET** /characters/{character_id}/contracts/{contract_id}/bids/ | Get contract bids
[**getCharactersCharacterIdContractsContractIdItems**](ContractsApi.md#getCharactersCharacterIdContractsContractIdItems) | **GET** /characters/{character_id}/contracts/{contract_id}/items/ | Get contract items
[**getCorporationsCorporationIdContracts**](ContractsApi.md#getCorporationsCorporationIdContracts) | **GET** /corporations/{corporation_id}/contracts/ | Get coporation contracts
[**getCorporationsCorporationIdContractsContractIdBids**](ContractsApi.md#getCorporationsCorporationIdContractsContractIdBids) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/bids/ | Get corporation contract bids
[**getCorporationsCorporationIdContractsContractIdItems**](ContractsApi.md#getCorporationsCorporationIdContractsContractIdItems) | **GET** /corporations/{corporation_id}/contracts/{contract_id}/items/ | Get corporation contract items


# **getCharactersCharacterIdContracts**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContracts200Ok[] getCharactersCharacterIdContracts($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get contracts

Returns contracts available to a character, only if the character is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is \"in_progress\".  --- Alternate route: `/dev/characters/{character_id}/contracts/`  Alternate route: `/legacy/characters/{character_id}/contracts/`  Alternate route: `/v1/characters/{character_id}/contracts/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContractsApi(
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
    $result = $apiInstance->getCharactersCharacterIdContracts($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContracts: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContracts200Ok[]**](../Model/GetCharactersCharacterIdContracts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdContractsContractIdBids**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContractsContractIdBids200Ok[] getCharactersCharacterIdContractsContractIdBids($characterId, $contractId, $datasource, $token, $userAgent, $xUserAgent)

Get contract bids

Lists bids on a particular auction contract  --- Alternate route: `/dev/characters/{character_id}/contracts/{contract_id}/bids/`  Alternate route: `/legacy/characters/{character_id}/contracts/{contract_id}/bids/`  Alternate route: `/v1/characters/{character_id}/contracts/{contract_id}/bids/`  --- This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$contractId = 56; // int | ID of a contract
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContractsContractIdBids($characterId, $contractId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContractsContractIdBids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **contractId** | **int**| ID of a contract |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContractsContractIdBids200Ok[]**](../Model/GetCharactersCharacterIdContractsContractIdBids200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdContractsContractIdItems**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContractsContractIdItems200Ok[] getCharactersCharacterIdContractsContractIdItems($characterId, $contractId, $datasource, $token, $userAgent, $xUserAgent)

Get contract items

Lists items of a particular contract  --- Alternate route: `/dev/characters/{character_id}/contracts/{contract_id}/items/`  Alternate route: `/legacy/characters/{character_id}/contracts/{contract_id}/items/`  Alternate route: `/v1/characters/{character_id}/contracts/{contract_id}/items/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$contractId = 56; // int | ID of a contract
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdContractsContractIdItems($characterId, $contractId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCharactersCharacterIdContractsContractIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **contractId** | **int**| ID of a contract |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdContractsContractIdItems200Ok[]**](../Model/GetCharactersCharacterIdContractsContractIdItems200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContracts**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContracts200Ok[] getCorporationsCorporationIdContracts($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get coporation contracts

Returns contracts available to a coporation, only if the corporation is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is \"in_progress\".  --- Alternate route: `/dev/corporations/{corporation_id}/contracts/`  Alternate route: `/legacy/corporations/{corporation_id}/contracts/`  Alternate route: `/v1/corporations/{corporation_id}/contracts/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContractsApi(
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
    $result = $apiInstance->getCorporationsCorporationIdContracts($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContracts: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContracts200Ok[]**](../Model/GetCorporationsCorporationIdContracts200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContractsContractIdBids**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContractsContractIdBids200Ok[] getCorporationsCorporationIdContractsContractIdBids($contractId, $corporationId, $datasource, $page, $token, $userAgent, $xUserAgent)

Get corporation contract bids

Lists bids on a particular auction contract  --- Alternate route: `/dev/corporations/{corporation_id}/contracts/{contract_id}/bids/`  Alternate route: `/legacy/corporations/{corporation_id}/contracts/{contract_id}/bids/`  Alternate route: `/v1/corporations/{corporation_id}/contracts/{contract_id}/bids/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractId = 56; // int | ID of a contract
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$page = 1; // int | Which page of results to return
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdContractsContractIdBids($contractId, $corporationId, $datasource, $page, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContractsContractIdBids: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractId** | **int**| ID of a contract |
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **page** | **int**| Which page of results to return | [optional] [default to 1]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContractsContractIdBids200Ok[]**](../Model/GetCorporationsCorporationIdContractsContractIdBids200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdContractsContractIdItems**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContractsContractIdItems200Ok[] getCorporationsCorporationIdContractsContractIdItems($contractId, $corporationId, $datasource, $token, $userAgent, $xUserAgent)

Get corporation contract items

Lists items of a particular contract  --- Alternate route: `/dev/corporations/{corporation_id}/contracts/{contract_id}/items/`  Alternate route: `/legacy/corporations/{corporation_id}/contracts/{contract_id}/items/`  Alternate route: `/v1/corporations/{corporation_id}/contracts/{contract_id}/items/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\ContractsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractId = 56; // int | ID of a contract
$corporationId = 56; // int | An EVE corporation ID
$datasource = "tranquility"; // string | The server name you would like data from
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdContractsContractIdItems($contractId, $corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractsApi->getCorporationsCorporationIdContractsContractIdItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contractId** | **int**| ID of a contract |
 **corporationId** | **int**| An EVE corporation ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdContractsContractIdItems200Ok[]**](../Model/GetCorporationsCorporationIdContractsContractIdItems200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

