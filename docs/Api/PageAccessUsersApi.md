# OpenAPI\Client\PageAccessUsersApi

All URIs are relative to https://api.statuspage.io/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePagesPageIdPageAccessUsersPageAccessUserId()**](PageAccessUsersApi.md#deletePagesPageIdPageAccessUsersPageAccessUserId) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id} | Delete page access user |
| [**getPagesPageIdPageAccessUsers()**](PageAccessUsersApi.md#getPagesPageIdPageAccessUsers) | **GET** /pages/{page_id}/page_access_users | Get a list of page access users |
| [**getPagesPageIdPageAccessUsersPageAccessUserId()**](PageAccessUsersApi.md#getPagesPageIdPageAccessUsersPageAccessUserId) | **GET** /pages/{page_id}/page_access_users/{page_access_user_id} | Get page access user |
| [**patchPagesPageIdPageAccessUsersPageAccessUserId()**](PageAccessUsersApi.md#patchPagesPageIdPageAccessUsersPageAccessUserId) | **PATCH** /pages/{page_id}/page_access_users/{page_access_user_id} | Update page access user |
| [**postPagesPageIdPageAccessUsers()**](PageAccessUsersApi.md#postPagesPageIdPageAccessUsers) | **POST** /pages/{page_id}/page_access_users | Add a page access user |
| [**putPagesPageIdPageAccessUsersPageAccessUserId()**](PageAccessUsersApi.md#putPagesPageIdPageAccessUsersPageAccessUserId) | **PUT** /pages/{page_id}/page_access_users/{page_access_user_id} | Update page access user |


## `deletePagesPageIdPageAccessUsersPageAccessUserId()`

```php
deletePagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id)
```

Delete page access user

Delete page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier

try {
    $apiInstance->deletePagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUsersApi->deletePagesPageIdPageAccessUsersPageAccessUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |

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

## `getPagesPageIdPageAccessUsers()`

```php
getPagesPageIdPageAccessUsers($page_id, $email, $page, $per_page): \OpenAPI\Client\Model\PageAccessUser[]
```

Get a list of page access users

Get a list of page access users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$email = 'email_example'; // string | Email address to search for
$page = 56; // int | Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided.
$per_page = 56; // int | Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided.

try {
    $result = $apiInstance->getPagesPageIdPageAccessUsers($page_id, $email, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUsersApi->getPagesPageIdPageAccessUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **email** | **string**| Email address to search for | [optional] |
| **page** | **int**| Page offset to fetch. Beginning February 28, 2023, this endpoint will return paginated data even if this query parameter is not provided. | [optional] |
| **per_page** | **int**| Number of results to return per page. Beginning February 28, 2023, a default and maximum limit of 100 will be imposed and this endpoint will return paginated data even if this query parameter is not provided. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PageAccessUser[]**](../Model/PageAccessUser.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPagesPageIdPageAccessUsersPageAccessUserId()`

```php
getPagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id): \OpenAPI\Client\Model\PageAccessUser
```

Get page access user

Get page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier

try {
    $result = $apiInstance->getPagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUsersApi->getPagesPageIdPageAccessUsersPageAccessUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |

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

## `patchPagesPageIdPageAccessUsersPageAccessUserId()`

```php
patchPagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id): \OpenAPI\Client\Model\PageAccessUser
```

Update page access user

Update page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier

try {
    $result = $apiInstance->patchPagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUsersApi->patchPagesPageIdPageAccessUsersPageAccessUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |

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

## `postPagesPageIdPageAccessUsers()`

```php
postPagesPageIdPageAccessUsers($page_id, $post_pages_page_id_page_access_users): \OpenAPI\Client\Model\PageAccessUser
```

Add a page access user

Add a page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$post_pages_page_id_page_access_users = new \OpenAPI\Client\Model\PostPagesPageIdPageAccessUsers(); // \OpenAPI\Client\Model\PostPagesPageIdPageAccessUsers

try {
    $result = $apiInstance->postPagesPageIdPageAccessUsers($page_id, $post_pages_page_id_page_access_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUsersApi->postPagesPageIdPageAccessUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **post_pages_page_id_page_access_users** | [**\OpenAPI\Client\Model\PostPagesPageIdPageAccessUsers**](../Model/PostPagesPageIdPageAccessUsers.md)|  | |

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

## `putPagesPageIdPageAccessUsersPageAccessUserId()`

```php
putPagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id): \OpenAPI\Client\Model\PageAccessUser
```

Update page access user

Update page access user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PageAccessUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$page_access_user_id = 'page_access_user_id_example'; // string | Page Access User Identifier

try {
    $result = $apiInstance->putPagesPageIdPageAccessUsersPageAccessUserId($page_id, $page_access_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageAccessUsersApi->putPagesPageIdPageAccessUsersPageAccessUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page_id** | **string**| Page identifier | |
| **page_access_user_id** | **string**| Page Access User Identifier | |

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
