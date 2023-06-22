<?php
/**
 * IncidentUpdatesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Statuspage API
 *
 * # Code of Conduct Please don't abuse the API, and please report all feature requests and issues to https://support.atlassian.com/contact  # Rate Limiting Each API token is limited to 1 request / second as measured on a 60 second rolling window. To get this limit increased, please contact us at https://support.atlassian.com/contact  Error codes 420 or 429 indicate that you have exceeded the rate limit and the request has been rejected.  # Basics  ## HTTPS It's required  ## URL Prefix In order to maintain version integrity into the future, the API is versioned. All calls currently begin with the following prefix:    https://api.statuspage.io/v1/  ## RESTful Interface Wherever possible, the API seeks to implement repeatable patterns with logical, representative URLs and descriptive HTTP verbs. Below are some examples and conventions you will see throughout the documentation.  * Collections are buckets: https://api.statuspage.io/v1/pages/asdf123/incidents.json * Elements have unique IDs: https://api.statuspage.io/v1/pages/asdf123/incidents/jklm456.json * GET will retrieve information about a collection/element * POST will create an element in a collection * PATCH will update a single element * PUT will replace a single element in a collection (rarely used) * DELETE will destroy a single element  ## Sending Data Information can be sent in the body as form urlencoded or JSON, but make sure the Content-Type header matches the body structure or the server gremlins will be angry.  All examples are provided in JSON format, however they can easily be converted to form encoding if required.  Some examples of how to convert things are below:      // JSON     {       \"incident\": {         \"name\": \"test incident\",         \"components\": [\"8kbf7d35c070\", \"vtnh60py4yd7\"]       }     }      // Form Encoded (using curl as an example):     curl -X POST https://api.statuspage.io/v1/example \\       -d \"incident[name]=test incident\" \\       -d \"incident[components][]=8kbf7d35c070\" \\       -d \"incident[components][]=vtnh60py4yd7\"  # Authentication  <!-- ReDoc-Inject: <security-definitions> -->
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * IncidentUpdatesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IncidentUpdatesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId' => [
            'application/json',
        ],
        'putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates $patch_pages_page_id_incidents_incident_id_incident_updates patch_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\IncidentUpdate
     */
    public function patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        list($response) = $this->patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdWithHttpInfo($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, $contentType);
        return $response;
    }

    /**
     * Operation patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdWithHttpInfo
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates $patch_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\IncidentUpdate, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdWithHttpInfo($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        $request = $this->patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdRequest($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\IncidentUpdate' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\IncidentUpdate' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\IncidentUpdate', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\IncidentUpdate';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\IncidentUpdate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsync
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates $patch_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsync($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        return $this->patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsyncWithHttpInfo($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsyncWithHttpInfo
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates $patch_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsyncWithHttpInfo($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        $returnType = '\OpenAPI\Client\Model\IncidentUpdate';
        $request = $this->patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdRequest($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates $patch_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdRequest($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {

        // verify the required parameter 'page_id' is set
        if ($page_id === null || (is_array($page_id) && count($page_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page_id when calling patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }

        // verify the required parameter 'incident_id' is set
        if ($incident_id === null || (is_array($incident_id) && count($incident_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $incident_id when calling patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }

        // verify the required parameter 'incident_update_id' is set
        if ($incident_update_id === null || (is_array($incident_update_id) && count($incident_update_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $incident_update_id when calling patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }

        // verify the required parameter 'patch_pages_page_id_incidents_incident_id_incident_updates' is set
        if ($patch_pages_page_id_incidents_incident_id_incident_updates === null || (is_array($patch_pages_page_id_incidents_incident_id_incident_updates) && count($patch_pages_page_id_incidents_incident_id_incident_updates) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $patch_pages_page_id_incidents_incident_id_incident_updates when calling patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }


        $resourcePath = '/pages/{page_id}/incidents/{incident_id}/incident_updates/{incident_update_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($page_id !== null) {
            $resourcePath = str_replace(
                '{' . 'page_id' . '}',
                ObjectSerializer::toPathValue($page_id),
                $resourcePath
            );
        }
        // path params
        if ($incident_id !== null) {
            $resourcePath = str_replace(
                '{' . 'incident_id' . '}',
                ObjectSerializer::toPathValue($incident_id),
                $resourcePath
            );
        }
        // path params
        if ($incident_update_id !== null) {
            $resourcePath = str_replace(
                '{' . 'incident_update_id' . '}',
                ObjectSerializer::toPathValue($incident_update_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($patch_pages_page_id_incidents_incident_id_incident_updates)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($patch_pages_page_id_incidents_incident_id_incident_updates));
            } else {
                $httpBody = $patch_pages_page_id_incidents_incident_id_incident_updates;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PATCH',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates $put_pages_page_id_incidents_incident_id_incident_updates put_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\IncidentUpdate
     */
    public function putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        list($response) = $this->putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdWithHttpInfo($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, $contentType);
        return $response;
    }

    /**
     * Operation putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdWithHttpInfo
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates $put_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\IncidentUpdate, HTTP status code, HTTP response headers (array of strings)
     */
    public function putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdWithHttpInfo($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        $request = $this->putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdRequest($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\IncidentUpdate' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\IncidentUpdate' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\IncidentUpdate', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\IncidentUpdate';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\IncidentUpdate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsync
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates $put_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsync($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        return $this->putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsyncWithHttpInfo($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsyncWithHttpInfo
     *
     * Update a previous incident update
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates $put_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdAsyncWithHttpInfo($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {
        $returnType = '\OpenAPI\Client\Model\IncidentUpdate';
        $request = $this->putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdRequest($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
     *
     * @param  string $page_id Page identifier (required)
     * @param  string $incident_id Incident Identifier (required)
     * @param  string $incident_update_id Incident Update Identifier (required)
     * @param  \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates $put_pages_page_id_incidents_incident_id_incident_updates (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateIdRequest($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates, string $contentType = self::contentTypes['putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'][0])
    {

        // verify the required parameter 'page_id' is set
        if ($page_id === null || (is_array($page_id) && count($page_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page_id when calling putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }

        // verify the required parameter 'incident_id' is set
        if ($incident_id === null || (is_array($incident_id) && count($incident_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $incident_id when calling putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }

        // verify the required parameter 'incident_update_id' is set
        if ($incident_update_id === null || (is_array($incident_update_id) && count($incident_update_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $incident_update_id when calling putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }

        // verify the required parameter 'put_pages_page_id_incidents_incident_id_incident_updates' is set
        if ($put_pages_page_id_incidents_incident_id_incident_updates === null || (is_array($put_pages_page_id_incidents_incident_id_incident_updates) && count($put_pages_page_id_incidents_incident_id_incident_updates) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $put_pages_page_id_incidents_incident_id_incident_updates when calling putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId'
            );
        }


        $resourcePath = '/pages/{page_id}/incidents/{incident_id}/incident_updates/{incident_update_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($page_id !== null) {
            $resourcePath = str_replace(
                '{' . 'page_id' . '}',
                ObjectSerializer::toPathValue($page_id),
                $resourcePath
            );
        }
        // path params
        if ($incident_id !== null) {
            $resourcePath = str_replace(
                '{' . 'incident_id' . '}',
                ObjectSerializer::toPathValue($incident_id),
                $resourcePath
            );
        }
        // path params
        if ($incident_update_id !== null) {
            $resourcePath = str_replace(
                '{' . 'incident_update_id' . '}',
                ObjectSerializer::toPathValue($incident_update_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($put_pages_page_id_incidents_incident_id_incident_updates)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($put_pages_page_id_incidents_incident_id_incident_updates));
            } else {
                $httpBody = $put_pages_page_id_incidents_incident_id_incident_updates;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
