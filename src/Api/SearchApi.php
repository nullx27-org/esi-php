<?php
/**
 * SearchApi
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.4.9.dev1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27\ESI\Api;

use \nullx27\ESI\ApiClient;
use \nullx27\ESI\ApiException;
use \nullx27\ESI\Configuration;
use \nullx27\ESI\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchApi
{
    /**
     * API Client
     *
     * @var \nullx27\ESI\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \nullx27\ESI\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\nullx27\ESI\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://esi.tech.ccp.is/latest');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \nullx27\ESI\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \nullx27\ESI\ApiClient $apiClient set the API client
     *
     * @return SearchApi
     */
    public function setApiClient(\nullx27\ESI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCharactersCharacterIdSearch
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param int $characterId An EVE character ID (required)
     * @param string $search The string to search on (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $language Search locale (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @param string $token Access token to use, if preferred over a header (optional)
     * @param string $userAgent Client identifier, takes precedence over headers (optional)
     * @param string $xUserAgent Client identifier, takes precedence over User-Agent (optional)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     * @return \nullx27\ESI\Models\GetCharactersCharacterIdSearchOk
     */
    public function getCharactersCharacterIdSearch($categories, $characterId, $search, $datasource = null, $language = null, $strict = null, $token = null, $userAgent = null, $xUserAgent = null)
    {
        list($response) = $this->getCharactersCharacterIdSearchWithHttpInfo($categories, $characterId, $search, $datasource, $language, $strict, $token, $userAgent, $xUserAgent);
        return $response;
    }

    /**
     * Operation getCharactersCharacterIdSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param int $characterId An EVE character ID (required)
     * @param string $search The string to search on (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $language Search locale (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @param string $token Access token to use, if preferred over a header (optional)
     * @param string $userAgent Client identifier, takes precedence over headers (optional)
     * @param string $xUserAgent Client identifier, takes precedence over User-Agent (optional)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     * @return array of \nullx27\ESI\Models\GetCharactersCharacterIdSearchOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCharactersCharacterIdSearchWithHttpInfo($categories, $characterId, $search, $datasource = null, $language = null, $strict = null, $token = null, $userAgent = null, $xUserAgent = null)
    {
        // verify the required parameter 'categories' is set
        if ($categories === null) {
            throw new \InvalidArgumentException('Missing the required parameter $categories when calling getCharactersCharacterIdSearch');
        }
        if ((count($categories) > 12)) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getCharactersCharacterIdSearch, number of items must be less than or equal to 12.');
        }
        if ((count($categories) < 1)) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getCharactersCharacterIdSearch, number of items must be greater than or equal to 1.');
        }

        // verify the required parameter 'characterId' is set
        if ($characterId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $characterId when calling getCharactersCharacterIdSearch');
        }
        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling getCharactersCharacterIdSearch');
        }
        if ((strlen($search) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getCharactersCharacterIdSearch, must be bigger than or equal to 3.');
        }

        // parse inputs
        $resourcePath = "/characters/{character_id}/search/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($categories)) {
            $categories = $this->apiClient->getSerializer()->serializeCollection($categories, 'csv', true);
        }
        if ($categories !== null) {
            $queryParams['categories'] = $this->apiClient->getSerializer()->toQueryValue($categories);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if ($strict !== null) {
            $queryParams['strict'] = $this->apiClient->getSerializer()->toQueryValue($strict);
        }
        // query params
        if ($token !== null) {
            $queryParams['token'] = $this->apiClient->getSerializer()->toQueryValue($token);
        }
        // query params
        if ($userAgent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($userAgent);
        }
        // header params
        if ($xUserAgent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($xUserAgent);
        }
        // path params
        if ($characterId !== null) {
            $resourcePath = str_replace(
                "{" . "character_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($characterId),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\nullx27\ESI\Models\GetCharactersCharacterIdSearchOk',
                '/characters/{character_id}/search/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\nullx27\ESI\Models\GetCharactersCharacterIdSearchOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetCharactersCharacterIdSearchOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetCharactersCharacterIdSearchForbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetCharactersCharacterIdSearchInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSearch
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param string $search The string to search on (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $language Search locale (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @param string $userAgent Client identifier, takes precedence over headers (optional)
     * @param string $xUserAgent Client identifier, takes precedence over User-Agent (optional)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     * @return \nullx27\ESI\Models\GetSearchOk
     */
    public function getSearch($categories, $search, $datasource = null, $language = null, $strict = null, $userAgent = null, $xUserAgent = null)
    {
        list($response) = $this->getSearchWithHttpInfo($categories, $search, $datasource, $language, $strict, $userAgent, $xUserAgent);
        return $response;
    }

    /**
     * Operation getSearchWithHttpInfo
     *
     * Search on a string
     *
     * @param string[] $categories Type of entities to search for (required)
     * @param string $search The string to search on (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @param string $language Search locale (optional, default to en-us)
     * @param bool $strict Whether the search should be a strict match (optional, default to false)
     * @param string $userAgent Client identifier, takes precedence over headers (optional)
     * @param string $xUserAgent Client identifier, takes precedence over User-Agent (optional)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     * @return array of \nullx27\ESI\Models\GetSearchOk, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSearchWithHttpInfo($categories, $search, $datasource = null, $language = null, $strict = null, $userAgent = null, $xUserAgent = null)
    {
        // verify the required parameter 'categories' is set
        if ($categories === null) {
            throw new \InvalidArgumentException('Missing the required parameter $categories when calling getSearch');
        }
        if ((count($categories) > 10)) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getSearch, number of items must be less than or equal to 10.');
        }
        if ((count($categories) < 1)) {
            throw new \InvalidArgumentException('invalid value for "$categories" when calling SearchApi.getSearch, number of items must be greater than or equal to 1.');
        }

        // verify the required parameter 'search' is set
        if ($search === null) {
            throw new \InvalidArgumentException('Missing the required parameter $search when calling getSearch');
        }
        if ((strlen($search) < 3)) {
            throw new \InvalidArgumentException('invalid length for "$search" when calling SearchApi.getSearch, must be bigger than or equal to 3.');
        }

        // parse inputs
        $resourcePath = "/search/";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if (is_array($categories)) {
            $categories = $this->apiClient->getSerializer()->serializeCollection($categories, 'csv', true);
        }
        if ($categories !== null) {
            $queryParams['categories'] = $this->apiClient->getSerializer()->toQueryValue($categories);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($search !== null) {
            $queryParams['search'] = $this->apiClient->getSerializer()->toQueryValue($search);
        }
        // query params
        if ($strict !== null) {
            $queryParams['strict'] = $this->apiClient->getSerializer()->toQueryValue($strict);
        }
        // query params
        if ($userAgent !== null) {
            $queryParams['user_agent'] = $this->apiClient->getSerializer()->toQueryValue($userAgent);
        }
        // header params
        if ($xUserAgent !== null) {
            $headerParams['X-User-Agent'] = $this->apiClient->getSerializer()->toHeaderValue($xUserAgent);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\nullx27\ESI\Models\GetSearchOk',
                '/search/'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\nullx27\ESI\Models\GetSearchOk', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetSearchOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetSearchInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
