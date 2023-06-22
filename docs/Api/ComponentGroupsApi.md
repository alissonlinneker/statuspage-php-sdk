# OpenAPI\Client\ComponentGroupsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdComponentGroupsId()**](ComponentGroupsApi.md#deletePagesPageIdComponentGroupsId) | **DELETE** /pages/{page_id}/component-groups/{id} | Delete a component group |
| [**getPagesPageIdComponentGroups()**](ComponentGroupsApi.md#getPagesPageIdComponentGroups) | **GET** /pages/{page_id}/component-groups | Get a list of component groups |
| [**getPagesPageIdComponentGroupsId()**](ComponentGroupsApi.md#getPagesPageIdComponentGroupsId) | **GET** /pages/{page_id}/component-groups/{id} | Get a component group |
| [**getPagesPageIdComponentGroupsIdUptime()**](ComponentGroupsApi.md#getPagesPageIdComponentGroupsIdUptime) | **GET** /pages/{page_id}/component-groups/{id}/uptime | Get uptime data for a component group |
| [**patchPagesPageIdComponentGroupsId()**](ComponentGroupsApi.md#patchPagesPageIdComponentGroupsId) | **PATCH** /pages/{page_id}/component-groups/{id} | Update a component group |
| [**postPagesPageIdComponentGroups()**](ComponentGroupsApi.md#postPagesPageIdComponentGroups) | **POST** /pages/{page_id}/component-groups | Create a component group |
| [**putPagesPageIdComponentGroupsId()**](ComponentGroupsApi.md#putPagesPageIdComponentGroupsId) | **PUT** /pages/{page_id}/component-groups/{id} | Update a component group |


## `deletePagesPageIdComponentGroupsId()`

```php
deletePagesPageIdComponentGroupsId($page_id, $id): \OpenAPI\Client\Model\GroupComponent
```

Delete a component group

Delete a component group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$id = 'id_example'; // string | Component group identifier

try {
    $result = $apiInstance->deletePagesPageIdComponentGroupsId($page_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->deletePagesPageIdComponentGroupsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **id** | **string**| Component group identifier | |

### Return type

[**\OpenAPI\Client\Model\GroupComponent**](../Model/GroupComponent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdComponentGroups()`

```php
getPagesPageIdComponentGroups($page_id, $page, $per_page): \OpenAPI\Client\Model\GroupComponent[]
```

Get a list of component groups

Get a list of component groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdComponentGroups($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->getPagesPageIdComponentGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GroupComponent[]**](../Model/GroupComponent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdComponentGroupsId()`

```php
getPagesPageIdComponentGroupsId($page_id, $id): \OpenAPI\Client\Model\GroupComponent
```

Get a component group

Get a component group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$id = 'id_example'; // string | Component group identifier

try {
    $result = $apiInstance->getPagesPageIdComponentGroupsId($page_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->getPagesPageIdComponentGroupsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **id** | **string**| Component group identifier | |

### Return type

[**\OpenAPI\Client\Model\GroupComponent**](../Model/GroupComponent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdComponentGroupsIdUptime()`

```php
getPagesPageIdComponentGroupsIdUptime($page_id, $id, $start, $end): \OpenAPI\Client\Model\ComponentGroupUptime
```

Get uptime data for a component group

Get uptime data for a component group that has uptime showcase enabled for at least one component.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$id = 'id_example'; // string | Component group identifier
$start = new \OpenAPI\Client\Model\PartialStartDate(); // PartialStartDate | The start date for uptime calculation (defaults to the date of the component in the group with the earliest start_date, or 90 days ago, whichever is more recent). The maximum supported date range is six calendar months. If the year is given, the date defaults to the first day of the year. If the year and month are given, the start date defaults to the first day of that month. The earliest supported date is January 1, 1970.
$end = new \OpenAPI\Client\Model\PartialEndDate(); // PartialEndDate | The end date for uptime calculation (defaults to today in the page's time zone). The maximum supported date range is six calendar months. If the year is given, the date defaults to the last day of the year. If the year and month are given, the date defaults to the last day of that month. The earliest supported date is January 1, 1970.

try {
    $result = $apiInstance->getPagesPageIdComponentGroupsIdUptime($page_id, $id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->getPagesPageIdComponentGroupsIdUptime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **id** | **string**| Component group identifier | |
| **start** | [**PartialStartDate**](../Model/.md)| The start date for uptime calculation (defaults to the date of the component in the group with the earliest start_date, or 90 days ago, whichever is more recent). The maximum supported date range is six calendar months. If the year is given, the date defaults to the first day of the year. If the year and month are given, the start date defaults to the first day of that month. The earliest supported date is January 1, 1970. | [optional] |
| **end** | [**PartialEndDate**](../Model/.md)| The end date for uptime calculation (defaults to today in the page&#39;s time zone). The maximum supported date range is six calendar months. If the year is given, the date defaults to the last day of the year. If the year and month are given, the date defaults to the last day of that month. The earliest supported date is January 1, 1970. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComponentGroupUptime**](../Model/ComponentGroupUptime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdComponentGroupsId()`

```php
patchPagesPageIdComponentGroupsId($page_id, $id, $patch_pages_page_id_component_groups): \OpenAPI\Client\Model\GroupComponent
```

Update a component group

Update a component group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$id = 'id_example'; // string | Component group identifier
$patch_pages_page_id_component_groups = new \OpenAPI\Client\Model\PatchPagesPageIdComponentGroups(); // \OpenAPI\Client\Model\PatchPagesPageIdComponentGroups

try {
    $result = $apiInstance->patchPagesPageIdComponentGroupsId($page_id, $id, $patch_pages_page_id_component_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->patchPagesPageIdComponentGroupsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **id** | **string**| Component group identifier | |
| **patch_pages_page_id_component_groups** | [**\OpenAPI\Client\Model\PatchPagesPageIdComponentGroups**](../Model/PatchPagesPageIdComponentGroups.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupComponent**](../Model/GroupComponent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdComponentGroups()`

```php
postPagesPageIdComponentGroups($page_id, $post_pages_page_id_component_groups): \OpenAPI\Client\Model\GroupComponent
```

Create a component group

Create a component group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_component_groups = new \OpenAPI\Client\Model\PostPagesPageIdComponentGroups(); // \OpenAPI\Client\Model\PostPagesPageIdComponentGroups

try {
    $result = $apiInstance->postPagesPageIdComponentGroups($page_id, $post_pages_page_id_component_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->postPagesPageIdComponentGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_component_groups** | [**\OpenAPI\Client\Model\PostPagesPageIdComponentGroups**](../Model/PostPagesPageIdComponentGroups.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupComponent**](../Model/GroupComponent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdComponentGroupsId()`

```php
putPagesPageIdComponentGroupsId($page_id, $id, $put_pages_page_id_component_groups): \OpenAPI\Client\Model\GroupComponent
```

Update a component group

Update a component group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$id = 'id_example'; // string | Component group identifier
$put_pages_page_id_component_groups = new \OpenAPI\Client\Model\PutPagesPageIdComponentGroups(); // \OpenAPI\Client\Model\PutPagesPageIdComponentGroups

try {
    $result = $apiInstance->putPagesPageIdComponentGroupsId($page_id, $id, $put_pages_page_id_component_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->putPagesPageIdComponentGroupsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **id** | **string**| Component group identifier | |
| **put_pages_page_id_component_groups** | [**\OpenAPI\Client\Model\PutPagesPageIdComponentGroups**](../Model/PutPagesPageIdComponentGroups.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupComponent**](../Model/GroupComponent.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
