<?php
/**
 * AllianceApi
 * PHP version 5
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 0.3.10.dev17
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace nullx27\ESI\Api;

use \nullx27\ESI\Configuration;
use \nullx27\ESI\ApiClient;
use \nullx27\ESI\ApiException;
use \nullx27\ESI\ObjectSerializer;

/**
 * AllianceApi Class Doc Comment
 *
 * @category Class
 * @package  nullx27\ESI
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllianceApi
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
        if ($apiClient == null) {
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
     * @return AllianceApi
     */
    public function setApiClient(\nullx27\ESI\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAlliances
     *
     * List all alliances
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return int[]
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliances($datasource = null)
    {
        list($response) = $this->getAlliancesWithHttpInfo($datasource);
        return $response;
    }

    /**
     * Operation getAlliancesWithHttpInfo
     *
     * List all alliances
     *
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of int[], HTTP status code, HTTP response headers (array of strings)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesWithHttpInfo($datasource = null)
    {
        // parse inputs
        $resourcePath = "/alliances/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
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
                'int[]',
                '/alliances/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesAllianceId
     *
     * Get alliance information
     *
     * @param int $allianceId An Eve alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return \nullx27\ESI\Models\GetAlliancesAllianceIdOk
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesAllianceId($allianceId, $datasource = null)
    {
        list($response) = $this->getAlliancesAllianceIdWithHttpInfo($allianceId, $datasource);
        return $response;
    }

    /**
     * Operation getAlliancesAllianceIdWithHttpInfo
     *
     * Get alliance information
     *
     * @param int $allianceId An Eve alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of \nullx27\ESI\Models\GetAlliancesAllianceIdOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesAllianceIdWithHttpInfo($allianceId, $datasource = null)
    {
        // verify the required parameter 'allianceId' is set
        if ($allianceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $allianceId when calling getAlliancesAllianceId');
        }
        // parse inputs
        $resourcePath = "/alliances/{alliance_id}/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($allianceId !== null) {
            $resourcePath = str_replace(
                "{" . "alliance_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($allianceId),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\nullx27\ESI\Models\GetAlliancesAllianceIdOk',
                '/alliances/{alliance_id}/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\nullx27\ESI\Models\GetAlliancesAllianceIdOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesAllianceIdCorporations
     *
     * List alliance's corporations
     *
     * @param int $allianceId An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return int[]
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesAllianceIdCorporations($allianceId, $datasource = null)
    {
        list($response) = $this->getAlliancesAllianceIdCorporationsWithHttpInfo($allianceId, $datasource);
        return $response;
    }

    /**
     * Operation getAlliancesAllianceIdCorporationsWithHttpInfo
     *
     * List alliance's corporations
     *
     * @param int $allianceId An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of int[], HTTP status code, HTTP response headers (array of strings)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesAllianceIdCorporationsWithHttpInfo($allianceId, $datasource = null)
    {
        // verify the required parameter 'allianceId' is set
        if ($allianceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $allianceId when calling getAlliancesAllianceIdCorporations');
        }
        // parse inputs
        $resourcePath = "/alliances/{alliance_id}/corporations/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($allianceId !== null) {
            $resourcePath = str_replace(
                "{" . "alliance_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($allianceId),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'int[]',
                '/alliances/{alliance_id}/corporations/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'int[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'int[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdCorporationsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesAllianceIdIcons
     *
     * Get alliance icon
     *
     * @param int $allianceId An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return \nullx27\ESI\Models\GetAlliancesAllianceIdIconsOk
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesAllianceIdIcons($allianceId, $datasource = null)
    {
        list($response) = $this->getAlliancesAllianceIdIconsWithHttpInfo($allianceId, $datasource);
        return $response;
    }

    /**
     * Operation getAlliancesAllianceIdIconsWithHttpInfo
     *
     * Get alliance icon
     *
     * @param int $allianceId An EVE alliance ID (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of \nullx27\ESI\Models\GetAlliancesAllianceIdIconsOk, HTTP status code, HTTP response headers (array of strings)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesAllianceIdIconsWithHttpInfo($allianceId, $datasource = null)
    {
        // verify the required parameter 'allianceId' is set
        if ($allianceId === null) {
            throw new \InvalidArgumentException('Missing the required parameter $allianceId when calling getAlliancesAllianceIdIcons');
        }
        // parse inputs
        $resourcePath = "/alliances/{alliance_id}/icons/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
        }
        // path params
        if ($allianceId !== null) {
            $resourcePath = str_replace(
                "{" . "alliance_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($allianceId),
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\nullx27\ESI\Models\GetAlliancesAllianceIdIconsOk',
                '/alliances/{alliance_id}/icons/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\nullx27\ESI\Models\GetAlliancesAllianceIdIconsOk', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdIconsOk', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdIconsNotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesAllianceIdIconsInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAlliancesNames
     *
     * Get alliance names
     *
     * @param int[] $allianceIds A comma separated list of alliance IDs (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return \nullx27\ESI\Models\GetAlliancesNames200Ok[]
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesNames($allianceIds, $datasource = null)
    {
        list($response) = $this->getAlliancesNamesWithHttpInfo($allianceIds, $datasource);
        return $response;
    }

    /**
     * Operation getAlliancesNamesWithHttpInfo
     *
     * Get alliance names
     *
     * @param int[] $allianceIds A comma separated list of alliance IDs (required)
     * @param string $datasource The server name you would like data from (optional, default to tranquility)
     * @return Array of \nullx27\ESI\Models\GetAlliancesNames200Ok[], HTTP status code, HTTP response headers (array of strings)
     * @throws \nullx27\ESI\ApiException on non-2xx response
     */
    public function getAlliancesNamesWithHttpInfo($allianceIds, $datasource = null)
    {
        // verify the required parameter 'allianceIds' is set
        if ($allianceIds === null) {
            throw new \InvalidArgumentException('Missing the required parameter $allianceIds when calling getAlliancesNames');
        }

        // parse inputs
        $resourcePath = "/alliances/names/";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if (is_array($allianceIds)) {
            $allianceIds = $this->apiClient->getSerializer()->serializeCollection($allianceIds, 'csv', true);
        }
        if ($allianceIds !== null) {
            $queryParams['alliance_ids'] = $this->apiClient->getSerializer()->toQueryValue($allianceIds);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = $this->apiClient->getSerializer()->toQueryValue($datasource);
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
                '\nullx27\ESI\Models\GetAlliancesNames200Ok[]',
                '/alliances/names/'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\nullx27\ESI\Models\GetAlliancesNames200Ok[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesNames200Ok[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\nullx27\ESI\Models\GetAlliancesNamesInternalServerError', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
