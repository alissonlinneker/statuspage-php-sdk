# OpenAPI\Client\MetricsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdMetricsMetricId()**](MetricsApi.md#deletePagesPageIdMetricsMetricId) | **DELETE** /pages/{page_id}/metrics/{metric_id} | Delete a metric |
| [**deletePagesPageIdMetricsMetricIdData()**](MetricsApi.md#deletePagesPageIdMetricsMetricIdData) | **DELETE** /pages/{page_id}/metrics/{metric_id}/data | Reset data for a metric |
| [**getPagesPageIdMetrics()**](MetricsApi.md#getPagesPageIdMetrics) | **GET** /pages/{page_id}/metrics | Get a list of metrics |
| [**getPagesPageIdMetricsMetricId()**](MetricsApi.md#getPagesPageIdMetricsMetricId) | **GET** /pages/{page_id}/metrics/{metric_id} | Get a metric |
| [**getPagesPageIdMetricsProvidersMetricsProviderIdMetrics()**](MetricsApi.md#getPagesPageIdMetricsProvidersMetricsProviderIdMetrics) | **GET** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | List metrics for a metric provider |
| [**patchPagesPageIdMetricsMetricId()**](MetricsApi.md#patchPagesPageIdMetricsMetricId) | **PATCH** /pages/{page_id}/metrics/{metric_id} | Update a metric |
| [**postPagesPageIdMetricsData()**](MetricsApi.md#postPagesPageIdMetricsData) | **POST** /pages/{page_id}/metrics/data | Add data points to metrics |
| [**postPagesPageIdMetricsMetricIdData()**](MetricsApi.md#postPagesPageIdMetricsMetricIdData) | **POST** /pages/{page_id}/metrics/{metric_id}/data | Add data to a metric |
| [**postPagesPageIdMetricsProvidersMetricsProviderIdMetrics()**](MetricsApi.md#postPagesPageIdMetricsProvidersMetricsProviderIdMetrics) | **POST** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | Create a metric for a metric provider |
| [**putPagesPageIdMetricsMetricId()**](MetricsApi.md#putPagesPageIdMetricsMetricId) | **PUT** /pages/{page_id}/metrics/{metric_id} | Update a metric |


## `deletePagesPageIdMetricsMetricId()`

```php
deletePagesPageIdMetricsMetricId($page_id, $metric_id): \OpenAPI\Client\Model\Metric
```

Delete a metric

Delete a metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metric_id = 'metric_id_example'; // string | Metric Identifier

try {
    $result = $apiInstance->deletePagesPageIdMetricsMetricId($page_id, $metric_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->deletePagesPageIdMetricsMetricId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metric_id** | **string**| Metric Identifier | |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePagesPageIdMetricsMetricIdData()`

```php
deletePagesPageIdMetricsMetricIdData($page_id, $metric_id): \OpenAPI\Client\Model\Metric
```

Reset data for a metric

Reset data for a metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metric_id = 'metric_id_example'; // string | Metric Identifier

try {
    $result = $apiInstance->deletePagesPageIdMetricsMetricIdData($page_id, $metric_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->deletePagesPageIdMetricsMetricIdData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metric_id** | **string**| Metric Identifier | |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdMetrics()`

```php
getPagesPageIdMetrics($page_id, $page, $per_page): \OpenAPI\Client\Model\Metric
```

Get a list of metrics

Get a list of metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdMetrics($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getPagesPageIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdMetricsMetricId()`

```php
getPagesPageIdMetricsMetricId($page_id, $metric_id): \OpenAPI\Client\Model\Metric
```

Get a metric

Get a metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metric_id = 'metric_id_example'; // string | Metric Identifier

try {
    $result = $apiInstance->getPagesPageIdMetricsMetricId($page_id, $metric_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getPagesPageIdMetricsMetricId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metric_id** | **string**| Metric Identifier | |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdMetricsProvidersMetricsProviderIdMetrics()`

```php
getPagesPageIdMetricsProvidersMetricsProviderIdMetrics($page_id, $metrics_provider_id, $page, $per_page): \OpenAPI\Client\Model\Metric
```

List metrics for a metric provider

List metrics for a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metrics_provider_id = 'metrics_provider_id_example'; // string | Metric Provider Identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdMetricsProvidersMetricsProviderIdMetrics($page_id, $metrics_provider_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->getPagesPageIdMetricsProvidersMetricsProviderIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metrics_provider_id** | **string**| Metric Provider Identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdMetricsMetricId()`

```php
patchPagesPageIdMetricsMetricId($page_id, $metric_id, $patch_pages_page_id_metrics): \OpenAPI\Client\Model\Metric
```

Update a metric

Update a metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metric_id = 'metric_id_example'; // string | Metric Identifier
$patch_pages_page_id_metrics = new \OpenAPI\Client\Model\PatchPagesPageIdMetrics(); // \OpenAPI\Client\Model\PatchPagesPageIdMetrics

try {
    $result = $apiInstance->patchPagesPageIdMetricsMetricId($page_id, $metric_id, $patch_pages_page_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->patchPagesPageIdMetricsMetricId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metric_id** | **string**| Metric Identifier | |
| **patch_pages_page_id_metrics** | [**\OpenAPI\Client\Model\PatchPagesPageIdMetrics**](../Model/PatchPagesPageIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdMetricsData()`

```php
postPagesPageIdMetricsData($page_id, $post_pages_page_id_metrics_data): \OpenAPI\Client\Model\MetricAddResponse
```

Add data points to metrics

Add data points to metrics

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_metrics_data = new \OpenAPI\Client\Model\PostPagesPageIdMetricsData(); // \OpenAPI\Client\Model\PostPagesPageIdMetricsData

try {
    $result = $apiInstance->postPagesPageIdMetricsData($page_id, $post_pages_page_id_metrics_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->postPagesPageIdMetricsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_metrics_data** | [**\OpenAPI\Client\Model\PostPagesPageIdMetricsData**](../Model/PostPagesPageIdMetricsData.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MetricAddResponse**](../Model/MetricAddResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdMetricsMetricIdData()`

```php
postPagesPageIdMetricsMetricIdData($page_id, $metric_id, $post_pages_page_id_metrics_metric_id_data): \OpenAPI\Client\Model\SingleMetricAddResponse
```

Add data to a metric

Add data to a metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metric_id = 'metric_id_example'; // string | Metric Identifier
$post_pages_page_id_metrics_metric_id_data = new \OpenAPI\Client\Model\PostPagesPageIdMetricsMetricIdData(); // \OpenAPI\Client\Model\PostPagesPageIdMetricsMetricIdData

try {
    $result = $apiInstance->postPagesPageIdMetricsMetricIdData($page_id, $metric_id, $post_pages_page_id_metrics_metric_id_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->postPagesPageIdMetricsMetricIdData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metric_id** | **string**| Metric Identifier | |
| **post_pages_page_id_metrics_metric_id_data** | [**\OpenAPI\Client\Model\PostPagesPageIdMetricsMetricIdData**](../Model/PostPagesPageIdMetricsMetricIdData.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SingleMetricAddResponse**](../Model/SingleMetricAddResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdMetricsProvidersMetricsProviderIdMetrics()`

```php
postPagesPageIdMetricsProvidersMetricsProviderIdMetrics($page_id, $metrics_provider_id, $post_pages_page_id_metrics_providers_metrics_provider_id_metrics): \OpenAPI\Client\Model\Metric
```

Create a metric for a metric provider

Create a metric for a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metrics_provider_id = 'metrics_provider_id_example'; // string | Metric Provider Identifier
$post_pages_page_id_metrics_providers_metrics_provider_id_metrics = new \OpenAPI\Client\Model\PostPagesPageIdMetricsProvidersMetricsProviderIdMetrics(); // \OpenAPI\Client\Model\PostPagesPageIdMetricsProvidersMetricsProviderIdMetrics

try {
    $result = $apiInstance->postPagesPageIdMetricsProvidersMetricsProviderIdMetrics($page_id, $metrics_provider_id, $post_pages_page_id_metrics_providers_metrics_provider_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->postPagesPageIdMetricsProvidersMetricsProviderIdMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metrics_provider_id** | **string**| Metric Provider Identifier | |
| **post_pages_page_id_metrics_providers_metrics_provider_id_metrics** | [**\OpenAPI\Client\Model\PostPagesPageIdMetricsProvidersMetricsProviderIdMetrics**](../Model/PostPagesPageIdMetricsProvidersMetricsProviderIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdMetricsMetricId()`

```php
putPagesPageIdMetricsMetricId($page_id, $metric_id, $put_pages_page_id_metrics): \OpenAPI\Client\Model\Metric
```

Update a metric

Update a metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metric_id = 'metric_id_example'; // string | Metric Identifier
$put_pages_page_id_metrics = new \OpenAPI\Client\Model\PutPagesPageIdMetrics(); // \OpenAPI\Client\Model\PutPagesPageIdMetrics

try {
    $result = $apiInstance->putPagesPageIdMetricsMetricId($page_id, $metric_id, $put_pages_page_id_metrics);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricsApi->putPagesPageIdMetricsMetricId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metric_id** | **string**| Metric Identifier | |
| **put_pages_page_id_metrics** | [**\OpenAPI\Client\Model\PutPagesPageIdMetrics**](../Model/PutPagesPageIdMetrics.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Metric**](../Model/Metric.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
