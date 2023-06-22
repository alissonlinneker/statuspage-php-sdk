# OpenAPI\Client\MetricProvidersApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdMetricsProvidersMetricsProviderId()**](MetricProvidersApi.md#deletePagesPageIdMetricsProvidersMetricsProviderId) | **DELETE** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Delete a metric provider |
| [**getPagesPageIdMetricsProviders()**](MetricProvidersApi.md#getPagesPageIdMetricsProviders) | **GET** /pages/{page_id}/metrics_providers | Get a list of metric providers |
| [**getPagesPageIdMetricsProvidersMetricsProviderId()**](MetricProvidersApi.md#getPagesPageIdMetricsProvidersMetricsProviderId) | **GET** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Get a metric provider |
| [**getPagesPageIdMetricsProvidersMetricsProviderIdMetrics()**](MetricProvidersApi.md#getPagesPageIdMetricsProvidersMetricsProviderIdMetrics) | **GET** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | List metrics for a metric provider |
| [**patchPagesPageIdMetricsProvidersMetricsProviderId()**](MetricProvidersApi.md#patchPagesPageIdMetricsProvidersMetricsProviderId) | **PATCH** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Update a metric provider |
| [**postPagesPageIdMetricsProviders()**](MetricProvidersApi.md#postPagesPageIdMetricsProviders) | **POST** /pages/{page_id}/metrics_providers | Create a metric provider |
| [**postPagesPageIdMetricsProvidersMetricsProviderIdMetrics()**](MetricProvidersApi.md#postPagesPageIdMetricsProvidersMetricsProviderIdMetrics) | **POST** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | Create a metric for a metric provider |
| [**putPagesPageIdMetricsProvidersMetricsProviderId()**](MetricProvidersApi.md#putPagesPageIdMetricsProvidersMetricsProviderId) | **PUT** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Update a metric provider |


## `deletePagesPageIdMetricsProvidersMetricsProviderId()`

```php
deletePagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id): \OpenAPI\Client\Model\MetricsProvider
```

Delete a metric provider

Delete a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metrics_provider_id = 'metrics_provider_id_example'; // string | Metric Provider Identifier

try {
    $result = $apiInstance->deletePagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricProvidersApi->deletePagesPageIdMetricsProvidersMetricsProviderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metrics_provider_id** | **string**| Metric Provider Identifier | |

### Return type

[**\OpenAPI\Client\Model\MetricsProvider**](../Model/MetricsProvider.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdMetricsProviders()`

```php
getPagesPageIdMetricsProviders($page_id): \OpenAPI\Client\Model\MetricsProvider[]
```

Get a list of metric providers

Get a list of metric providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier

try {
    $result = $apiInstance->getPagesPageIdMetricsProviders($page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricProvidersApi->getPagesPageIdMetricsProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |

### Return type

[**\OpenAPI\Client\Model\MetricsProvider[]**](../Model/MetricsProvider.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdMetricsProvidersMetricsProviderId()`

```php
getPagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id): \OpenAPI\Client\Model\MetricsProvider
```

Get a metric provider

Get a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metrics_provider_id = 'metrics_provider_id_example'; // string | Metric Provider Identifier

try {
    $result = $apiInstance->getPagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricProvidersApi->getPagesPageIdMetricsProvidersMetricsProviderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metrics_provider_id** | **string**| Metric Provider Identifier | |

### Return type

[**\OpenAPI\Client\Model\MetricsProvider**](../Model/MetricsProvider.md)

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


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
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
    echo 'Exception when calling MetricProvidersApi->getPagesPageIdMetricsProvidersMetricsProviderIdMetrics: ', $e->getMessage(), PHP_EOL;
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

## `patchPagesPageIdMetricsProvidersMetricsProviderId()`

```php
patchPagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id, $patch_pages_page_id_metrics_providers): \OpenAPI\Client\Model\MetricsProvider
```

Update a metric provider

Update a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metrics_provider_id = 'metrics_provider_id_example'; // string | Metric Provider Identifier
$patch_pages_page_id_metrics_providers = new \OpenAPI\Client\Model\PatchPagesPageIdMetricsProviders(); // \OpenAPI\Client\Model\PatchPagesPageIdMetricsProviders

try {
    $result = $apiInstance->patchPagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id, $patch_pages_page_id_metrics_providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricProvidersApi->patchPagesPageIdMetricsProvidersMetricsProviderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metrics_provider_id** | **string**| Metric Provider Identifier | |
| **patch_pages_page_id_metrics_providers** | [**\OpenAPI\Client\Model\PatchPagesPageIdMetricsProviders**](../Model/PatchPagesPageIdMetricsProviders.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MetricsProvider**](../Model/MetricsProvider.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdMetricsProviders()`

```php
postPagesPageIdMetricsProviders($page_id, $post_pages_page_id_metrics_providers): \OpenAPI\Client\Model\MetricsProvider
```

Create a metric provider

Create a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_metrics_providers = new \OpenAPI\Client\Model\PostPagesPageIdMetricsProviders(); // \OpenAPI\Client\Model\PostPagesPageIdMetricsProviders

try {
    $result = $apiInstance->postPagesPageIdMetricsProviders($page_id, $post_pages_page_id_metrics_providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricProvidersApi->postPagesPageIdMetricsProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_metrics_providers** | [**\OpenAPI\Client\Model\PostPagesPageIdMetricsProviders**](../Model/PostPagesPageIdMetricsProviders.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MetricsProvider**](../Model/MetricsProvider.md)

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


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
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
    echo 'Exception when calling MetricProvidersApi->postPagesPageIdMetricsProvidersMetricsProviderIdMetrics: ', $e->getMessage(), PHP_EOL;
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

## `putPagesPageIdMetricsProvidersMetricsProviderId()`

```php
putPagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id, $put_pages_page_id_metrics_providers): \OpenAPI\Client\Model\MetricsProvider
```

Update a metric provider

Update a metric provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MetricProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$metrics_provider_id = 'metrics_provider_id_example'; // string | Metric Provider Identifier
$put_pages_page_id_metrics_providers = new \OpenAPI\Client\Model\PutPagesPageIdMetricsProviders(); // \OpenAPI\Client\Model\PutPagesPageIdMetricsProviders

try {
    $result = $apiInstance->putPagesPageIdMetricsProvidersMetricsProviderId($page_id, $metrics_provider_id, $put_pages_page_id_metrics_providers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetricProvidersApi->putPagesPageIdMetricsProvidersMetricsProviderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **metrics_provider_id** | **string**| Metric Provider Identifier | |
| **put_pages_page_id_metrics_providers** | [**\OpenAPI\Client\Model\PutPagesPageIdMetricsProviders**](../Model/PutPagesPageIdMetricsProviders.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MetricsProvider**](../Model/MetricsProvider.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
