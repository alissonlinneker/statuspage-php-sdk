# OpenAPI\Client\PageAccessUserComponentsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdPageAccessUsersPageAccessUserIdComponents()**](PageAccessUserComponentsApi.md#deletePagesPageIdPageAccessUsersPageAccessUserIdComponents) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Remove components for page access user |
| [**deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId()**](PageAccessUserComponentsApi.md#deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/components/{component_id} | Remove component for page access user |
| [**getPagesPageIdPageAccessUsersPageAccessUserIdComponents()**](PageAccessUserComponentsApi.md#getPagesPageIdPageAccessUsersPageAccessUserIdComponents) | **GET** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Get components for page access user |
| [**patchPagesPageIdPageAccessUsersPageAccessUserIdComponents()**](PageAccessUserComponentsApi.md#patchPagesPageIdPageAccessUsersPageAccessUserIdComponents) | **PATCH** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Add components for page access user |
| [**postPagesPageIdPageAccessUsersPageAccessUserIdComponents()**](PageAccessUserComponentsApi.md#postPagesPageIdPageAccessUsersPageAccessUserIdComponents) | **POST** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Replace components for page access user |
| [**putPagesPageIdPageAccessUsersPageAccessUserIdComponents()**](PageAccessUserComponentsApi.md#putPagesPageIdPageAccessUsersPageAccessUserIdComponents) | **PUT** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Add components for page access user |


## `deletePagesPageIdPageAccessUsersPageAccessUserIdComponents()`

```php
deletePagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $delete_pages_page_id_page_access_users_page_access_user_id_components): \OpenAPI\Client\Model\PageAccessUser
```

Remove components for page access user

Remove components for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$delete_pages_page_id_page_access_users_page_access_user_id_components = new \OpenAPI\Client\Model\DeletePagesPageIdPageAccessUsersPageAccessUserIdComponents(); // \OpenAPI\Client\Model\DeletePagesPageIdPageAccessUsersPageAccessUserIdComponents

try {
    $result = $apiInstance->deletePagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $delete_pages_page_id_page_access_users_page_access_user_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserComponentsApi->deletePagesPageIdPageAccessUsersPageAccessUserIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **delete_pages_page_id_page_access_users_page_access_user_id_components** | [**\OpenAPI\Client\Model\DeletePagesPageIdPageAccessUsersPageAccessUserIdComponents**](../Model/DeletePagesPageIdPageAccessUsersPageAccessUserIdComponents.md)|  | |

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

## `deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId()`

```php
deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId($page_id, $page_access_user_id, $component_id): \OpenAPI\Client\Model\PageAccessUser
```

Remove component for page access user

Remove component for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$component_id = 'component_id_example'; // string | Component identifier

try {
    $result = $apiInstance->deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId($page_id, $page_access_user_id, $component_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserComponentsApi->deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **component_id** | **string**| Component identifier | |

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

## `getPagesPageIdPageAccessUsersPageAccessUserIdComponents()`

```php
getPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $page, $per_page): \OpenAPI\Client\Model\Component[]
```

Get components for page access user

Get components for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserComponentsApi(
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
    $result = $apiInstance->getPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserComponentsApi->getPagesPageIdPageAccessUsersPageAccessUserIdComponents: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\Component[]**](../Model/Component.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdPageAccessUsersPageAccessUserIdComponents()`

```php
patchPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $patch_pages_page_id_page_access_users_page_access_user_id_components): \OpenAPI\Client\Model\PageAccessUser
```

Add components for page access user

Add components for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$patch_pages_page_id_page_access_users_page_access_user_id_components = new \OpenAPI\Client\Model\PatchPagesPageIdPageAccessUsersPageAccessUserIdComponents(); // \OpenAPI\Client\Model\PatchPagesPageIdPageAccessUsersPageAccessUserIdComponents

try {
    $result = $apiInstance->patchPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $patch_pages_page_id_page_access_users_page_access_user_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserComponentsApi->patchPagesPageIdPageAccessUsersPageAccessUserIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **patch_pages_page_id_page_access_users_page_access_user_id_components** | [**\OpenAPI\Client\Model\PatchPagesPageIdPageAccessUsersPageAccessUserIdComponents**](../Model/PatchPagesPageIdPageAccessUsersPageAccessUserIdComponents.md)|  | |

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

## `postPagesPageIdPageAccessUsersPageAccessUserIdComponents()`

```php
postPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $post_pages_page_id_page_access_users_page_access_user_id_components): \OpenAPI\Client\Model\PageAccessUser
```

Replace components for page access user

Replace components for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$post_pages_page_id_page_access_users_page_access_user_id_components = new \OpenAPI\Client\Model\PostPagesPageIdPageAccessUsersPageAccessUserIdComponents(); // \OpenAPI\Client\Model\PostPagesPageIdPageAccessUsersPageAccessUserIdComponents

try {
    $result = $apiInstance->postPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $post_pages_page_id_page_access_users_page_access_user_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserComponentsApi->postPagesPageIdPageAccessUsersPageAccessUserIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **post_pages_page_id_page_access_users_page_access_user_id_components** | [**\OpenAPI\Client\Model\PostPagesPageIdPageAccessUsersPageAccessUserIdComponents**](../Model/PostPagesPageIdPageAccessUsersPageAccessUserIdComponents.md)|  | |

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

## `putPagesPageIdPageAccessUsersPageAccessUserIdComponents()`

```php
putPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $put_pages_page_id_page_access_users_page_access_user_id_components): \OpenAPI\Client\Model\PageAccessUser
```

Add components for page access user

Add components for page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUserComponentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier
$put_pages_page_id_page_access_users_page_access_user_id_components = new \OpenAPI\Client\Model\PutPagesPageIdPageAccessUsersPageAccessUserIdComponents(); // \OpenAPI\Client\Model\PutPagesPageIdPageAccessUsersPageAccessUserIdComponents

try {
    $result = $apiInstance->putPagesPageIdPageAccessUsersPageAccessUserIdComponents($page_id, $page_access_user_id, $put_pages_page_id_page_access_users_page_access_user_id_components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUserComponentsApi->putPagesPageIdPageAccessUsersPageAccessUserIdComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |
| **put_pages_page_id_page_access_users_page_access_user_id_components** | [**\OpenAPI\Client\Model\PutPagesPageIdPageAccessUsersPageAccessUserIdComponents**](../Model/PutPagesPageIdPageAccessUsersPageAccessUserIdComponents.md)|  | |

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
