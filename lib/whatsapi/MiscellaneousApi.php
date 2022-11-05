<?php
/**
 * MiscellaneousApi
 * PHP version 7.4
 *
 * @category Class
 * @package  WhatsAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * WhatsAPI Go
 *
 * The V2 of WhatsAPI Go
 *
 * The version of the OpenAPI document: 2.0
 * Contact: manjit@sponsorbook.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WhatsAPI\whatsapi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WhatsAPI\ApiException;
use WhatsAPI\Configuration;
use WhatsAPI\HeaderSelector;
use WhatsAPI\ObjectSerializer;

/**
 * MiscellaneousApi Class Doc Comment
 *
 * @category Class
 * @package  WhatsAPI
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MiscellaneousApi
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
        'getProfilePic' => [
            'application/json',
        ],
        'getUsersInfo' => [
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
     * Operation getProfilePic
     *
     * Get profile pic.
     *
     * @param  string $instance_key Instance key (required)
     * @param  string $jid JID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProfilePic'] to see the possible values for this operation
     *
     * @throws \WhatsAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse
     */
    public function getProfilePic($instance_key, $jid, string $contentType = self::contentTypes['getProfilePic'][0])
    {
        list($response) = $this->getProfilePicWithHttpInfo($instance_key, $jid, $contentType);
        return $response;
    }

    /**
     * Operation getProfilePicWithHttpInfo
     *
     * Get profile pic.
     *
     * @param  string $instance_key Instance key (required)
     * @param  string $jid JID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProfilePic'] to see the possible values for this operation
     *
     * @throws \WhatsAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProfilePicWithHttpInfo($instance_key, $jid, string $contentType = self::contentTypes['getProfilePic'][0])
    {
        $request = $this->getProfilePicRequest($instance_key, $jid, $contentType);

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
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\WhatsAPI\models\APIResponse';
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
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProfilePicAsync
     *
     * Get profile pic.
     *
     * @param  string $instance_key Instance key (required)
     * @param  string $jid JID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProfilePic'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProfilePicAsync($instance_key, $jid, string $contentType = self::contentTypes['getProfilePic'][0])
    {
        return $this->getProfilePicAsyncWithHttpInfo($instance_key, $jid, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProfilePicAsyncWithHttpInfo
     *
     * Get profile pic.
     *
     * @param  string $instance_key Instance key (required)
     * @param  string $jid JID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProfilePic'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProfilePicAsyncWithHttpInfo($instance_key, $jid, string $contentType = self::contentTypes['getProfilePic'][0])
    {
        $returnType = '\WhatsAPI\models\APIResponse';
        $request = $this->getProfilePicRequest($instance_key, $jid, $contentType);

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
     * Create request for operation 'getProfilePic'
     *
     * @param  string $instance_key Instance key (required)
     * @param  string $jid JID (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProfilePic'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProfilePicRequest($instance_key, $jid, string $contentType = self::contentTypes['getProfilePic'][0])
    {

        // verify the required parameter 'instance_key' is set
        if ($instance_key === null || (is_array($instance_key) && count($instance_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $instance_key when calling getProfilePic'
            );
        }

        // verify the required parameter 'jid' is set
        if ($jid === null || (is_array($jid) && count($jid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $jid when calling getProfilePic'
            );
        }


        $resourcePath = '/instances/{instance_key}/misc/profile-pic';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $jid,
            'jid', // param base name
            'string', // openApiType
            '', // style
            false, // explode
            true // required
        ) ?? []);


        // path params
        if ($instance_key !== null) {
            $resourcePath = str_replace(
                '{' . 'instance_key' . '}',
                ObjectSerializer::toPathValue($instance_key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
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
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getUsersInfo
     *
     * Fetches the users info.
     *
     * @param  string $instance_key Instance key (required)
     * @param  \WhatsAPI\models\UserInfoPayload $data Data (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \WhatsAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse
     */
    public function getUsersInfo($instance_key, $data, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        list($response) = $this->getUsersInfoWithHttpInfo($instance_key, $data, $contentType);
        return $response;
    }

    /**
     * Operation getUsersInfoWithHttpInfo
     *
     * Fetches the users info.
     *
     * @param  string $instance_key Instance key (required)
     * @param  \WhatsAPI\models\UserInfoPayload $data Data (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \WhatsAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse|\WhatsAPI\models\APIResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUsersInfoWithHttpInfo($instance_key, $data, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        $request = $this->getUsersInfoRequest($instance_key, $data, $contentType);

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
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\WhatsAPI\models\APIResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\WhatsAPI\models\APIResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\WhatsAPI\models\APIResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\WhatsAPI\models\APIResponse';
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
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WhatsAPI\models\APIResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUsersInfoAsync
     *
     * Fetches the users info.
     *
     * @param  string $instance_key Instance key (required)
     * @param  \WhatsAPI\models\UserInfoPayload $data Data (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsersInfoAsync($instance_key, $data, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        return $this->getUsersInfoAsyncWithHttpInfo($instance_key, $data, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUsersInfoAsyncWithHttpInfo
     *
     * Fetches the users info.
     *
     * @param  string $instance_key Instance key (required)
     * @param  \WhatsAPI\models\UserInfoPayload $data Data (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUsersInfoAsyncWithHttpInfo($instance_key, $data, string $contentType = self::contentTypes['getUsersInfo'][0])
    {
        $returnType = '\WhatsAPI\models\APIResponse';
        $request = $this->getUsersInfoRequest($instance_key, $data, $contentType);

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
     * Create request for operation 'getUsersInfo'
     *
     * @param  string $instance_key Instance key (required)
     * @param  \WhatsAPI\models\UserInfoPayload $data Data (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getUsersInfo'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getUsersInfoRequest($instance_key, $data, string $contentType = self::contentTypes['getUsersInfo'][0])
    {

        // verify the required parameter 'instance_key' is set
        if ($instance_key === null || (is_array($instance_key) && count($instance_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $instance_key when calling getUsersInfo'
            );
        }

        // verify the required parameter 'data' is set
        if ($data === null || (is_array($data) && count($data) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $data when calling getUsersInfo'
            );
        }


        $resourcePath = '/instances/{instance_key}/misc/user-info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($instance_key !== null) {
            $resourcePath = str_replace(
                '{' . 'instance_key' . '}',
                ObjectSerializer::toPathValue($instance_key),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['*/*', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($data)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($data));
            } else {
                $httpBody = $data;
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
                $httpBody = \GuzzleHttp\json_encode($formParams);
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
            'POST',
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
