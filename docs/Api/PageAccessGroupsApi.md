# OpenAPI\Client\PageAccessGroupsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdPageAccessGroupsPageAccessGroupId()**](PageAccessGroupsApi.md#deletePagesPageIdPageAccessGroupsPageAccessGroupId) | **DELETE** /pages/{page_id}/page_access_groups/{page_access_group_id} | Remove a page access group |
| [**getPagesPageIdPageAccessGroups()**](PageAccessGroupsApi.md#getPagesPageIdPageAccessGroups) | **GET** /pages/{page_id}/page_access_groups | Get a list of page access groups |
| [**getPagesPageIdPageAccessGroupsPageAccessGroupId()**](PageAccessGroupsApi.md#getPagesPageIdPageAccessGroupsPageAccessGroupId) | **GET** /pages/{page_id}/page_access_groups/{page_access_group_id} | Get a page access group |
| [**patchPagesPageIdPageAccessGroupsPageAccessGroupId()**](PageAccessGroupsApi.md#patchPagesPageIdPageAccessGroupsPageAccessGroupId) | **PATCH** /pages/{page_id}/page_access_groups/{page_access_group_id} | Update a page access group |
| [**postPagesPageIdPageAccessGroups()**](PageAccessGroupsApi.md#postPagesPageIdPageAccessGroups) | **POST** /pages/{page_id}/page_access_groups | Create a page access group |
| [**putPagesPageIdPageAccessGroupsPageAccessGroupId()**](PageAccessGroupsApi.md#putPagesPageIdPageAccessGroupsPageAccessGroupId) | **PUT** /pages/{page_id}/page_access_groups/{page_access_group_id} | Update a page access group |


## `deletePagesPageIdPageAccessGroupsPageAccessGroupId()`

```php
deletePagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id): \OpenAPI\Client\Model\PageAccessGroup
```

Remove a page access group

Remove a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier

try {
    $result = $apiInstance->deletePagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupsApi->deletePagesPageIdPageAccessGroupsPageAccessGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |

### Return type

[**\OpenAPI\Client\Model\PageAccessGroup**](../Model/PageAccessGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdPageAccessGroups()`

```php
getPagesPageIdPageAccessGroups($page_id, $page, $per_page): \OpenAPI\Client\Model\PageAccessGroup[]
```

Get a list of page access groups

Get a list of page access groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdPageAccessGroups($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupsApi->getPagesPageIdPageAccessGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageAccessGroup[]**](../Model/PageAccessGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdPageAccessGroupsPageAccessGroupId()`

```php
getPagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id): \OpenAPI\Client\Model\PageAccessGroup
```

Get a page access group

Get a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier

try {
    $result = $apiInstance->getPagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupsApi->getPagesPageIdPageAccessGroupsPageAccessGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |

### Return type

[**\OpenAPI\Client\Model\PageAccessGroup**](../Model/PageAccessGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdPageAccessGroupsPageAccessGroupId()`

```php
patchPagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id, $patch_pages_page_id_page_access_groups): \OpenAPI\Client\Model\PageAccessGroup
```

Update a page access group

Update a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$patch_pages_page_id_page_access_groups = new \OpenAPI\Client\Model\PatchPagesPageIdPageAccessGroups(); // \OpenAPI\Client\Model\PatchPagesPageIdPageAccessGroups

try {
    $result = $apiInstance->patchPagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id, $patch_pages_page_id_page_access_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupsApi->patchPagesPageIdPageAccessGroupsPageAccessGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **patch_pages_page_id_page_access_groups** | [**\OpenAPI\Client\Model\PatchPagesPageIdPageAccessGroups**](../Model/PatchPagesPageIdPageAccessGroups.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessGroup**](../Model/PageAccessGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdPageAccessGroups()`

```php
postPagesPageIdPageAccessGroups($page_id, $post_pages_page_id_page_access_groups): \OpenAPI\Client\Model\PageAccessGroup
```

Create a page access group

Create a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_page_access_groups = new \OpenAPI\Client\Model\PostPagesPageIdPageAccessGroups(); // \OpenAPI\Client\Model\PostPagesPageIdPageAccessGroups

try {
    $result = $apiInstance->postPagesPageIdPageAccessGroups($page_id, $post_pages_page_id_page_access_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupsApi->postPagesPageIdPageAccessGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_page_access_groups** | [**\OpenAPI\Client\Model\PostPagesPageIdPageAccessGroups**](../Model/PostPagesPageIdPageAccessGroups.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessGroup**](../Model/PageAccessGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdPageAccessGroupsPageAccessGroupId()`

```php
putPagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id, $put_pages_page_id_page_access_groups): \OpenAPI\Client\Model\PageAccessGroup
```

Update a page access group

Update a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$put_pages_page_id_page_access_groups = new \OpenAPI\Client\Model\PutPagesPageIdPageAccessGroups(); // \OpenAPI\Client\Model\PutPagesPageIdPageAccessGroups

try {
    $result = $apiInstance->putPagesPageIdPageAccessGroupsPageAccessGroupId($page_id, $page_access_group_id, $put_pages_page_id_page_access_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupsApi->putPagesPageIdPageAccessGroupsPageAccessGroupId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **put_pages_page_id_page_access_groups** | [**\OpenAPI\Client\Model\PutPagesPageIdPageAccessGroups**](../Model/PutPagesPageIdPageAccessGroups.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PageAccessGroup**](../Model/PageAccessGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
