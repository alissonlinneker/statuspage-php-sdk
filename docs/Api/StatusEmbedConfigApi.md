# OpenAPI\Client\StatusEmbedConfigApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPagesPageIdStatusEmbedConfig()**](StatusEmbedConfigApi.md#getPagesPageIdStatusEmbedConfig) | **GET** /pages/{page_id}/status_embed_config | Get status embed config settings |
| [**patchPagesPageIdStatusEmbedConfig()**](StatusEmbedConfigApi.md#patchPagesPageIdStatusEmbedConfig) | **PATCH** /pages/{page_id}/status_embed_config | Update status embed config settings |
| [**putPagesPageIdStatusEmbedConfig()**](StatusEmbedConfigApi.md#putPagesPageIdStatusEmbedConfig) | **PUT** /pages/{page_id}/status_embed_config | Update status embed config settings |


## `getPagesPageIdStatusEmbedConfig()`

```php
getPagesPageIdStatusEmbedConfig($page_id): \OpenAPI\Client\Model\StatusEmbedConfig
```

Get status embed config settings

Get status embed config settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StatusEmbedConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier

try {
    $result = $apiInstance->getPagesPageIdStatusEmbedConfig($page_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusEmbedConfigApi->getPagesPageIdStatusEmbedConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |

### Return type

[**\OpenAPI\Client\Model\StatusEmbedConfig**](../Model/StatusEmbedConfig.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdStatusEmbedConfig()`

```php
patchPagesPageIdStatusEmbedConfig($page_id, $patch_pages_page_id_status_embed_config): \OpenAPI\Client\Model\StatusEmbedConfig
```

Update status embed config settings

Update status embed config settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StatusEmbedConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$patch_pages_page_id_status_embed_config = new \OpenAPI\Client\Model\PatchPagesPageIdStatusEmbedConfig(); // \OpenAPI\Client\Model\PatchPagesPageIdStatusEmbedConfig

try {
    $result = $apiInstance->patchPagesPageIdStatusEmbedConfig($page_id, $patch_pages_page_id_status_embed_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusEmbedConfigApi->patchPagesPageIdStatusEmbedConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **patch_pages_page_id_status_embed_config** | [**\OpenAPI\Client\Model\PatchPagesPageIdStatusEmbedConfig**](../Model/PatchPagesPageIdStatusEmbedConfig.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StatusEmbedConfig**](../Model/StatusEmbedConfig.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdStatusEmbedConfig()`

```php
putPagesPageIdStatusEmbedConfig($page_id, $put_pages_page_id_status_embed_config): \OpenAPI\Client\Model\StatusEmbedConfig
```

Update status embed config settings

Update status embed config settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StatusEmbedConfigApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$put_pages_page_id_status_embed_config = new \OpenAPI\Client\Model\PutPagesPageIdStatusEmbedConfig(); // \OpenAPI\Client\Model\PutPagesPageIdStatusEmbedConfig

try {
    $result = $apiInstance->putPagesPageIdStatusEmbedConfig($page_id, $put_pages_page_id_status_embed_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusEmbedConfigApi->putPagesPageIdStatusEmbedConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **put_pages_page_id_status_embed_config** | [**\OpenAPI\Client\Model\PutPagesPageIdStatusEmbedConfig**](../Model/PutPagesPageIdStatusEmbedConfig.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StatusEmbedConfig**](../Model/StatusEmbedConfig.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
