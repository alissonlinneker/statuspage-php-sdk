# OpenAPI\Client\PageAccessGroupComponentsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents()**](PageAccessGroupComponentsApi.md#deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents) | **DELETE** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Delete components for a page access group |
| [**deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId()**](PageAccessGroupComponentsApi.md#deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId) | **DELETE** /pages/{page_id}/page_access_groups/{page_access_group_id}/components/{component_id} | Remove a component from a page access group |
| [**getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()**](PageAccessGroupComponentsApi.md#getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents) | **GET** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | List components for a page access group |
| [**patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()**](PageAccessGroupComponentsApi.md#patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents) | **PATCH** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Add components to page access group |
| [**postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()**](PageAccessGroupComponentsApi.md#postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents) | **POST** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Replace components for a page access group |
| [**putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()**](PageAccessGroupComponentsApi.md#putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents) | **PUT** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Add components to page access group |


## `deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents()`

```php
deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $delete_pages_page_id_page_access_groups_page_access_group_id_components): \OpenAPI\Client\Model\PageAccessGroup
```

Delete components for a page access group

Delete components for a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$delete_pages_page_id_page_access_groups_page_access_group_id_components = new \OpenAPI\Client\Model\DeletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents(); // \OpenAPI\Client\Model\DeletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents

try {
    $result = $apiInstance->deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $delete_pages_page_id_page_access_groups_page_access_group_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupComponentsApi->deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **delete_pages_page_id_page_access_groups_page_access_group_id_components** | [**\OpenAPI\Client\Model\DeletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](../Model/DeletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)|  | |

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

## `deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId()`

```php
deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId($page_id, $page_access_group_id, $component_id): \OpenAPI\Client\Model\PageAccessGroup
```

Remove a component from a page access group

Remove a component from a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $result = $apiInstance->deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId($page_id, $page_access_group_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupComponentsApi->deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **component_id** | **string**| Component identifier | |

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

## `getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()`

```php
getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $page, $per_page): \OpenAPI\Client\Model\Component[]
```

List components for a page access group

List components for a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupComponentsApi->getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
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

## `patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()`

```php
patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $patch_pages_page_id_page_access_groups_page_access_group_id_components): \OpenAPI\Client\Model\PageAccessGroup
```

Add components to page access group

Add components to page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$patch_pages_page_id_page_access_groups_page_access_group_id_components = new \OpenAPI\Client\Model\PatchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents(); // \OpenAPI\Client\Model\PatchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents

try {
    $result = $apiInstance->patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $patch_pages_page_id_page_access_groups_page_access_group_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupComponentsApi->patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **patch_pages_page_id_page_access_groups_page_access_group_id_components** | [**\OpenAPI\Client\Model\PatchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](../Model/PatchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)|  | |

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

## `postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()`

```php
postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $post_pages_page_id_page_access_groups_page_access_group_id_components): \OpenAPI\Client\Model\PageAccessGroup
```

Replace components for a page access group

Replace components for a page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$post_pages_page_id_page_access_groups_page_access_group_id_components = new \OpenAPI\Client\Model\PostPagesPageIdPageAccessGroupsPageAccessGroupIdComponents(); // \OpenAPI\Client\Model\PostPagesPageIdPageAccessGroupsPageAccessGroupIdComponents

try {
    $result = $apiInstance->postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $post_pages_page_id_page_access_groups_page_access_group_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupComponentsApi->postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **post_pages_page_id_page_access_groups_page_access_group_id_components** | [**\OpenAPI\Client\Model\PostPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](../Model/PostPagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)|  | |

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

## `putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents()`

```php
putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $put_pages_page_id_page_access_groups_page_access_group_id_components): \OpenAPI\Client\Model\PageAccessGroup
```

Add components to page access group

Add components to page access group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessGroupComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_group_id = 'page_access_group_id_example'; // string | Page Access Group Identifier
$put_pages_page_id_page_access_groups_page_access_group_id_components = new \OpenAPI\Client\Model\PutPagesPageIdPageAccessGroupsPageAccessGroupIdComponents(); // \OpenAPI\Client\Model\PutPagesPageIdPageAccessGroupsPageAccessGroupIdComponents

try {
    $result = $apiInstance->putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents($page_id, $page_access_group_id, $put_pages_page_id_page_access_groups_page_access_group_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessGroupComponentsApi->putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_group_id** | **string**| Page Access Group Identifier | |
| **put_pages_page_id_page_access_groups_page_access_group_id_components** | [**\OpenAPI\Client\Model\PutPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](../Model/PutPagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)|  | |

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
