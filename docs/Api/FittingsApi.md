# nullx27\ESI\FittingsApi

All URIs are relative to *https://esi.tech.ccp.is/latest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCharactersCharacterIdFittingsFittingId**](FittingsApi.md#deleteCharactersCharacterIdFittingsFittingId) | **DELETE** /characters/{character_id}/fittings/{fitting_id}/ | Delete fitting
[**getCharactersCharacterIdFittings**](FittingsApi.md#getCharactersCharacterIdFittings) | **GET** /characters/{character_id}/fittings/ | Get fittings
[**postCharactersCharacterIdFittings**](FittingsApi.md#postCharactersCharacterIdFittings) | **POST** /characters/{character_id}/fittings/ | Create fitting


# **deleteCharactersCharacterIdFittingsFittingId**
> deleteCharactersCharacterIdFittingsFittingId($characterId, $fittingId, $datasource)

Delete fitting

Delete a fitting from a character  ---  Alternate route: `/v1/characters/{character_id}/fittings/{fitting_id}/`  Alternate route: `/legacy/characters/{character_id}/fittings/{fitting_id}/`  Alternate route: `/dev/characters/{character_id}/fittings/{fitting_id}/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\FittingsApi();
$characterId = 56; // int | ID for a character
$fittingId = 56; // int | ID for a fitting of this character
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $api_instance->deleteCharactersCharacterIdFittingsFittingId($characterId, $fittingId, $datasource);
} catch (Exception $e) {
    echo 'Exception when calling FittingsApi->deleteCharactersCharacterIdFittingsFittingId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **fittingId** | **int**| ID for a fitting of this character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

void (empty response body)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharactersCharacterIdFittings**
> \nullx27\ESI\Models\GetCharactersCharacterIdFittings200Ok[] getCharactersCharacterIdFittings($characterId, $datasource)

Get fittings

Return fittings of a character  ---  Alternate route: `/v1/characters/{character_id}/fittings/`  Alternate route: `/legacy/characters/{character_id}/fittings/`  Alternate route: `/dev/characters/{character_id}/fittings/`   ---  This route is cached for up to 300 seconds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\FittingsApi();
$characterId = 56; // int | ID for a character
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->getCharactersCharacterIdFittings($characterId, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FittingsApi->getCharactersCharacterIdFittings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\GetCharactersCharacterIdFittings200Ok[]**](../Model/GetCharactersCharacterIdFittings200Ok.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCharactersCharacterIdFittings**
> \nullx27\ESI\Models\PostCharactersCharacterIdFittingsCreated postCharactersCharacterIdFittings($characterId, $fitting, $datasource)

Create fitting

Save a new fitting for a character  ---  Alternate route: `/v1/characters/{character_id}/fittings/`  Alternate route: `/legacy/characters/{character_id}/fittings/`  Alternate route: `/dev/characters/{character_id}/fittings/`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: evesso
nullx27\ESI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new nullx27\ESI\Api\FittingsApi();
$characterId = 56; // int | ID for a character
$fitting = new \nullx27\ESI\Models\PostCharactersCharacterIdFittingsFitting(); // \nullx27\ESI\Models\PostCharactersCharacterIdFittingsFitting | Details about the new fitting
$datasource = "tranquility"; // string | The server name you would like data from

try {
    $result = $api_instance->postCharactersCharacterIdFittings($characterId, $fitting, $datasource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FittingsApi->postCharactersCharacterIdFittings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID for a character |
 **fitting** | [**\nullx27\ESI\Models\PostCharactersCharacterIdFittingsFitting**](../Model/\nullx27\ESI\Models\PostCharactersCharacterIdFittingsFitting.md)| Details about the new fitting | [optional]
 **datasource** | **string**| The server name you would like data from | [optional] [default to tranquility]

### Return type

[**\nullx27\ESI\Models\PostCharactersCharacterIdFittingsCreated**](../Model/PostCharactersCharacterIdFittingsCreated.md)

### Authorization

[evesso](../../README.md#evesso)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

