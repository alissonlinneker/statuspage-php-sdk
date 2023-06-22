# OpenAPI\Client\IncidentSubscribersApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId()**](IncidentSubscribersApi.md#deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId) | **DELETE** /pages/{page_id}/incidents/{incident_id}/subscribers/{subscriber_id} | Unsubscribe an incident subscriber |
| [**getPagesPageIdIncidentsIncidentIdSubscribers()**](IncidentSubscribersApi.md#getPagesPageIdIncidentsIncidentIdSubscribers) | **GET** /pages/{page_id}/incidents/{incident_id}/subscribers | Get a list of incident subscribers |
| [**getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId()**](IncidentSubscribersApi.md#getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId) | **GET** /pages/{page_id}/incidents/{incident_id}/subscribers/{subscriber_id} | Get an incident subscriber |
| [**postPagesPageIdIncidentsIncidentIdSubscribers()**](IncidentSubscribersApi.md#postPagesPageIdIncidentsIncidentIdSubscribers) | **POST** /pages/{page_id}/incidents/{incident_id}/subscribers | Create an incident subscriber |
| [**postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation()**](IncidentSubscribersApi.md#postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation) | **POST** /pages/{page_id}/incidents/{incident_id}/subscribers/{subscriber_id}/resend_confirmation | Resend confirmation to an incident subscriber |


## `deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId()`

```php
deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId($page_id, $incident_id, $subscriber_id): \OpenAPI\Client\Model\Subscriber
```

Unsubscribe an incident subscriber

Unsubscribe an incident subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier

try {
    $result = $apiInstance->deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId($page_id, $incident_id, $subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentSubscribersApi->deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **subscriber_id** | **string**| Subscriber Identifier | |

### Return type

[**\OpenAPI\Client\Model\Subscriber**](../Model/Subscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsIncidentIdSubscribers()`

```php
getPagesPageIdIncidentsIncidentIdSubscribers($page_id, $incident_id, $page, $per_page): \OpenAPI\Client\Model\Subscriber[]
```

Get a list of incident subscribers

Get a list of incident subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdIncidentsIncidentIdSubscribers($page_id, $incident_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentSubscribersApi->getPagesPageIdIncidentsIncidentIdSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Subscriber[]**](../Model/Subscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId()`

```php
getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId($page_id, $incident_id, $subscriber_id): \OpenAPI\Client\Model\Subscriber
```

Get an incident subscriber

Get an incident subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier

try {
    $result = $apiInstance->getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId($page_id, $incident_id, $subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentSubscribersApi->getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **subscriber_id** | **string**| Subscriber Identifier | |

### Return type

[**\OpenAPI\Client\Model\Subscriber**](../Model/Subscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdIncidentsIncidentIdSubscribers()`

```php
postPagesPageIdIncidentsIncidentIdSubscribers($page_id, $incident_id, $post_pages_page_id_incidents_incident_id_subscribers): \OpenAPI\Client\Model\Subscriber
```

Create an incident subscriber

Create an incident subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$post_pages_page_id_incidents_incident_id_subscribers = new \OpenAPI\Client\Model\PostPagesPageIdIncidentsIncidentIdSubscribers(); // \OpenAPI\Client\Model\PostPagesPageIdIncidentsIncidentIdSubscribers

try {
    $result = $apiInstance->postPagesPageIdIncidentsIncidentIdSubscribers($page_id, $incident_id, $post_pages_page_id_incidents_incident_id_subscribers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentSubscribersApi->postPagesPageIdIncidentsIncidentIdSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **post_pages_page_id_incidents_incident_id_subscribers** | [**\OpenAPI\Client\Model\PostPagesPageIdIncidentsIncidentIdSubscribers**](../Model/PostPagesPageIdIncidentsIncidentIdSubscribers.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Subscriber**](../Model/Subscriber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation()`

```php
postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation($page_id, $incident_id, $subscriber_id)
```

Resend confirmation to an incident subscriber

Resend confirmation to an incident subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentSubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier

try {
    $apiInstance->postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation($page_id, $incident_id, $subscriber_id);
} catch (Exception $e) {
    echo 'Exception when calling IncidentSubscribersApi->postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **subscriber_id** | **string**| Subscriber Identifier | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
