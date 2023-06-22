# OpenAPI\Client\SubscribersApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdSubscribersSubscriberId()**](SubscribersApi.md#deletePagesPageIdSubscribersSubscriberId) | **DELETE** /pages/{page_id}/subscribers/{subscriber_id} | Unsubscribe a subscriber |
| [**getPagesPageIdSubscribers()**](SubscribersApi.md#getPagesPageIdSubscribers) | **GET** /pages/{page_id}/subscribers | Get a list of subscribers |
| [**getPagesPageIdSubscribersCount()**](SubscribersApi.md#getPagesPageIdSubscribersCount) | **GET** /pages/{page_id}/subscribers/count | Get a count of subscribers by type |
| [**getPagesPageIdSubscribersHistogramByState()**](SubscribersApi.md#getPagesPageIdSubscribersHistogramByState) | **GET** /pages/{page_id}/subscribers/histogram_by_state | Get a histogram of subscribers by type and then state |
| [**getPagesPageIdSubscribersSubscriberId()**](SubscribersApi.md#getPagesPageIdSubscribersSubscriberId) | **GET** /pages/{page_id}/subscribers/{subscriber_id} | Get a subscriber |
| [**getPagesPageIdSubscribersUnsubscribed()**](SubscribersApi.md#getPagesPageIdSubscribersUnsubscribed) | **GET** /pages/{page_id}/subscribers/unsubscribed | Get a list of unsubscribed subscribers |
| [**patchPagesPageIdSubscribersSubscriberId()**](SubscribersApi.md#patchPagesPageIdSubscribersSubscriberId) | **PATCH** /pages/{page_id}/subscribers/{subscriber_id} | Update a subscriber |
| [**postPagesPageIdSubscribers()**](SubscribersApi.md#postPagesPageIdSubscribers) | **POST** /pages/{page_id}/subscribers | Create a subscriber |
| [**postPagesPageIdSubscribersReactivate()**](SubscribersApi.md#postPagesPageIdSubscribersReactivate) | **POST** /pages/{page_id}/subscribers/reactivate | Reactivate a list of subscribers |
| [**postPagesPageIdSubscribersResendConfirmation()**](SubscribersApi.md#postPagesPageIdSubscribersResendConfirmation) | **POST** /pages/{page_id}/subscribers/resend_confirmation | Resend confirmations to a list of subscribers |
| [**postPagesPageIdSubscribersSubscriberIdResendConfirmation()**](SubscribersApi.md#postPagesPageIdSubscribersSubscriberIdResendConfirmation) | **POST** /pages/{page_id}/subscribers/{subscriber_id}/resend_confirmation | Resend confirmation to a subscriber |
| [**postPagesPageIdSubscribersUnsubscribe()**](SubscribersApi.md#postPagesPageIdSubscribersUnsubscribe) | **POST** /pages/{page_id}/subscribers/unsubscribe | Unsubscribe a list of subscribers |


## `deletePagesPageIdSubscribersSubscriberId()`

```php
deletePagesPageIdSubscribersSubscriberId($page_id, $subscriber_id, $skip_unsubscription_notification): \OpenAPI\Client\Model\Subscriber
```

Unsubscribe a subscriber

Unsubscribe a subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier
$skip_unsubscription_notification = True; // bool | If skip_unsubscription_notification is true, the subscriber does not receive any notifications when they are unsubscribed.

try {
    $result = $apiInstance->deletePagesPageIdSubscribersSubscriberId($page_id, $subscriber_id, $skip_unsubscription_notification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->deletePagesPageIdSubscribersSubscriberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **subscriber_id** | **string**| Subscriber Identifier | |
| **skip_unsubscription_notification** | **bool**| If skip_unsubscription_notification is true, the subscriber does not receive any notifications when they are unsubscribed. | [optional] |

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

## `getPagesPageIdSubscribers()`

```php
getPagesPageIdSubscribers($page_id, $q, $type, $state, $limit, $page, $sort_field, $sort_direction): \OpenAPI\Client\Model\Subscriber[]
```

Get a list of subscribers

Get a list of subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$q = 'q_example'; // string | If this is specified, search the contact information (email, endpoint, or phone number) for the provided value. This parameter doesn’t support searching for Slack subscribers.
$type = 'type_example'; // string | If specified, only return subscribers of the indicated type.
$state = 'active'; // string | If this is present, only return subscribers in this state. Specify state \"all\" to find subscribers in any states.
$limit = 56; // int | The maximum number of rows to return. If a text query string is specified (q=), the default and maximum limit is 100. If the text query string is not specified, the default and maximum limit are not set, and not providing a limit will return all the subscribers. Beginning February 28, 2023, a default limit of 100 will be imposed and this endpoint will return paginated data (i.e. will no longer return all subscribers) even if this query parameter is not provided.
$page = 0; // int | The page offset of subscribers. The first page is page 0, the second page 1, etc. This skips page * limit subscribers. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$sort_field = 'primary'; // string | The field on which to sort: 'primary' to indicate sorting by the identifying field, 'created_at' for sorting by creation timestamp, 'quarantined_at' for sorting by quarantine timestamp, and 'relevance' which sorts by the relevancy of the search text. 'relevance' is not a valid parameter if no search text is supplied.
$sort_direction = 'asc'; // string | The sort direction of the listing.

try {
    $result = $apiInstance->getPagesPageIdSubscribers($page_id, $q, $type, $state, $limit, $page, $sort_field, $sort_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getPagesPageIdSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **q** | **string**| If this is specified, search the contact information (email, endpoint, or phone number) for the provided value. This parameter doesn’t support searching for Slack subscribers. | [optional] |
| **type** | **string**| If specified, only return subscribers of the indicated type. | [optional] |
| **state** | **string**| If this is present, only return subscribers in this state. Specify state \&quot;all\&quot; to find subscribers in any states. | [optional] [default to &#39;active&#39;] |
| **limit** | **int**| The maximum number of rows to return. If a text query string is specified (q&#x3D;), the default and maximum limit is 100. If the text query string is not specified, the default and maximum limit are not set, and not providing a limit will return all the subscribers. Beginning February 28, 2023, a default limit of 100 will be imposed and this endpoint will return paginated data (i.e. will no longer return all subscribers) even if this query parameter is not provided. | [optional] |
| **page** | **int**| The page offset of subscribers. The first page is page 0, the second page 1, etc. This skips page * limit subscribers. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] [default to 0] |
| **sort_field** | **string**| The field on which to sort: &#39;primary&#39; to indicate sorting by the identifying field, &#39;created_at&#39; for sorting by creation timestamp, &#39;quarantined_at&#39; for sorting by quarantine timestamp, and &#39;relevance&#39; which sorts by the relevancy of the search text. &#39;relevance&#39; is not a valid parameter if no search text is supplied. | [optional] [default to &#39;primary&#39;] |
| **sort_direction** | **string**| The sort direction of the listing. | [optional] [default to &#39;asc&#39;] |

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

## `getPagesPageIdSubscribersCount()`

```php
getPagesPageIdSubscribersCount($page_id, $type, $state): \OpenAPI\Client\Model\SubscriberCountByType
```

Get a count of subscribers by type

Get a count of subscribers by type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$type = 'type_example'; // string | If this is present, only count subscribers of this type.
$state = 'active'; // string | If this is present, only count subscribers in this state. Specify state \"all\" to count subscribers in any states.

try {
    $result = $apiInstance->getPagesPageIdSubscribersCount($page_id, $type, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getPagesPageIdSubscribersCount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **type** | **string**| If this is present, only count subscribers of this type. | [optional] |
| **state** | **string**| If this is present, only count subscribers in this state. Specify state \&quot;all\&quot; to count subscribers in any states. | [optional] [default to &#39;active&#39;] |

### Return type

[**\OpenAPI\Client\Model\SubscriberCountByType**](../Model/SubscriberCountByType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdSubscribersHistogramByState()`

```php
getPagesPageIdSubscribersHistogramByState($page_id): \OpenAPI\Client\Model\SubscriberCountByTypeAndState
```

Get a histogram of subscribers by type and then state

Get a histogram of subscribers by type and then state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier

try {
    $result = $apiInstance->getPagesPageIdSubscribersHistogramByState($page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getPagesPageIdSubscribersHistogramByState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |

### Return type

[**\OpenAPI\Client\Model\SubscriberCountByTypeAndState**](../Model/SubscriberCountByTypeAndState.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdSubscribersSubscriberId()`

```php
getPagesPageIdSubscribersSubscriberId($page_id, $subscriber_id): \OpenAPI\Client\Model\Subscriber
```

Get a subscriber

Get a subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier

try {
    $result = $apiInstance->getPagesPageIdSubscribersSubscriberId($page_id, $subscriber_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getPagesPageIdSubscribersSubscriberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
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

## `getPagesPageIdSubscribersUnsubscribed()`

```php
getPagesPageIdSubscribersUnsubscribed($page_id, $page, $per_page): \OpenAPI\Client\Model\Subscriber[]
```

Get a list of unsubscribed subscribers

Get a list of unsubscribed subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdSubscribersUnsubscribed($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getPagesPageIdSubscribersUnsubscribed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
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

## `patchPagesPageIdSubscribersSubscriberId()`

```php
patchPagesPageIdSubscribersSubscriberId($page_id, $subscriber_id, $patch_pages_page_id_subscribers): \OpenAPI\Client\Model\Subscriber
```

Update a subscriber

Update a subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier
$patch_pages_page_id_subscribers = new \OpenAPI\Client\Model\PatchPagesPageIdSubscribers(); // \OpenAPI\Client\Model\PatchPagesPageIdSubscribers

try {
    $result = $apiInstance->patchPagesPageIdSubscribersSubscriberId($page_id, $subscriber_id, $patch_pages_page_id_subscribers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->patchPagesPageIdSubscribersSubscriberId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **subscriber_id** | **string**| Subscriber Identifier | |
| **patch_pages_page_id_subscribers** | [**\OpenAPI\Client\Model\PatchPagesPageIdSubscribers**](../Model/PatchPagesPageIdSubscribers.md)|  | |

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

## `postPagesPageIdSubscribers()`

```php
postPagesPageIdSubscribers($page_id, $post_pages_page_id_subscribers): \OpenAPI\Client\Model\Subscriber
```

Create a subscriber

Create a subscriber. Not applicable for Slack subscribers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_subscribers = new \OpenAPI\Client\Model\PostPagesPageIdSubscribers(); // \OpenAPI\Client\Model\PostPagesPageIdSubscribers

try {
    $result = $apiInstance->postPagesPageIdSubscribers($page_id, $post_pages_page_id_subscribers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->postPagesPageIdSubscribers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_subscribers** | [**\OpenAPI\Client\Model\PostPagesPageIdSubscribers**](../Model/PostPagesPageIdSubscribers.md)|  | |

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

## `postPagesPageIdSubscribersReactivate()`

```php
postPagesPageIdSubscribersReactivate($page_id, $post_pages_page_id_subscribers_reactivate)
```

Reactivate a list of subscribers

Reactivate a list of quarantined subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_subscribers_reactivate = new \OpenAPI\Client\Model\PostPagesPageIdSubscribersReactivate(); // \OpenAPI\Client\Model\PostPagesPageIdSubscribersReactivate

try {
    $apiInstance->postPagesPageIdSubscribersReactivate($page_id, $post_pages_page_id_subscribers_reactivate);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->postPagesPageIdSubscribersReactivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_subscribers_reactivate** | [**\OpenAPI\Client\Model\PostPagesPageIdSubscribersReactivate**](../Model/PostPagesPageIdSubscribersReactivate.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdSubscribersResendConfirmation()`

```php
postPagesPageIdSubscribersResendConfirmation($page_id, $post_pages_page_id_subscribers_resend_confirmation)
```

Resend confirmations to a list of subscribers

Resend confirmations to a list of subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_subscribers_resend_confirmation = new \OpenAPI\Client\Model\PostPagesPageIdSubscribersResendConfirmation(); // \OpenAPI\Client\Model\PostPagesPageIdSubscribersResendConfirmation

try {
    $apiInstance->postPagesPageIdSubscribersResendConfirmation($page_id, $post_pages_page_id_subscribers_resend_confirmation);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->postPagesPageIdSubscribersResendConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_subscribers_resend_confirmation** | [**\OpenAPI\Client\Model\PostPagesPageIdSubscribersResendConfirmation**](../Model/PostPagesPageIdSubscribersResendConfirmation.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdSubscribersSubscriberIdResendConfirmation()`

```php
postPagesPageIdSubscribersSubscriberIdResendConfirmation($page_id, $subscriber_id)
```

Resend confirmation to a subscriber

Resend confirmation to a subscriber

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$subscriber_id = 'subscriber_id_example'; // string | Subscriber Identifier

try {
    $apiInstance->postPagesPageIdSubscribersSubscriberIdResendConfirmation($page_id, $subscriber_id);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->postPagesPageIdSubscribersSubscriberIdResendConfirmation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **subscriber_id** | **string**| Subscriber Identifier | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdSubscribersUnsubscribe()`

```php
postPagesPageIdSubscribersUnsubscribe($page_id, $post_pages_page_id_subscribers_unsubscribe)
```

Unsubscribe a list of subscribers

Unsubscribe a list of subscribers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_subscribers_unsubscribe = new \OpenAPI\Client\Model\PostPagesPageIdSubscribersUnsubscribe(); // \OpenAPI\Client\Model\PostPagesPageIdSubscribersUnsubscribe

try {
    $apiInstance->postPagesPageIdSubscribersUnsubscribe($page_id, $post_pages_page_id_subscribers_unsubscribe);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->postPagesPageIdSubscribersUnsubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_subscribers_unsubscribe** | [**\OpenAPI\Client\Model\PostPagesPageIdSubscribersUnsubscribe**](../Model/PostPagesPageIdSubscribersUnsubscribe.md)|  | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
