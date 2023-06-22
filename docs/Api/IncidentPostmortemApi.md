# OpenAPI\Client\IncidentPostmortemApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdIncidentsIncidentIdPostmortem()**](IncidentPostmortemApi.md#deletePagesPageIdIncidentsIncidentIdPostmortem) | **DELETE** /pages/{page_id}/incidents/{incident_id}/postmortem | Delete Postmortem |
| [**getPagesPageIdIncidentsIncidentIdPostmortem()**](IncidentPostmortemApi.md#getPagesPageIdIncidentsIncidentIdPostmortem) | **GET** /pages/{page_id}/incidents/{incident_id}/postmortem | Get Postmortem |
| [**putPagesPageIdIncidentsIncidentIdPostmortem()**](IncidentPostmortemApi.md#putPagesPageIdIncidentsIncidentIdPostmortem) | **PUT** /pages/{page_id}/incidents/{incident_id}/postmortem | Create Postmortem |
| [**putPagesPageIdIncidentsIncidentIdPostmortemPublish()**](IncidentPostmortemApi.md#putPagesPageIdIncidentsIncidentIdPostmortemPublish) | **PUT** /pages/{page_id}/incidents/{incident_id}/postmortem/publish | Publish Postmortem |
| [**putPagesPageIdIncidentsIncidentIdPostmortemRevert()**](IncidentPostmortemApi.md#putPagesPageIdIncidentsIncidentIdPostmortemRevert) | **PUT** /pages/{page_id}/incidents/{incident_id}/postmortem/revert | Revert Postmortem |


## `deletePagesPageIdIncidentsIncidentIdPostmortem()`

```php
deletePagesPageIdIncidentsIncidentIdPostmortem($page_id, $incident_id)
```

Delete Postmortem

Delete Postmortem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentPostmortemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier

try {
    $apiInstance->deletePagesPageIdIncidentsIncidentIdPostmortem($page_id, $incident_id);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPostmortemApi->deletePagesPageIdIncidentsIncidentIdPostmortem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |

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

## `getPagesPageIdIncidentsIncidentIdPostmortem()`

```php
getPagesPageIdIncidentsIncidentIdPostmortem($page_id, $incident_id): \OpenAPI\Client\Model\Postmortem
```

Get Postmortem

Get Postmortem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentPostmortemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier

try {
    $result = $apiInstance->getPagesPageIdIncidentsIncidentIdPostmortem($page_id, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPostmortemApi->getPagesPageIdIncidentsIncidentIdPostmortem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |

### Return type

[**\OpenAPI\Client\Model\Postmortem**](../Model/Postmortem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdIncidentsIncidentIdPostmortem()`

```php
putPagesPageIdIncidentsIncidentIdPostmortem($page_id, $incident_id, $put_pages_page_id_incidents_incident_id_postmortem): \OpenAPI\Client\Model\Postmortem
```

Create Postmortem

Create Postmortem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentPostmortemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$put_pages_page_id_incidents_incident_id_postmortem = new \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdPostmortem(); // \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdPostmortem

try {
    $result = $apiInstance->putPagesPageIdIncidentsIncidentIdPostmortem($page_id, $incident_id, $put_pages_page_id_incidents_incident_id_postmortem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPostmortemApi->putPagesPageIdIncidentsIncidentIdPostmortem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **put_pages_page_id_incidents_incident_id_postmortem** | [**\OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdPostmortem**](../Model/PutPagesPageIdIncidentsIncidentIdPostmortem.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Postmortem**](../Model/Postmortem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdIncidentsIncidentIdPostmortemPublish()`

```php
putPagesPageIdIncidentsIncidentIdPostmortemPublish($page_id, $incident_id, $put_pages_page_id_incidents_incident_id_postmortem_publish): \OpenAPI\Client\Model\Postmortem
```

Publish Postmortem

Publish Postmortem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentPostmortemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$put_pages_page_id_incidents_incident_id_postmortem_publish = new \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdPostmortemPublish(); // \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdPostmortemPublish

try {
    $result = $apiInstance->putPagesPageIdIncidentsIncidentIdPostmortemPublish($page_id, $incident_id, $put_pages_page_id_incidents_incident_id_postmortem_publish);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPostmortemApi->putPagesPageIdIncidentsIncidentIdPostmortemPublish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **put_pages_page_id_incidents_incident_id_postmortem_publish** | [**\OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdPostmortemPublish**](../Model/PutPagesPageIdIncidentsIncidentIdPostmortemPublish.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Postmortem**](../Model/Postmortem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdIncidentsIncidentIdPostmortemRevert()`

```php
putPagesPageIdIncidentsIncidentIdPostmortemRevert($page_id, $incident_id): \OpenAPI\Client\Model\Postmortem
```

Revert Postmortem

Revert Postmortem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentPostmortemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier

try {
    $result = $apiInstance->putPagesPageIdIncidentsIncidentIdPostmortemRevert($page_id, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentPostmortemApi->putPagesPageIdIncidentsIncidentIdPostmortemRevert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |

### Return type

[**\OpenAPI\Client\Model\Postmortem**](../Model/Postmortem.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
