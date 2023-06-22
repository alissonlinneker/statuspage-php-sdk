# OpenAPI\Client\UsersApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOrganizationsOrganizationIdUsersUserId()**](UsersApi.md#deleteOrganizationsOrganizationIdUsersUserId) | **DELETE** /organizations/{organization_id}/users/{user_id} | Delete a user |
| [**getOrganizationsOrganizationIdPermissionsUserId()**](UsersApi.md#getOrganizationsOrganizationIdPermissionsUserId) | **GET** /organizations/{organization_id}/permissions/{user_id} | Get a user&#39;s permissions |
| [**getOrganizationsOrganizationIdUsers()**](UsersApi.md#getOrganizationsOrganizationIdUsers) | **GET** /organizations/{organization_id}/users | Get a list of users |
| [**postOrganizationsOrganizationIdUsers()**](UsersApi.md#postOrganizationsOrganizationIdUsers) | **POST** /organizations/{organization_id}/users | Create a user |


## `deleteOrganizationsOrganizationIdUsersUserId()`

```php
deleteOrganizationsOrganizationIdUsersUserId($organization_id, $user_id): \OpenAPI\Client\Model\User
```

Delete a user

Delete a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization Identifier
$user_id = 'user_id_example'; // string | User Identifier

try {
    $result = $apiInstance->deleteOrganizationsOrganizationIdUsersUserId($organization_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteOrganizationsOrganizationIdUsersUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization Identifier | |
| **user_id** | **string**| User Identifier | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
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
    echo 'Exception when calling UsersApi->getOrganizationsOrganizationIdPermissionsUserId: ', $e->getMessage(), PHP_EOL;
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

## `getOrganizationsOrganizationIdUsers()`

```php
getOrganizationsOrganizationIdUsers($organization_id, $page, $per_page): \OpenAPI\Client\Model\User[]
```

Get a list of users

Get a list of users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization Identifier
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getOrganizationsOrganizationIdUsers($organization_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getOrganizationsOrganizationIdUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization Identifier | |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\User[]**](../Model/User.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrganizationsOrganizationIdUsers()`

```php
postOrganizationsOrganizationIdUsers($organization_id, $post_organizations_organization_id_users): \OpenAPI\Client\Model\User
```

Create a user

Create a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = 'organization_id_example'; // string | Organization Identifier
$post_organizations_organization_id_users = new \OpenAPI\Client\Model\PostOrganizationsOrganizationIdUsers(); // \OpenAPI\Client\Model\PostOrganizationsOrganizationIdUsers

try {
    $result = $apiInstance->postOrganizationsOrganizationIdUsers($organization_id, $post_organizations_organization_id_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postOrganizationsOrganizationIdUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_id** | **string**| Organization Identifier | |
| **post_organizations_organization_id_users** | [**\OpenAPI\Client\Model\PostOrganizationsOrganizationIdUsers**](../Model/PostOrganizationsOrganizationIdUsers.md)|  | |

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
