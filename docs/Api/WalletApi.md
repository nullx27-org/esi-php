# nullx27ESI\WalletApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCharactersCharacterIdWallet**](WalletApi.md#getCharactersCharacterIdWallet) | **GET** /characters/{character_id}/wallet/ | Get a character&#39;s wallet balance
[**getCharactersCharacterIdWalletJournal**](WalletApi.md#getCharactersCharacterIdWalletJournal) | **GET** /characters/{character_id}/wallet/journal/ | Get character wallet journal
[**getCharactersCharacterIdWalletTransactions**](WalletApi.md#getCharactersCharacterIdWalletTransactions) | **GET** /characters/{character_id}/wallet/transactions/ | Get wallet transactions
[**getCorporationsCorporationIdWallets**](WalletApi.md#getCorporationsCorporationIdWallets) | **GET** /corporations/{corporation_id}/wallets/ | Returns a corporation&#39;s wallet balance
[**getCorporationsCorporationIdWalletsDivisionJournal**](WalletApi.md#getCorporationsCorporationIdWalletsDivisionJournal) | **GET** /corporations/{corporation_id}/wallets/{division}/journal/ | Get corporation wallet journal
[**getCorporationsCorporationIdWalletsDivisionTransactions**](WalletApi.md#getCorporationsCorporationIdWalletsDivisionTransactions) | **GET** /corporations/{corporation_id}/wallets/{division}/transactions/ | Get corporation wallet transactions


# **getCharactersCharacterIdWallet**
> double getCharactersCharacterIdWallet($characterId, $datasource, $token, $userAgent, $xUserAgent)

Get a character's wallet balance

Returns a character's wallet balance  --- Alternate route: `/dev/characters/{character_id}/wallet/`  Alternate route: `/legacy/characters/{character_id}/wallet/`  Alternate route: `/v1/characters/{character_id}/wallet/`  --- This route is cached for up to 120 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\WalletApi(
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
    $result = $apiInstance->getCharactersCharacterIdWallet($characterId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCharactersCharacterIdWallet: ', $e->getMessage(), PHP_EOL;
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

**double**

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdWalletJournal**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletJournal200Ok[] getCharactersCharacterIdWalletJournal($characterId, $datasource, $fromId, $token, $userAgent, $xUserAgent)

Get character wallet journal

Retrieve character wallet journal  --- Alternate route: `/dev/characters/{character_id}/wallet/journal/`  Alternate route: `/v3/characters/{character_id}/wallet/journal/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$fromId = 789; // int | Only show journal entries happened before the transaction referenced by this id
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdWalletJournal($characterId, $datasource, $fromId, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCharactersCharacterIdWalletJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **fromId** | **int**| Only show journal entries happened before the transaction referenced by this id | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletJournal200Ok[]**](../Model/GetCharactersCharacterIdWalletJournal200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdWalletTransactions**
> \nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletTransactions200Ok[] getCharactersCharacterIdWalletTransactions($characterId, $datasource, $fromId, $token, $userAgent, $xUserAgent)

Get wallet transactions

Get wallet transactions of a character  --- Alternate route: `/dev/characters/{character_id}/wallet/transactions/`  Alternate route: `/legacy/characters/{character_id}/wallet/transactions/`  Alternate route: `/v1/characters/{character_id}/wallet/transactions/`  --- This route is cached for up to 3600 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | An EVE character ID
$datasource = "tranquility"; // string | The server name you would like data from
$fromId = 789; // int | Only show transactions happened before the one referenced by this id
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCharactersCharacterIdWalletTransactions($characterId, $datasource, $fromId, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCharactersCharacterIdWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| An EVE character ID |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **fromId** | **int**| Only show transactions happened before the one referenced by this id | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCharactersCharacterIdWalletTransactions200Ok[]**](../Model/GetCharactersCharacterIdWalletTransactions200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdWallets**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdWallets200Ok[] getCorporationsCorporationIdWallets($corporationId, $datasource, $token, $userAgent, $xUserAgent)

Returns a corporation's wallet balance

Get a corporation's wallets  --- Alternate route: `/dev/corporations/{corporation_id}/wallets/`  Alternate route: `/legacy/corporations/{corporation_id}/wallets/`  Alternate route: `/v1/corporations/{corporation_id}/wallets/`  --- This route is cached for up to 300 seconds  --- Requires one of the following EVE corporation role(s): Accountant, Junior_Accountant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\WalletApi(
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
    $result = $apiInstance->getCorporationsCorporationIdWallets($corporationId, $datasource, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCorporationsCorporationIdWallets: ', $e->getMessage(), PHP_EOL;
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

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdWallets200Ok[]**](../Model/GetCorporationsCorporationIdWallets200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdWalletsDivisionJournal**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdWalletsDivisionJournal200Ok[] getCorporationsCorporationIdWalletsDivisionJournal($corporationId, $division, $datasource, $fromId, $token, $userAgent, $xUserAgent)

Get corporation wallet journal

Retrieve corporation wallet journal  --- Alternate route: `/dev/corporations/{corporation_id}/wallets/{division}/journal/`  Alternate route: `/v2/corporations/{corporation_id}/wallets/{division}/journal/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Accountant, Junior_Accountant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$division = 56; // int | Wallet key of the division to fetch journals from
$datasource = "tranquility"; // string | The server name you would like data from
$fromId = 789; // int | Only show journal entries happened before the transaction referenced by this id
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdWalletsDivisionJournal($corporationId, $division, $datasource, $fromId, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCorporationsCorporationIdWalletsDivisionJournal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **division** | **int**| Wallet key of the division to fetch journals from |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **fromId** | **int**| Only show journal entries happened before the transaction referenced by this id | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdWalletsDivisionJournal200Ok[]**](../Model/GetCorporationsCorporationIdWalletsDivisionJournal200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCorporationsCorporationIdWalletsDivisionTransactions**
> \nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdWalletsDivisionTransactions200Ok[] getCorporationsCorporationIdWalletsDivisionTransactions($corporationId, $division, $datasource, $fromId, $token, $userAgent, $xUserAgent)

Get corporation wallet transactions

Get wallet transactions of a corporation  --- Alternate route: `/dev/corporations/{corporation_id}/wallets/{division}/transactions/`  Alternate route: `/legacy/corporations/{corporation_id}/wallets/{division}/transactions/`  Alternate route: `/v1/corporations/{corporation_id}/wallets/{division}/transactions/`  --- This route is cached for up to 3600 seconds  --- Requires one of the following EVE corporation role(s): Accountant, Junior_Accountant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
$config = nullx27ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new nullx27ESI\Api\WalletApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$corporationId = 56; // int | An EVE corporation ID
$division = 56; // int | Wallet key of the division to fetch journals from
$datasource = "tranquility"; // string | The server name you would like data from
$fromId = 789; // int | Only show journal entries happened before the transaction referenced by this id
$token = "token_example"; // string | Access token to use if unable to set a header
$userAgent = "userAgent_example"; // string | Client identifier, takes precedence over headers
$xUserAgent = "xUserAgent_example"; // string | Client identifier, takes precedence over User-Agent

try {
    $result = $apiInstance->getCorporationsCorporationIdWalletsDivisionTransactions($corporationId, $division, $datasource, $fromId, $token, $userAgent, $xUserAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletApi->getCorporationsCorporationIdWalletsDivisionTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **corporationId** | **int**| An EVE corporation ID |
 **division** | **int**| Wallet key of the division to fetch journals from |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]
 **fromId** | **int**| Only show journal entries happened before the transaction referenced by this id | [optional]
 **token** | **string**| Access token to use if unable to set a header | [optional]
 **userAgent** | **string**| Client identifier, takes precedence over headers | [optional]
 **xUserAgent** | **string**| Client identifier, takes precedence over User-Agent | [optional]

### Return type

[**\nullx27ESI\nullx27\ESI\Models\GetCorporationsCorporationIdWalletsDivisionTransactions200Ok[]**](../Model/GetCorporationsCorporationIdWalletsDivisionTransactions200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

