# OpenAPI\Client\ComponentsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdComponentsComponentId()**](ComponentsApi.md#deletePagesPageIdComponentsComponentId) | **DELETE** /pages/{page_id}/components/{component_id} | Delete a component |
| [**deletePagesPageIdComponentsComponentIdPageAccessGroups()**](ComponentsApi.md#deletePagesPageIdComponentsComponentIdPageAccessGroups) | **DELETE** /pages/{page_id}/components/{component_id}/page_access_groups | Remove page access groups from a component |
| [**deletePagesPageIdComponentsComponentIdPageAccessUsers()**](ComponentsApi.md#deletePagesPageIdComponentsComponentIdPageAccessUsers) | **DELETE** /pages/{page_id}/components/{component_id}/page_access_users | Remove page access users from component |
| [**getPagesPageIdComponents()**](ComponentsApi.md#getPagesPageIdComponents) | **GET** /pages/{page_id}/components | Get a list of components |
| [**getPagesPageIdComponentsComponentId()**](ComponentsApi.md#getPagesPageIdComponentsComponentId) | **GET** /pages/{page_id}/components/{component_id} | Get a component |
| [**getPagesPageIdComponentsComponentIdUptime()**](ComponentsApi.md#getPagesPageIdComponentsComponentIdUptime) | **GET** /pages/{page_id}/components/{component_id}/uptime | Get uptime data for a component |
| [**patchPagesPageIdComponentsComponentId()**](ComponentsApi.md#patchPagesPageIdComponentsComponentId) | **PATCH** /pages/{page_id}/components/{component_id} | Update a component |
| [**postPagesPageIdComponents()**](ComponentsApi.md#postPagesPageIdComponents) | **POST** /pages/{page_id}/components | Create a component |
| [**postPagesPageIdComponentsComponentIdPageAccessGroups()**](ComponentsApi.md#postPagesPageIdComponentsComponentIdPageAccessGroups) | **POST** /pages/{page_id}/components/{component_id}/page_access_groups | Add page access groups to a component |
| [**postPagesPageIdComponentsComponentIdPageAccessUsers()**](ComponentsApi.md#postPagesPageIdComponentsComponentIdPageAccessUsers) | **POST** /pages/{page_id}/components/{component_id}/page_access_users | Add page access users to a component |
| [**putPagesPageIdComponentsComponentId()**](ComponentsApi.md#putPagesPageIdComponentsComponentId) | **PUT** /pages/{page_id}/components/{component_id} | Update a component |


## `deletePagesPageIdComponentsComponentId()`

```php
deletePagesPageIdComponentsComponentId($page_id, $component_id)
```

Delete a component

Delete a component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $apiInstance->deletePagesPageIdComponentsComponentId($page_id, $component_id);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->deletePagesPageIdComponentsComponentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |

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

## `deletePagesPageIdComponentsComponentIdPageAccessGroups()`

```php
deletePagesPageIdComponentsComponentIdPageAccessGroups($page_id, $component_id): \OpenAPI\Client\Model\Component
```

Remove page access groups from a component

Remove page access groups from a component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $result = $apiInstance->deletePagesPageIdComponentsComponentIdPageAccessGroups($page_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->deletePagesPageIdComponentsComponentIdPageAccessGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePagesPageIdComponentsComponentIdPageAccessUsers()`

```php
deletePagesPageIdComponentsComponentIdPageAccessUsers($page_id, $component_id): \OpenAPI\Client\Model\Component
```

Remove page access users from component

Remove page access users from component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $result = $apiInstance->deletePagesPageIdComponentsComponentIdPageAccessUsers($page_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->deletePagesPageIdComponentsComponentIdPageAccessUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdComponents()`

```php
getPagesPageIdComponents($page_id, $page, $per_page): \OpenAPI\Client\Model\Component[]
```

Get a list of components

Get a list of components

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdComponents($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getPagesPageIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Component[]**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdComponentsComponentId()`

```php
getPagesPageIdComponentsComponentId($page_id, $component_id): \OpenAPI\Client\Model\Component
```

Get a component

Get a component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $result = $apiInstance->getPagesPageIdComponentsComponentId($page_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getPagesPageIdComponentsComponentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdComponentsComponentIdUptime()`

```php
getPagesPageIdComponentsComponentIdUptime($page_id, $component_id, $start, $end): \OpenAPI\Client\Model\ComponentUptime
```

Get uptime data for a component

Get uptime data for a component that has uptime showcase enabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier
$start = new \OpenAPI\Client\Model\PartialStartDate(); // PartialStartDate | The start date for uptime calculation (defaults to the component's start_date field or 90 days ago, whichever is more recent). The maximum supported date range is six calendar months. If the year is given, the date defaults to the first day of the year. If the year and month are given, the start date defaults to the first day of that month. The earliest supported date is January 1, 1970.
$end = new \OpenAPI\Client\Model\PartialEndDate(); // PartialEndDate | The end date for uptime calculation (defaults to today in the page's time zone). The maximum supported date range is six calendar months. If the year is given, the date defaults to the last day of the year. If the year and month are given, the date defaults to the last day of that month. The earliest supported date is January 1, 1970.

try {
    $result = $apiInstance->getPagesPageIdComponentsComponentIdUptime($page_id, $component_id, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->getPagesPageIdComponentsComponentIdUptime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |
| **start** | [**PartialStartDate**](../Model/.md)| The start date for uptime calculation (defaults to the component&#39;s start_date field or 90 days ago, whichever is more recent). The maximum supported date range is six calendar months. If the year is given, the date defaults to the first day of the year. If the year and month are given, the start date defaults to the first day of that month. The earliest supported date is January 1, 1970. | [optional] |
| **end** | [**PartialEndDate**](../Model/.md)| The end date for uptime calculation (defaults to today in the page&#39;s time zone). The maximum supported date range is six calendar months. If the year is given, the date defaults to the last day of the year. If the year and month are given, the date defaults to the last day of that month. The earliest supported date is January 1, 1970. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComponentUptime**](../Model/ComponentUptime.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdComponentsComponentId()`

```php
patchPagesPageIdComponentsComponentId($page_id, $component_id, $patch_pages_page_id_components): \OpenAPI\Client\Model\Component
```

Update a component

If group_id is \"null\" then the component will be removed from a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier
$patch_pages_page_id_components = new \OpenAPI\Client\Model\PatchPagesPageIdComponents(); // \OpenAPI\Client\Model\PatchPagesPageIdComponents

try {
    $result = $apiInstance->patchPagesPageIdComponentsComponentId($page_id, $component_id, $patch_pages_page_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->patchPagesPageIdComponentsComponentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |
| **patch_pages_page_id_components** | [**\OpenAPI\Client\Model\PatchPagesPageIdComponents**](../Model/PatchPagesPageIdComponents.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdComponents()`

```php
postPagesPageIdComponents($page_id, $post_pages_page_id_components): \OpenAPI\Client\Model\Component
```

Create a component

Create a component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_components = new \OpenAPI\Client\Model\PostPagesPageIdComponents(); // \OpenAPI\Client\Model\PostPagesPageIdComponents

try {
    $result = $apiInstance->postPagesPageIdComponents($page_id, $post_pages_page_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->postPagesPageIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_components** | [**\OpenAPI\Client\Model\PostPagesPageIdComponents**](../Model/PostPagesPageIdComponents.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdComponentsComponentIdPageAccessGroups()`

```php
postPagesPageIdComponentsComponentIdPageAccessGroups($page_id, $component_id): \OpenAPI\Client\Model\Component
```

Add page access groups to a component

Add page access groups to a component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $result = $apiInstance->postPagesPageIdComponentsComponentIdPageAccessGroups($page_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->postPagesPageIdComponentsComponentIdPageAccessGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdComponentsComponentIdPageAccessUsers()`

```php
postPagesPageIdComponentsComponentIdPageAccessUsers($page_id, $component_id, $page_access_user_ids): \OpenAPI\Client\Model\Component
```

Add page access users to a component

Add page access users to a component

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier
$page_access_user_ids = array('page_access_user_ids_example'); // string[] | List of page access users to add to component

try {
    $result = $apiInstance->postPagesPageIdComponentsComponentIdPageAccessUsers($page_id, $component_id, $page_access_user_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->postPagesPageIdComponentsComponentIdPageAccessUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |
| **page_access_user_ids** | [**string[]**](../Model/string.md)| List of page access users to add to component | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdComponentsComponentId()`

```php
putPagesPageIdComponentsComponentId($page_id, $component_id, $put_pages_page_id_components): \OpenAPI\Client\Model\Component
```

Update a component

If group_id is \"null\" then the component will be removed from a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$component_id = 'component_id_example'; // string | Component identifier
$put_pages_page_id_components = new \OpenAPI\Client\Model\PutPagesPageIdComponents(); // \OpenAPI\Client\Model\PutPagesPageIdComponents

try {
    $result = $apiInstance->putPagesPageIdComponentsComponentId($page_id, $component_id, $put_pages_page_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentsApi->putPagesPageIdComponentsComponentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **component_id** | **string**| Component identifier | |
| **put_pages_page_id_components** | [**\OpenAPI\Client\Model\PutPagesPageIdComponents**](../Model/PutPagesPageIdComponents.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Component**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
