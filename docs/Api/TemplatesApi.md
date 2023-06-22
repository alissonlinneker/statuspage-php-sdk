# OpenAPI\Client\TemplatesApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPagesPageIdIncidentTemplates()**](TemplatesApi.md#getPagesPageIdIncidentTemplates) | **GET** /pages/{page_id}/incident_templates | Get a list of templates |
| [**postPagesPageIdIncidentTemplates()**](TemplatesApi.md#postPagesPageIdIncidentTemplates) | **POST** /pages/{page_id}/incident_templates | Create a template |


## `getPagesPageIdIncidentTemplates()`

```php
getPagesPageIdIncidentTemplates($page_id, $page, $per_page): \OpenAPI\Client\Model\IncidentTemplate[]
```

Get a list of templates

Get a list of templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 1; // int | Page offset to fetch.
$per_page = 100; // int | Number of results to return per page.

try {
    $result = $apiInstance->getPagesPageIdIncidentTemplates($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->getPagesPageIdIncidentTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\IncidentTemplate[]**](../Model/IncidentTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdIncidentTemplates()`

```php
postPagesPageIdIncidentTemplates($page_id, $post_pages_page_id_incident_templates): \OpenAPI\Client\Model\IncidentTemplate
```

Create a template

Create a template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_incident_templates = new \OpenAPI\Client\Model\PostPagesPageIdIncidentTemplates(); // \OpenAPI\Client\Model\PostPagesPageIdIncidentTemplates

try {
    $result = $apiInstance->postPagesPageIdIncidentTemplates($page_id, $post_pages_page_id_incident_templates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->postPagesPageIdIncidentTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_incident_templates** | [**\OpenAPI\Client\Model\PostPagesPageIdIncidentTemplates**](../Model/PostPagesPageIdIncidentTemplates.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IncidentTemplate**](../Model/IncidentTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
