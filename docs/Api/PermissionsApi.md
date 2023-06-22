# OpenAPI\Client\PermissionsApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationsOrganizationIdPermissionsUserId()**](PermissionsApi.md#getOrganizationsOrganizationIdPermissionsUserId) | **GET** /organizations/{organization_id}/permissions/{user_id} | Get a user&#39;s permissions |
| [**putOrganizationsOrganizationIdPermissionsUserId()**](PermissionsApi.md#putOrganizationsOrganizationIdPermissionsUserId) | **PUT** /organizations/{organization_id}/permissions/{user_id} | Update a user&#39;s role permissions |


## `getOrganizationsOrganizationIdPermissionsUserId()`

```php
getOrganizationsOrganizationIdPermissionsUserId($organization_id, $user_id): \OpenAPI\Client\Model\Permissions
```

Get a user's permissions

Get a user's permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization Identifier
$user_id = 'user_id_example'; // string | User identifier

try {
    $result = $apiInstance->getOrganizationsOrganizationIdPermissionsUserId($organization_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getOrganizationsOrganizationIdPermissionsUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization Identifier | |
| **user_id** | **string**| User identifier | |

### Return type

[**\OpenAPI\Client\Model\Permissions**](../Model/Permissions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putOrganizationsOrganizationIdPermissionsUserId()`

```php
putOrganizationsOrganizationIdPermissionsUserId($organization_id, $user_id, $put_organizations_organization_id_permissions): \OpenAPI\Client\Model\Permissions
```

Update a user's role permissions

Update a user's role permissions. Payload should contain a mapping of pages to a set of the desired roles,                   if the page has Role Based Access Control. Otherwise, the pages should map to an empty hash.                   User will lose access to any pages omitted from the payload.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization Identifier
$user_id = 'user_id_example'; // string | User identifier
$put_organizations_organization_id_permissions = new \OpenAPI\Client\Model\PutOrganizationsOrganizationIdPermissions(); // \OpenAPI\Client\Model\PutOrganizationsOrganizationIdPermissions

try {
    $result = $apiInstance->putOrganizationsOrganizationIdPermissionsUserId($organization_id, $user_id, $put_organizations_organization_id_permissions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->putOrganizationsOrganizationIdPermissionsUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization Identifier | |
| **user_id** | **string**| User identifier | |
| **put_organizations_organization_id_permissions** | [**\OpenAPI\Client\Model\PutOrganizationsOrganizationIdPermissions**](../Model/PutOrganizationsOrganizationIdPermissions.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Permissions**](../Model/Permissions.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
