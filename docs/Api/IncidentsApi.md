# OpenAPI\Client\IncidentsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdIncidentsIncidentId()**](IncidentsApi.md#deletePagesPageIdIncidentsIncidentId) | **DELETE** /pages/{page_id}/incidents/{incident_id} | Delete an incident |
| [**getPagesPageIdIncidents()**](IncidentsApi.md#getPagesPageIdIncidents) | **GET** /pages/{page_id}/incidents | Get a list of incidents |
| [**getPagesPageIdIncidentsActiveMaintenance()**](IncidentsApi.md#getPagesPageIdIncidentsActiveMaintenance) | **GET** /pages/{page_id}/incidents/active_maintenance | Get a list of active maintenances |
| [**getPagesPageIdIncidentsIncidentId()**](IncidentsApi.md#getPagesPageIdIncidentsIncidentId) | **GET** /pages/{page_id}/incidents/{incident_id} | Get an incident |
| [**getPagesPageIdIncidentsScheduled()**](IncidentsApi.md#getPagesPageIdIncidentsScheduled) | **GET** /pages/{page_id}/incidents/scheduled | Get a list of scheduled incidents |
| [**getPagesPageIdIncidentsUnresolved()**](IncidentsApi.md#getPagesPageIdIncidentsUnresolved) | **GET** /pages/{page_id}/incidents/unresolved | Get a list of unresolved incidents |
| [**getPagesPageIdIncidentsUpcoming()**](IncidentsApi.md#getPagesPageIdIncidentsUpcoming) | **GET** /pages/{page_id}/incidents/upcoming | Get a list of upcoming incidents |
| [**patchPagesPageIdIncidentsIncidentId()**](IncidentsApi.md#patchPagesPageIdIncidentsIncidentId) | **PATCH** /pages/{page_id}/incidents/{incident_id} | Update an incident |
| [**postPagesPageIdIncidents()**](IncidentsApi.md#postPagesPageIdIncidents) | **POST** /pages/{page_id}/incidents | Create an incident |
| [**putPagesPageIdIncidentsIncidentId()**](IncidentsApi.md#putPagesPageIdIncidentsIncidentId) | **PUT** /pages/{page_id}/incidents/{incident_id} | Update an incident |


## `deletePagesPageIdIncidentsIncidentId()`

```php
deletePagesPageIdIncidentsIncidentId($page_id, $incident_id): \OpenAPI\Client\Model\Incident
```

Delete an incident

Delete an incident

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier

try {
    $result = $apiInstance->deletePagesPageIdIncidentsIncidentId($page_id, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->deletePagesPageIdIncidentsIncidentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |

### Return type

[**\OpenAPI\Client\Model\Incident**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidents()`

```php
getPagesPageIdIncidents($page_id, $q, $limit, $page): \OpenAPI\Client\Model\Incident[]
```

Get a list of incidents

Get a list of incidents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$q = 'q_example'; // string | If this is specified, search for the text query string in the incidents' name, status, postmortem_body, and incident_updates fields.
$limit = 56; // int | The maximum number of rows to return per page. The default and maximum limit is 100.
$page = 56; // int | Page offset to fetch.

try {
    $result = $apiInstance->getPagesPageIdIncidents($page_id, $q, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getPagesPageIdIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **q** | **string**| If this is specified, search for the text query string in the incidents&#39; name, status, postmortem_body, and incident_updates fields. | [optional] |
| **limit** | **int**| The maximum number of rows to return per page. The default and maximum limit is 100. | [optional] |
| **page** | **int**| Page offset to fetch. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Incident[]**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsActiveMaintenance()`

```php
getPagesPageIdIncidentsActiveMaintenance($page_id, $page, $per_page): \OpenAPI\Client\Model\Incident[]
```

Get a list of active maintenances

Get a list of active maintenances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 1; // int | Page offset to fetch.
$per_page = 100; // int | Number of results to return per page.

try {
    $result = $apiInstance->getPagesPageIdIncidentsActiveMaintenance($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getPagesPageIdIncidentsActiveMaintenance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\Incident[]**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsIncidentId()`

```php
getPagesPageIdIncidentsIncidentId($page_id, $incident_id): \OpenAPI\Client\Model\Incident
```

Get an incident

Get an incident

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier

try {
    $result = $apiInstance->getPagesPageIdIncidentsIncidentId($page_id, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getPagesPageIdIncidentsIncidentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |

### Return type

[**\OpenAPI\Client\Model\Incident**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsScheduled()`

```php
getPagesPageIdIncidentsScheduled($page_id, $page, $per_page): \OpenAPI\Client\Model\Incident[]
```

Get a list of scheduled incidents

Get a list of scheduled incidents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 1; // int | Page offset to fetch.
$per_page = 100; // int | Number of results to return per page.

try {
    $result = $apiInstance->getPagesPageIdIncidentsScheduled($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getPagesPageIdIncidentsScheduled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\Incident[]**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsUnresolved()`

```php
getPagesPageIdIncidentsUnresolved($page_id, $page, $per_page): \OpenAPI\Client\Model\Incident[]
```

Get a list of unresolved incidents

Get a list of unresolved incidents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 1; // int | Page offset to fetch.
$per_page = 100; // int | Number of results to return per page.

try {
    $result = $apiInstance->getPagesPageIdIncidentsUnresolved($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getPagesPageIdIncidentsUnresolved: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\Incident[]**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdIncidentsUpcoming()`

```php
getPagesPageIdIncidentsUpcoming($page_id, $page, $per_page): \OpenAPI\Client\Model\Incident[]
```

Get a list of upcoming incidents

Get a list of upcoming incidents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page = 1; // int | Page offset to fetch.
$per_page = 100; // int | Number of results to return per page.

try {
    $result = $apiInstance->getPagesPageIdIncidentsUpcoming($page_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getPagesPageIdIncidentsUpcoming: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page** | **int**| Page offset to fetch. | [optional] [default to 1] |
| **per_page** | **int**| Number of results to return per page. | [optional] [default to 100] |

### Return type

[**\OpenAPI\Client\Model\Incident[]**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPagesPageIdIncidentsIncidentId()`

```php
patchPagesPageIdIncidentsIncidentId($page_id, $incident_id, $patch_pages_page_id_incidents): \OpenAPI\Client\Model\Incident
```

Update an incident

Update an incident

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$patch_pages_page_id_incidents = new \OpenAPI\Client\Model\PatchPagesPageIdIncidents(); // \OpenAPI\Client\Model\PatchPagesPageIdIncidents

try {
    $result = $apiInstance->patchPagesPageIdIncidentsIncidentId($page_id, $incident_id, $patch_pages_page_id_incidents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->patchPagesPageIdIncidentsIncidentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **patch_pages_page_id_incidents** | [**\OpenAPI\Client\Model\PatchPagesPageIdIncidents**](../Model/PatchPagesPageIdIncidents.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Incident**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPagesPageIdIncidents()`

```php
postPagesPageIdIncidents($page_id, $post_pages_page_id_incidents): \OpenAPI\Client\Model\Incident
```

Create an incident

Create an incident

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_incidents = new \OpenAPI\Client\Model\PostPagesPageIdIncidents(); // \OpenAPI\Client\Model\PostPagesPageIdIncidents

try {
    $result = $apiInstance->postPagesPageIdIncidents($page_id, $post_pages_page_id_incidents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->postPagesPageIdIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_incidents** | [**\OpenAPI\Client\Model\PostPagesPageIdIncidents**](../Model/PostPagesPageIdIncidents.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Incident**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdIncidentsIncidentId()`

```php
putPagesPageIdIncidentsIncidentId($page_id, $incident_id, $put_pages_page_id_incidents): \OpenAPI\Client\Model\Incident
```

Update an incident

Update an incident

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$put_pages_page_id_incidents = new \OpenAPI\Client\Model\PutPagesPageIdIncidents(); // \OpenAPI\Client\Model\PutPagesPageIdIncidents

try {
    $result = $apiInstance->putPagesPageIdIncidentsIncidentId($page_id, $incident_id, $put_pages_page_id_incidents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->putPagesPageIdIncidentsIncidentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **put_pages_page_id_incidents** | [**\OpenAPI\Client\Model\PutPagesPageIdIncidents**](../Model/PutPagesPageIdIncidents.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Incident**](../Model/Incident.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
