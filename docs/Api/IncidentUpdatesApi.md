# OpenAPI\Client\IncidentUpdatesApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId()**](IncidentUpdatesApi.md#patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId) | **PATCH** /pages/{page_id}/incidents/{incident_id}/incident_updates/{incident_update_id} | Update a previous incident update |
| [**putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId()**](IncidentUpdatesApi.md#putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId) | **PUT** /pages/{page_id}/incidents/{incident_id}/incident_updates/{incident_update_id} | Update a previous incident update |


## `patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId()`

```php
patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates): \OpenAPI\Client\Model\IncidentUpdate
```

Update a previous incident update

Update a previous incident update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$incident_update_id = 'incident_update_id_example'; // string | Incident Update Identifier
$patch_pages_page_id_incidents_incident_id_incident_updates = new \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates(); // \OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates

try {
    $result = $apiInstance->patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId($page_id, $incident_id, $incident_update_id, $patch_pages_page_id_incidents_incident_id_incident_updates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentUpdatesApi->patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **incident_update_id** | **string**| Incident Update Identifier | |
| **patch_pages_page_id_incidents_incident_id_incident_updates** | [**\OpenAPI\Client\Model\PatchPagesPageIdIncidentsIncidentIdIncidentUpdates**](../Model/PatchPagesPageIdIncidentsIncidentIdIncidentUpdates.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IncidentUpdate**](../Model/IncidentUpdate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId()`

```php
putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates): \OpenAPI\Client\Model\IncidentUpdate
```

Update a previous incident update

Update a previous incident update

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IncidentUpdatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$incident_id = 'incident_id_example'; // string | Incident Identifier
$incident_update_id = 'incident_update_id_example'; // string | Incident Update Identifier
$put_pages_page_id_incidents_incident_id_incident_updates = new \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates(); // \OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates

try {
    $result = $apiInstance->putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId($page_id, $incident_id, $incident_update_id, $put_pages_page_id_incidents_incident_id_incident_updates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentUpdatesApi->putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **incident_id** | **string**| Incident Identifier | |
| **incident_update_id** | **string**| Incident Update Identifier | |
| **put_pages_page_id_incidents_incident_id_incident_updates** | [**\OpenAPI\Client\Model\PutPagesPageIdIncidentsIncidentIdIncidentUpdates**](../Model/PutPagesPageIdIncidentsIncidentIdIncidentUpdates.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IncidentUpdate**](../Model/IncidentUpdate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
