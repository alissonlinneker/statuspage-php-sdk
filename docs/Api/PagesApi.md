# OpenAPI\Client\PagesApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPages()**](PagesApi.md#getPages) | **GET** /pages | Get a list of pages |
| [**getPagesPageId()**](PagesApi.md#getPagesPageId) | **GET** /pages/{page_id} | Get a page |
| [**patchPagesPageId()**](PagesApi.md#patchPagesPageId) | **PATCH** /pages/{page_id} | Update a page |
| [**putPagesPageId()**](PagesApi.md#putPagesPageId) | **PUT** /pages/{page_id} | Update a page |


## `getPages()`

```php
getPages(): \OpenAPI\Client\Model\Page[]
```

Get a list of pages

Get a list of pages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->getPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Page[]**](../Model/Page.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageId()`

```php
getPagesPageId($page_id): \OpenAPI\Client\Model\Page
```

Get a page

Get a page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier

try {
    $result = $apiInstance->getPagesPageId($page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->getPagesPageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |

### Return type

[**\OpenAPI\Client\Model\Page**](../Model/Page.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageId()`

```php
patchPagesPageId($page_id, $patch_pages): \OpenAPI\Client\Model\Page
```

Update a page

Update a page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$patch_pages = new \OpenAPI\Client\Model\PatchPages(); // \OpenAPI\Client\Model\PatchPages

try {
    $result = $apiInstance->patchPagesPageId($page_id, $patch_pages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->patchPagesPageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **patch_pages** | [**\OpenAPI\Client\Model\PatchPages**](../Model/PatchPages.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Page**](../Model/Page.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageId()`

```php
putPagesPageId($page_id, $put_pages): \OpenAPI\Client\Model\Page
```

Update a page

Update a page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$put_pages = new \OpenAPI\Client\Model\PutPages(); // \OpenAPI\Client\Model\PutPages

try {
    $result = $apiInstance->putPagesPageId($page_id, $put_pages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PagesApi->putPagesPageId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **put_pages** | [**\OpenAPI\Client\Model\PutPages**](../Model/PutPages.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Page**](../Model/Page.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
