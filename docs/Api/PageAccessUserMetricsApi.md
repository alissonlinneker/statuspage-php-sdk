# OpenAPI\Client\PageAccessUserMetricsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics()**](PageAccessUserMetricsApi.md#deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Delete metrics for page access user |
| [**deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId()**](PageAccessUserMetricsApi.md#deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics/{metric_id} | Delete metric for page access user |
| [**getPagesPageIdPageAccessUsersPageAccessUserIdMetrics()**](PageAccessUserMetricsApi.md#getPagesPageIdPageAccessUsersPageAccessUserIdMetrics) | **GET** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Get metrics for page access user |
| [**patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics()**](PageAccessUserMetricsApi.md#patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics) | **PATCH** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Add metrics for page access user |
| [**postPagesPageIdPageAccessUsersPageAccessUserIdMetrics()**](PageAccessUserMetricsApi.md#postPagesPageIdPageAccessUsersPageAccessUserIdMetrics) | **POST** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Replace metrics for page access user |
| [**putPagesPageIdPageAccessUsersPageAccessUserIdMetrics()**](PageAccessUserMetricsApi.md#putPagesPageIdPageAccessUsersPageAccessUserIdMetrics) | **PUT** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Add metrics for page access user |


## `deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics()`

```php
deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $delete_pages_page_id_page_access_users_page_access_user_id_metrics): \OpenAPI\Client\Model\PageAccessUser
```

Delete metrics for page access user

Delete metrics for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$delete_pages_page_id_page_access_users_page_access_user_id_metrics = new \OpenAPI\Client\Model\DeletePagesPageIdPageAccessUsersPageAccessUserIdMetrics(); // \OpenAPI\Client\Model\DeletePagesPageIdPageAccessUsersPageAccessUserIdMetrics

try {
    $result = $apiInstance->deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $delete_pages_page_id_page_access_users_page_access_user_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserMetricsApi->deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **delete_pages_page_id_page_access_users_page_access_user_id_metrics** | [**\OpenAPI\Client\Model\DeletePagesPageIdPageAccessUsersPageAccessUserIdMetrics**](../Model/DeletePagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessUser**](../Model/PageAccessUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId()`

```php
deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId($page_id, $page_access_user_id, $metric_id): \OpenAPI\Client\Model\PageAccessUser
```

Delete metric for page access user

Delete metric for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$metric_id = 'metric_id_example'; // string | Identifier of metric requested

try {
    $result = $apiInstance->deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId($page_id, $page_access_user_id, $metric_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserMetricsApi->deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **metric_id** | **string**| Identifier of metric requested | |

### Return type

[**\OpenAPI\Client\Model\PageAccessUser**](../Model/PageAccessUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdPageAccessUsersPageAccessUserIdMetrics()`

```php
getPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $page, $per_page): \OpenAPI\Client\Model\Metric[]
```

Get metrics for page access user

Get metrics for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserMetricsApi->getPagesPageIdPageAccessUsersPageAccessUserIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Metric[]**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics()`

```php
patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $patch_pages_page_id_page_access_users_page_access_user_id_metrics): \OpenAPI\Client\Model\PageAccessUser
```

Add metrics for page access user

Add metrics for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$patch_pages_page_id_page_access_users_page_access_user_id_metrics = new \OpenAPI\Client\Model\PatchPagesPageIdPageAccessUsersPageAccessUserIdMetrics(); // \OpenAPI\Client\Model\PatchPagesPageIdPageAccessUsersPageAccessUserIdMetrics

try {
    $result = $apiInstance->patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $patch_pages_page_id_page_access_users_page_access_user_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserMetricsApi->patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **patch_pages_page_id_page_access_users_page_access_user_id_metrics** | [**\OpenAPI\Client\Model\PatchPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](../Model/PatchPagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessUser**](../Model/PageAccessUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdPageAccessUsersPageAccessUserIdMetrics()`

```php
postPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $post_pages_page_id_page_access_users_page_access_user_id_metrics): \OpenAPI\Client\Model\PageAccessUser
```

Replace metrics for page access user

Replace metrics for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$post_pages_page_id_page_access_users_page_access_user_id_metrics = new \OpenAPI\Client\Model\PostPagesPageIdPageAccessUsersPageAccessUserIdMetrics(); // \OpenAPI\Client\Model\PostPagesPageIdPageAccessUsersPageAccessUserIdMetrics

try {
    $result = $apiInstance->postPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $post_pages_page_id_page_access_users_page_access_user_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserMetricsApi->postPagesPageIdPageAccessUsersPageAccessUserIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **post_pages_page_id_page_access_users_page_access_user_id_metrics** | [**\OpenAPI\Client\Model\PostPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](../Model/PostPagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessUser**](../Model/PageAccessUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdPageAccessUsersPageAccessUserIdMetrics()`

```php
putPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $put_pages_page_id_page_access_users_page_access_user_id_metrics): \OpenAPI\Client\Model\PageAccessUser
```

Add metrics for page access user

Add metrics for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$put_pages_page_id_page_access_users_page_access_user_id_metrics = new \OpenAPI\Client\Model\PutPagesPageIdPageAccessUsersPageAccessUserIdMetrics(); // \OpenAPI\Client\Model\PutPagesPageIdPageAccessUsersPageAccessUserIdMetrics

try {
    $result = $apiInstance->putPagesPageIdPageAccessUsersPageAccessUserIdMetrics($page_id, $page_access_user_id, $put_pages_page_id_page_access_users_page_access_user_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserMetricsApi->putPagesPageIdPageAccessUsersPageAccessUserIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **put_pages_page_id_page_access_users_page_access_user_id_metrics** | [**\OpenAPI\Client\Model\PutPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](../Model/PutPagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessUser**](../Model/PageAccessUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
