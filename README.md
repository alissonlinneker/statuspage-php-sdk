# OpenAPIClient-php

# Code of Conduct
Please don't abuse the API, and please report all feature requests and issues to
https://support.atlassian.com/contact

# Rate Limiting
Each API token is limited to 1 request / second as measured on a 60 second rolling window.
To get this limit increased, please contact us at https://support.atlassian.com/contact

Error codes 420 or 429 indicate that you have exceeded the rate limit and the request has been rejected.

# Basics

## HTTPS
It's required

## URL Prefix
In order to maintain version integrity into the future, the API is versioned. All calls
currently begin with the following prefix:

  https://api.statuspage.io/v1/

## RESTful Interface
Wherever possible, the API seeks to implement repeatable patterns with logical,
representative URLs and descriptive HTTP verbs. Below are some examples and conventions
you will see throughout the documentation.

* Collections are buckets: https://api.statuspage.io/v1/pages/asdf123/incidents.json
* Elements have unique IDs: https://api.statuspage.io/v1/pages/asdf123/incidents/jklm456.json
* GET will retrieve information about a collection/element
* POST will create an element in a collection
* PATCH will update a single element
* PUT will replace a single element in a collection (rarely used)
* DELETE will destroy a single element

## Sending Data
Information can be sent in the body as form urlencoded or JSON, but make sure the
Content-Type header matches the body structure or the server gremlins will be angry.

All examples are provided in JSON format, however they can easily be converted to form encoding
if required.  Some examples of how to convert things are below:

    // JSON
    {
      \"incident\": {
        \"name\": \"test incident\",
        \"components\": [\"8kbf7d35c070\", \"vtnh60py4yd7\"]
      }
    }

    // Form Encoded (using curl as an example):
    curl -X POST https://api.statuspage.io/v1/example \\
      -d \"incident[name]=test incident\" \\
      -d \"incident[components][]=8kbf7d35c070\" \\
      -d \"incident[components][]=vtnh60py4yd7\"

# Authentication

<!-- ReDoc-Inject: <security-definitions> -->

For more information, please visit [https://support.atlassian.com/contact](https://support.atlassian.com/contact).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/alissonlinneker/statuspage-php-sdk.git"
    }
  ],
  "require": {
    "alissonlinneker/statuspage-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

Or

Once you have Composer installed, you can install the statuspage-php-sdk by running the following command in the root directory of your project:

`composer require alissonlinneker/statuspage-php-sdk`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api_key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ComponentGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_id = 'page_id_example'; // string | Page identifier
$id = 'id_example'; // string | Component group identifier

try {
    $result = $apiInstance->deletePagesPageIdComponentGroupsId($page_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComponentGroupsApi->deletePagesPageIdComponentGroupsId: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.statuspage.io/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ComponentGroupsApi* | [**deletePagesPageIdComponentGroupsId**](docs/Api/ComponentGroupsApi.md#deletepagespageidcomponentgroupsid) | **DELETE** /pages/{page_id}/component-groups/{id} | Delete a component group
*ComponentGroupsApi* | [**getPagesPageIdComponentGroups**](docs/Api/ComponentGroupsApi.md#getpagespageidcomponentgroups) | **GET** /pages/{page_id}/component-groups | Get a list of component groups
*ComponentGroupsApi* | [**getPagesPageIdComponentGroupsId**](docs/Api/ComponentGroupsApi.md#getpagespageidcomponentgroupsid) | **GET** /pages/{page_id}/component-groups/{id} | Get a component group
*ComponentGroupsApi* | [**getPagesPageIdComponentGroupsIdUptime**](docs/Api/ComponentGroupsApi.md#getpagespageidcomponentgroupsiduptime) | **GET** /pages/{page_id}/component-groups/{id}/uptime | Get uptime data for a component group
*ComponentGroupsApi* | [**patchPagesPageIdComponentGroupsId**](docs/Api/ComponentGroupsApi.md#patchpagespageidcomponentgroupsid) | **PATCH** /pages/{page_id}/component-groups/{id} | Update a component group
*ComponentGroupsApi* | [**postPagesPageIdComponentGroups**](docs/Api/ComponentGroupsApi.md#postpagespageidcomponentgroups) | **POST** /pages/{page_id}/component-groups | Create a component group
*ComponentGroupsApi* | [**putPagesPageIdComponentGroupsId**](docs/Api/ComponentGroupsApi.md#putpagespageidcomponentgroupsid) | **PUT** /pages/{page_id}/component-groups/{id} | Update a component group
*ComponentsApi* | [**deletePagesPageIdComponentsComponentId**](docs/Api/ComponentsApi.md#deletepagespageidcomponentscomponentid) | **DELETE** /pages/{page_id}/components/{component_id} | Delete a component
*ComponentsApi* | [**deletePagesPageIdComponentsComponentIdPageAccessGroups**](docs/Api/ComponentsApi.md#deletepagespageidcomponentscomponentidpageaccessgroups) | **DELETE** /pages/{page_id}/components/{component_id}/page_access_groups | Remove page access groups from a component
*ComponentsApi* | [**deletePagesPageIdComponentsComponentIdPageAccessUsers**](docs/Api/ComponentsApi.md#deletepagespageidcomponentscomponentidpageaccessusers) | **DELETE** /pages/{page_id}/components/{component_id}/page_access_users | Remove page access users from component
*ComponentsApi* | [**getPagesPageIdComponents**](docs/Api/ComponentsApi.md#getpagespageidcomponents) | **GET** /pages/{page_id}/components | Get a list of components
*ComponentsApi* | [**getPagesPageIdComponentsComponentId**](docs/Api/ComponentsApi.md#getpagespageidcomponentscomponentid) | **GET** /pages/{page_id}/components/{component_id} | Get a component
*ComponentsApi* | [**getPagesPageIdComponentsComponentIdUptime**](docs/Api/ComponentsApi.md#getpagespageidcomponentscomponentiduptime) | **GET** /pages/{page_id}/components/{component_id}/uptime | Get uptime data for a component
*ComponentsApi* | [**patchPagesPageIdComponentsComponentId**](docs/Api/ComponentsApi.md#patchpagespageidcomponentscomponentid) | **PATCH** /pages/{page_id}/components/{component_id} | Update a component
*ComponentsApi* | [**postPagesPageIdComponents**](docs/Api/ComponentsApi.md#postpagespageidcomponents) | **POST** /pages/{page_id}/components | Create a component
*ComponentsApi* | [**postPagesPageIdComponentsComponentIdPageAccessGroups**](docs/Api/ComponentsApi.md#postpagespageidcomponentscomponentidpageaccessgroups) | **POST** /pages/{page_id}/components/{component_id}/page_access_groups | Add page access groups to a component
*ComponentsApi* | [**postPagesPageIdComponentsComponentIdPageAccessUsers**](docs/Api/ComponentsApi.md#postpagespageidcomponentscomponentidpageaccessusers) | **POST** /pages/{page_id}/components/{component_id}/page_access_users | Add page access users to a component
*ComponentsApi* | [**putPagesPageIdComponentsComponentId**](docs/Api/ComponentsApi.md#putpagespageidcomponentscomponentid) | **PUT** /pages/{page_id}/components/{component_id} | Update a component
*IncidentPostmortemApi* | [**deletePagesPageIdIncidentsIncidentIdPostmortem**](docs/Api/IncidentPostmortemApi.md#deletepagespageidincidentsincidentidpostmortem) | **DELETE** /pages/{page_id}/incidents/{incident_id}/postmortem | Delete Postmortem
*IncidentPostmortemApi* | [**getPagesPageIdIncidentsIncidentIdPostmortem**](docs/Api/IncidentPostmortemApi.md#getpagespageidincidentsincidentidpostmortem) | **GET** /pages/{page_id}/incidents/{incident_id}/postmortem | Get Postmortem
*IncidentPostmortemApi* | [**putPagesPageIdIncidentsIncidentIdPostmortem**](docs/Api/IncidentPostmortemApi.md#putpagespageidincidentsincidentidpostmortem) | **PUT** /pages/{page_id}/incidents/{incident_id}/postmortem | Create Postmortem
*IncidentPostmortemApi* | [**putPagesPageIdIncidentsIncidentIdPostmortemPublish**](docs/Api/IncidentPostmortemApi.md#putpagespageidincidentsincidentidpostmortempublish) | **PUT** /pages/{page_id}/incidents/{incident_id}/postmortem/publish | Publish Postmortem
*IncidentPostmortemApi* | [**putPagesPageIdIncidentsIncidentIdPostmortemRevert**](docs/Api/IncidentPostmortemApi.md#putpagespageidincidentsincidentidpostmortemrevert) | **PUT** /pages/{page_id}/incidents/{incident_id}/postmortem/revert | Revert Postmortem
*IncidentSubscribersApi* | [**deletePagesPageIdIncidentsIncidentIdSubscribersSubscriberId**](docs/Api/IncidentSubscribersApi.md#deletepagespageidincidentsincidentidsubscriberssubscriberid) | **DELETE** /pages/{page_id}/incidents/{incident_id}/subscribers/{subscriber_id} | Unsubscribe an incident subscriber
*IncidentSubscribersApi* | [**getPagesPageIdIncidentsIncidentIdSubscribers**](docs/Api/IncidentSubscribersApi.md#getpagespageidincidentsincidentidsubscribers) | **GET** /pages/{page_id}/incidents/{incident_id}/subscribers | Get a list of incident subscribers
*IncidentSubscribersApi* | [**getPagesPageIdIncidentsIncidentIdSubscribersSubscriberId**](docs/Api/IncidentSubscribersApi.md#getpagespageidincidentsincidentidsubscriberssubscriberid) | **GET** /pages/{page_id}/incidents/{incident_id}/subscribers/{subscriber_id} | Get an incident subscriber
*IncidentSubscribersApi* | [**postPagesPageIdIncidentsIncidentIdSubscribers**](docs/Api/IncidentSubscribersApi.md#postpagespageidincidentsincidentidsubscribers) | **POST** /pages/{page_id}/incidents/{incident_id}/subscribers | Create an incident subscriber
*IncidentSubscribersApi* | [**postPagesPageIdIncidentsIncidentIdSubscribersSubscriberIdResendConfirmation**](docs/Api/IncidentSubscribersApi.md#postpagespageidincidentsincidentidsubscriberssubscriberidresendconfirmation) | **POST** /pages/{page_id}/incidents/{incident_id}/subscribers/{subscriber_id}/resend_confirmation | Resend confirmation to an incident subscriber
*IncidentUpdatesApi* | [**patchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId**](docs/Api/IncidentUpdatesApi.md#patchpagespageidincidentsincidentidincidentupdatesincidentupdateid) | **PATCH** /pages/{page_id}/incidents/{incident_id}/incident_updates/{incident_update_id} | Update a previous incident update
*IncidentUpdatesApi* | [**putPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdateId**](docs/Api/IncidentUpdatesApi.md#putpagespageidincidentsincidentidincidentupdatesincidentupdateid) | **PUT** /pages/{page_id}/incidents/{incident_id}/incident_updates/{incident_update_id} | Update a previous incident update
*IncidentsApi* | [**deletePagesPageIdIncidentsIncidentId**](docs/Api/IncidentsApi.md#deletepagespageidincidentsincidentid) | **DELETE** /pages/{page_id}/incidents/{incident_id} | Delete an incident
*IncidentsApi* | [**getPagesPageIdIncidents**](docs/Api/IncidentsApi.md#getpagespageidincidents) | **GET** /pages/{page_id}/incidents | Get a list of incidents
*IncidentsApi* | [**getPagesPageIdIncidentsActiveMaintenance**](docs/Api/IncidentsApi.md#getpagespageidincidentsactivemaintenance) | **GET** /pages/{page_id}/incidents/active_maintenance | Get a list of active maintenances
*IncidentsApi* | [**getPagesPageIdIncidentsIncidentId**](docs/Api/IncidentsApi.md#getpagespageidincidentsincidentid) | **GET** /pages/{page_id}/incidents/{incident_id} | Get an incident
*IncidentsApi* | [**getPagesPageIdIncidentsScheduled**](docs/Api/IncidentsApi.md#getpagespageidincidentsscheduled) | **GET** /pages/{page_id}/incidents/scheduled | Get a list of scheduled incidents
*IncidentsApi* | [**getPagesPageIdIncidentsUnresolved**](docs/Api/IncidentsApi.md#getpagespageidincidentsunresolved) | **GET** /pages/{page_id}/incidents/unresolved | Get a list of unresolved incidents
*IncidentsApi* | [**getPagesPageIdIncidentsUpcoming**](docs/Api/IncidentsApi.md#getpagespageidincidentsupcoming) | **GET** /pages/{page_id}/incidents/upcoming | Get a list of upcoming incidents
*IncidentsApi* | [**patchPagesPageIdIncidentsIncidentId**](docs/Api/IncidentsApi.md#patchpagespageidincidentsincidentid) | **PATCH** /pages/{page_id}/incidents/{incident_id} | Update an incident
*IncidentsApi* | [**postPagesPageIdIncidents**](docs/Api/IncidentsApi.md#postpagespageidincidents) | **POST** /pages/{page_id}/incidents | Create an incident
*IncidentsApi* | [**putPagesPageIdIncidentsIncidentId**](docs/Api/IncidentsApi.md#putpagespageidincidentsincidentid) | **PUT** /pages/{page_id}/incidents/{incident_id} | Update an incident
*MetricProvidersApi* | [**deletePagesPageIdMetricsProvidersMetricsProviderId**](docs/Api/MetricProvidersApi.md#deletepagespageidmetricsprovidersmetricsproviderid) | **DELETE** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Delete a metric provider
*MetricProvidersApi* | [**getPagesPageIdMetricsProviders**](docs/Api/MetricProvidersApi.md#getpagespageidmetricsproviders) | **GET** /pages/{page_id}/metrics_providers | Get a list of metric providers
*MetricProvidersApi* | [**getPagesPageIdMetricsProvidersMetricsProviderId**](docs/Api/MetricProvidersApi.md#getpagespageidmetricsprovidersmetricsproviderid) | **GET** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Get a metric provider
*MetricProvidersApi* | [**getPagesPageIdMetricsProvidersMetricsProviderIdMetrics**](docs/Api/MetricProvidersApi.md#getpagespageidmetricsprovidersmetricsprovideridmetrics) | **GET** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | List metrics for a metric provider
*MetricProvidersApi* | [**patchPagesPageIdMetricsProvidersMetricsProviderId**](docs/Api/MetricProvidersApi.md#patchpagespageidmetricsprovidersmetricsproviderid) | **PATCH** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Update a metric provider
*MetricProvidersApi* | [**postPagesPageIdMetricsProviders**](docs/Api/MetricProvidersApi.md#postpagespageidmetricsproviders) | **POST** /pages/{page_id}/metrics_providers | Create a metric provider
*MetricProvidersApi* | [**postPagesPageIdMetricsProvidersMetricsProviderIdMetrics**](docs/Api/MetricProvidersApi.md#postpagespageidmetricsprovidersmetricsprovideridmetrics) | **POST** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | Create a metric for a metric provider
*MetricProvidersApi* | [**putPagesPageIdMetricsProvidersMetricsProviderId**](docs/Api/MetricProvidersApi.md#putpagespageidmetricsprovidersmetricsproviderid) | **PUT** /pages/{page_id}/metrics_providers/{metrics_provider_id} | Update a metric provider
*MetricsApi* | [**deletePagesPageIdMetricsMetricId**](docs/Api/MetricsApi.md#deletepagespageidmetricsmetricid) | **DELETE** /pages/{page_id}/metrics/{metric_id} | Delete a metric
*MetricsApi* | [**deletePagesPageIdMetricsMetricIdData**](docs/Api/MetricsApi.md#deletepagespageidmetricsmetriciddata) | **DELETE** /pages/{page_id}/metrics/{metric_id}/data | Reset data for a metric
*MetricsApi* | [**getPagesPageIdMetrics**](docs/Api/MetricsApi.md#getpagespageidmetrics) | **GET** /pages/{page_id}/metrics | Get a list of metrics
*MetricsApi* | [**getPagesPageIdMetricsMetricId**](docs/Api/MetricsApi.md#getpagespageidmetricsmetricid) | **GET** /pages/{page_id}/metrics/{metric_id} | Get a metric
*MetricsApi* | [**getPagesPageIdMetricsProvidersMetricsProviderIdMetrics**](docs/Api/MetricsApi.md#getpagespageidmetricsprovidersmetricsprovideridmetrics) | **GET** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | List metrics for a metric provider
*MetricsApi* | [**patchPagesPageIdMetricsMetricId**](docs/Api/MetricsApi.md#patchpagespageidmetricsmetricid) | **PATCH** /pages/{page_id}/metrics/{metric_id} | Update a metric
*MetricsApi* | [**postPagesPageIdMetricsData**](docs/Api/MetricsApi.md#postpagespageidmetricsdata) | **POST** /pages/{page_id}/metrics/data | Add data points to metrics
*MetricsApi* | [**postPagesPageIdMetricsMetricIdData**](docs/Api/MetricsApi.md#postpagespageidmetricsmetriciddata) | **POST** /pages/{page_id}/metrics/{metric_id}/data | Add data to a metric
*MetricsApi* | [**postPagesPageIdMetricsProvidersMetricsProviderIdMetrics**](docs/Api/MetricsApi.md#postpagespageidmetricsprovidersmetricsprovideridmetrics) | **POST** /pages/{page_id}/metrics_providers/{metrics_provider_id}/metrics | Create a metric for a metric provider
*MetricsApi* | [**putPagesPageIdMetricsMetricId**](docs/Api/MetricsApi.md#putpagespageidmetricsmetricid) | **PUT** /pages/{page_id}/metrics/{metric_id} | Update a metric
*PageAccessGroupComponentsApi* | [**deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](docs/Api/PageAccessGroupComponentsApi.md#deletepagespageidpageaccessgroupspageaccessgroupidcomponents) | **DELETE** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Delete components for a page access group
*PageAccessGroupComponentsApi* | [**deletePagesPageIdPageAccessGroupsPageAccessGroupIdComponentsComponentId**](docs/Api/PageAccessGroupComponentsApi.md#deletepagespageidpageaccessgroupspageaccessgroupidcomponentscomponentid) | **DELETE** /pages/{page_id}/page_access_groups/{page_access_group_id}/components/{component_id} | Remove a component from a page access group
*PageAccessGroupComponentsApi* | [**getPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](docs/Api/PageAccessGroupComponentsApi.md#getpagespageidpageaccessgroupspageaccessgroupidcomponents) | **GET** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | List components for a page access group
*PageAccessGroupComponentsApi* | [**patchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](docs/Api/PageAccessGroupComponentsApi.md#patchpagespageidpageaccessgroupspageaccessgroupidcomponents) | **PATCH** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Add components to page access group
*PageAccessGroupComponentsApi* | [**postPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](docs/Api/PageAccessGroupComponentsApi.md#postpagespageidpageaccessgroupspageaccessgroupidcomponents) | **POST** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Replace components for a page access group
*PageAccessGroupComponentsApi* | [**putPagesPageIdPageAccessGroupsPageAccessGroupIdComponents**](docs/Api/PageAccessGroupComponentsApi.md#putpagespageidpageaccessgroupspageaccessgroupidcomponents) | **PUT** /pages/{page_id}/page_access_groups/{page_access_group_id}/components | Add components to page access group
*PageAccessGroupsApi* | [**deletePagesPageIdPageAccessGroupsPageAccessGroupId**](docs/Api/PageAccessGroupsApi.md#deletepagespageidpageaccessgroupspageaccessgroupid) | **DELETE** /pages/{page_id}/page_access_groups/{page_access_group_id} | Remove a page access group
*PageAccessGroupsApi* | [**getPagesPageIdPageAccessGroups**](docs/Api/PageAccessGroupsApi.md#getpagespageidpageaccessgroups) | **GET** /pages/{page_id}/page_access_groups | Get a list of page access groups
*PageAccessGroupsApi* | [**getPagesPageIdPageAccessGroupsPageAccessGroupId**](docs/Api/PageAccessGroupsApi.md#getpagespageidpageaccessgroupspageaccessgroupid) | **GET** /pages/{page_id}/page_access_groups/{page_access_group_id} | Get a page access group
*PageAccessGroupsApi* | [**patchPagesPageIdPageAccessGroupsPageAccessGroupId**](docs/Api/PageAccessGroupsApi.md#patchpagespageidpageaccessgroupspageaccessgroupid) | **PATCH** /pages/{page_id}/page_access_groups/{page_access_group_id} | Update a page access group
*PageAccessGroupsApi* | [**postPagesPageIdPageAccessGroups**](docs/Api/PageAccessGroupsApi.md#postpagespageidpageaccessgroups) | **POST** /pages/{page_id}/page_access_groups | Create a page access group
*PageAccessGroupsApi* | [**putPagesPageIdPageAccessGroupsPageAccessGroupId**](docs/Api/PageAccessGroupsApi.md#putpagespageidpageaccessgroupspageaccessgroupid) | **PUT** /pages/{page_id}/page_access_groups/{page_access_group_id} | Update a page access group
*PageAccessUserComponentsApi* | [**deletePagesPageIdPageAccessUsersPageAccessUserIdComponents**](docs/Api/PageAccessUserComponentsApi.md#deletepagespageidpageaccessuserspageaccessuseridcomponents) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Remove components for page access user
*PageAccessUserComponentsApi* | [**deletePagesPageIdPageAccessUsersPageAccessUserIdComponentsComponentId**](docs/Api/PageAccessUserComponentsApi.md#deletepagespageidpageaccessuserspageaccessuseridcomponentscomponentid) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/components/{component_id} | Remove component for page access user
*PageAccessUserComponentsApi* | [**getPagesPageIdPageAccessUsersPageAccessUserIdComponents**](docs/Api/PageAccessUserComponentsApi.md#getpagespageidpageaccessuserspageaccessuseridcomponents) | **GET** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Get components for page access user
*PageAccessUserComponentsApi* | [**patchPagesPageIdPageAccessUsersPageAccessUserIdComponents**](docs/Api/PageAccessUserComponentsApi.md#patchpagespageidpageaccessuserspageaccessuseridcomponents) | **PATCH** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Add components for page access user
*PageAccessUserComponentsApi* | [**postPagesPageIdPageAccessUsersPageAccessUserIdComponents**](docs/Api/PageAccessUserComponentsApi.md#postpagespageidpageaccessuserspageaccessuseridcomponents) | **POST** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Replace components for page access user
*PageAccessUserComponentsApi* | [**putPagesPageIdPageAccessUsersPageAccessUserIdComponents**](docs/Api/PageAccessUserComponentsApi.md#putpagespageidpageaccessuserspageaccessuseridcomponents) | **PUT** /pages/{page_id}/page_access_users/{page_access_user_id}/components | Add components for page access user
*PageAccessUserMetricsApi* | [**deletePagesPageIdPageAccessUsersPageAccessUserIdMetrics**](docs/Api/PageAccessUserMetricsApi.md#deletepagespageidpageaccessuserspageaccessuseridmetrics) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Delete metrics for page access user
*PageAccessUserMetricsApi* | [**deletePagesPageIdPageAccessUsersPageAccessUserIdMetricsMetricId**](docs/Api/PageAccessUserMetricsApi.md#deletepagespageidpageaccessuserspageaccessuseridmetricsmetricid) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics/{metric_id} | Delete metric for page access user
*PageAccessUserMetricsApi* | [**getPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](docs/Api/PageAccessUserMetricsApi.md#getpagespageidpageaccessuserspageaccessuseridmetrics) | **GET** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Get metrics for page access user
*PageAccessUserMetricsApi* | [**patchPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](docs/Api/PageAccessUserMetricsApi.md#patchpagespageidpageaccessuserspageaccessuseridmetrics) | **PATCH** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Add metrics for page access user
*PageAccessUserMetricsApi* | [**postPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](docs/Api/PageAccessUserMetricsApi.md#postpagespageidpageaccessuserspageaccessuseridmetrics) | **POST** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Replace metrics for page access user
*PageAccessUserMetricsApi* | [**putPagesPageIdPageAccessUsersPageAccessUserIdMetrics**](docs/Api/PageAccessUserMetricsApi.md#putpagespageidpageaccessuserspageaccessuseridmetrics) | **PUT** /pages/{page_id}/page_access_users/{page_access_user_id}/metrics | Add metrics for page access user
*PageAccessUsersApi* | [**deletePagesPageIdPageAccessUsersPageAccessUserId**](docs/Api/PageAccessUsersApi.md#deletepagespageidpageaccessuserspageaccessuserid) | **DELETE** /pages/{page_id}/page_access_users/{page_access_user_id} | Delete page access user
*PageAccessUsersApi* | [**getPagesPageIdPageAccessUsers**](docs/Api/PageAccessUsersApi.md#getpagespageidpageaccessusers) | **GET** /pages/{page_id}/page_access_users | Get a list of page access users
*PageAccessUsersApi* | [**getPagesPageIdPageAccessUsersPageAccessUserId**](docs/Api/PageAccessUsersApi.md#getpagespageidpageaccessuserspageaccessuserid) | **GET** /pages/{page_id}/page_access_users/{page_access_user_id} | Get page access user
*PageAccessUsersApi* | [**patchPagesPageIdPageAccessUsersPageAccessUserId**](docs/Api/PageAccessUsersApi.md#patchpagespageidpageaccessuserspageaccessuserid) | **PATCH** /pages/{page_id}/page_access_users/{page_access_user_id} | Update page access user
*PageAccessUsersApi* | [**postPagesPageIdPageAccessUsers**](docs/Api/PageAccessUsersApi.md#postpagespageidpageaccessusers) | **POST** /pages/{page_id}/page_access_users | Add a page access user
*PageAccessUsersApi* | [**putPagesPageIdPageAccessUsersPageAccessUserId**](docs/Api/PageAccessUsersApi.md#putpagespageidpageaccessuserspageaccessuserid) | **PUT** /pages/{page_id}/page_access_users/{page_access_user_id} | Update page access user
*PagesApi* | [**getPages**](docs/Api/PagesApi.md#getpages) | **GET** /pages | Get a list of pages
*PagesApi* | [**getPagesPageId**](docs/Api/PagesApi.md#getpagespageid) | **GET** /pages/{page_id} | Get a page
*PagesApi* | [**patchPagesPageId**](docs/Api/PagesApi.md#patchpagespageid) | **PATCH** /pages/{page_id} | Update a page
*PagesApi* | [**putPagesPageId**](docs/Api/PagesApi.md#putpagespageid) | **PUT** /pages/{page_id} | Update a page
*PermissionsApi* | [**getOrganizationsOrganizationIdPermissionsUserId**](docs/Api/PermissionsApi.md#getorganizationsorganizationidpermissionsuserid) | **GET** /organizations/{organization_id}/permissions/{user_id} | Get a user&#39;s permissions
*PermissionsApi* | [**putOrganizationsOrganizationIdPermissionsUserId**](docs/Api/PermissionsApi.md#putorganizationsorganizationidpermissionsuserid) | **PUT** /organizations/{organization_id}/permissions/{user_id} | Update a user&#39;s role permissions
*StatusEmbedConfigApi* | [**getPagesPageIdStatusEmbedConfig**](docs/Api/StatusEmbedConfigApi.md#getpagespageidstatusembedconfig) | **GET** /pages/{page_id}/status_embed_config | Get status embed config settings
*StatusEmbedConfigApi* | [**patchPagesPageIdStatusEmbedConfig**](docs/Api/StatusEmbedConfigApi.md#patchpagespageidstatusembedconfig) | **PATCH** /pages/{page_id}/status_embed_config | Update status embed config settings
*StatusEmbedConfigApi* | [**putPagesPageIdStatusEmbedConfig**](docs/Api/StatusEmbedConfigApi.md#putpagespageidstatusembedconfig) | **PUT** /pages/{page_id}/status_embed_config | Update status embed config settings
*SubscribersApi* | [**deletePagesPageIdSubscribersSubscriberId**](docs/Api/SubscribersApi.md#deletepagespageidsubscriberssubscriberid) | **DELETE** /pages/{page_id}/subscribers/{subscriber_id} | Unsubscribe a subscriber
*SubscribersApi* | [**getPagesPageIdSubscribers**](docs/Api/SubscribersApi.md#getpagespageidsubscribers) | **GET** /pages/{page_id}/subscribers | Get a list of subscribers
*SubscribersApi* | [**getPagesPageIdSubscribersCount**](docs/Api/SubscribersApi.md#getpagespageidsubscriberscount) | **GET** /pages/{page_id}/subscribers/count | Get a count of subscribers by type
*SubscribersApi* | [**getPagesPageIdSubscribersHistogramByState**](docs/Api/SubscribersApi.md#getpagespageidsubscribershistogrambystate) | **GET** /pages/{page_id}/subscribers/histogram_by_state | Get a histogram of subscribers by type and then state
*SubscribersApi* | [**getPagesPageIdSubscribersSubscriberId**](docs/Api/SubscribersApi.md#getpagespageidsubscriberssubscriberid) | **GET** /pages/{page_id}/subscribers/{subscriber_id} | Get a subscriber
*SubscribersApi* | [**getPagesPageIdSubscribersUnsubscribed**](docs/Api/SubscribersApi.md#getpagespageidsubscribersunsubscribed) | **GET** /pages/{page_id}/subscribers/unsubscribed | Get a list of unsubscribed subscribers
*SubscribersApi* | [**patchPagesPageIdSubscribersSubscriberId**](docs/Api/SubscribersApi.md#patchpagespageidsubscriberssubscriberid) | **PATCH** /pages/{page_id}/subscribers/{subscriber_id} | Update a subscriber
*SubscribersApi* | [**postPagesPageIdSubscribers**](docs/Api/SubscribersApi.md#postpagespageidsubscribers) | **POST** /pages/{page_id}/subscribers | Create a subscriber
*SubscribersApi* | [**postPagesPageIdSubscribersReactivate**](docs/Api/SubscribersApi.md#postpagespageidsubscribersreactivate) | **POST** /pages/{page_id}/subscribers/reactivate | Reactivate a list of subscribers
*SubscribersApi* | [**postPagesPageIdSubscribersResendConfirmation**](docs/Api/SubscribersApi.md#postpagespageidsubscribersresendconfirmation) | **POST** /pages/{page_id}/subscribers/resend_confirmation | Resend confirmations to a list of subscribers
*SubscribersApi* | [**postPagesPageIdSubscribersSubscriberIdResendConfirmation**](docs/Api/SubscribersApi.md#postpagespageidsubscriberssubscriberidresendconfirmation) | **POST** /pages/{page_id}/subscribers/{subscriber_id}/resend_confirmation | Resend confirmation to a subscriber
*SubscribersApi* | [**postPagesPageIdSubscribersUnsubscribe**](docs/Api/SubscribersApi.md#postpagespageidsubscribersunsubscribe) | **POST** /pages/{page_id}/subscribers/unsubscribe | Unsubscribe a list of subscribers
*TemplatesApi* | [**getPagesPageIdIncidentTemplates**](docs/Api/TemplatesApi.md#getpagespageidincidenttemplates) | **GET** /pages/{page_id}/incident_templates | Get a list of templates
*TemplatesApi* | [**postPagesPageIdIncidentTemplates**](docs/Api/TemplatesApi.md#postpagespageidincidenttemplates) | **POST** /pages/{page_id}/incident_templates | Create a template
*UsersApi* | [**deleteOrganizationsOrganizationIdUsersUserId**](docs/Api/UsersApi.md#deleteorganizationsorganizationidusersuserid) | **DELETE** /organizations/{organization_id}/users/{user_id} | Delete a user
*UsersApi* | [**getOrganizationsOrganizationIdPermissionsUserId**](docs/Api/UsersApi.md#getorganizationsorganizationidpermissionsuserid) | **GET** /organizations/{organization_id}/permissions/{user_id} | Get a user&#39;s permissions
*UsersApi* | [**getOrganizationsOrganizationIdUsers**](docs/Api/UsersApi.md#getorganizationsorganizationidusers) | **GET** /organizations/{organization_id}/users | Get a list of users
*UsersApi* | [**postOrganizationsOrganizationIdUsers**](docs/Api/UsersApi.md#postorganizationsorganizationidusers) | **POST** /organizations/{organization_id}/users | Create a user

## Models

- [Component](docs/Model/Component.md)
- [ComponentGroupUptime](docs/Model/ComponentGroupUptime.md)
- [ComponentGroupUptimeRelatedEvents](docs/Model/ComponentGroupUptimeRelatedEvents.md)
- [ComponentUptime](docs/Model/ComponentUptime.md)
- [ComponentUptimeRelatedEvents](docs/Model/ComponentUptimeRelatedEvents.md)
- [DeletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents](docs/Model/DeletePagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)
- [DeletePagesPageIdPageAccessUsersPageAccessUserIdComponents](docs/Model/DeletePagesPageIdPageAccessUsersPageAccessUserIdComponents.md)
- [DeletePagesPageIdPageAccessUsersPageAccessUserIdMetrics](docs/Model/DeletePagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)
- [ErrorEntity](docs/Model/ErrorEntity.md)
- [GroupComponent](docs/Model/GroupComponent.md)
- [Incident](docs/Model/Incident.md)
- [IncidentTemplate](docs/Model/IncidentTemplate.md)
- [IncidentUpdate](docs/Model/IncidentUpdate.md)
- [Metric](docs/Model/Metric.md)
- [MetricAddResponse](docs/Model/MetricAddResponse.md)
- [MetricAddResponseMetricIdInner](docs/Model/MetricAddResponseMetricIdInner.md)
- [MetricsProvider](docs/Model/MetricsProvider.md)
- [Page](docs/Model/Page.md)
- [PageAccessGroup](docs/Model/PageAccessGroup.md)
- [PageAccessUser](docs/Model/PageAccessUser.md)
- [PatchPages](docs/Model/PatchPages.md)
- [PatchPagesPage](docs/Model/PatchPagesPage.md)
- [PatchPagesPageIdComponentGroups](docs/Model/PatchPagesPageIdComponentGroups.md)
- [PatchPagesPageIdComponents](docs/Model/PatchPagesPageIdComponents.md)
- [PatchPagesPageIdIncidents](docs/Model/PatchPagesPageIdIncidents.md)
- [PatchPagesPageIdIncidentsIncident](docs/Model/PatchPagesPageIdIncidentsIncident.md)
- [PatchPagesPageIdIncidentsIncidentComponents](docs/Model/PatchPagesPageIdIncidentsIncidentComponents.md)
- [PatchPagesPageIdIncidentsIncidentIdIncidentUpdates](docs/Model/PatchPagesPageIdIncidentsIncidentIdIncidentUpdates.md)
- [PatchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdate](docs/Model/PatchPagesPageIdIncidentsIncidentIdIncidentUpdatesIncidentUpdate.md)
- [PatchPagesPageIdMetrics](docs/Model/PatchPagesPageIdMetrics.md)
- [PatchPagesPageIdMetricsMetric](docs/Model/PatchPagesPageIdMetricsMetric.md)
- [PatchPagesPageIdMetricsProviders](docs/Model/PatchPagesPageIdMetricsProviders.md)
- [PatchPagesPageIdMetricsProvidersMetricsProvider](docs/Model/PatchPagesPageIdMetricsProvidersMetricsProvider.md)
- [PatchPagesPageIdPageAccessGroups](docs/Model/PatchPagesPageIdPageAccessGroups.md)
- [PatchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents](docs/Model/PatchPagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)
- [PatchPagesPageIdPageAccessUsersPageAccessUserIdComponents](docs/Model/PatchPagesPageIdPageAccessUsersPageAccessUserIdComponents.md)
- [PatchPagesPageIdPageAccessUsersPageAccessUserIdMetrics](docs/Model/PatchPagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)
- [PatchPagesPageIdStatusEmbedConfig](docs/Model/PatchPagesPageIdStatusEmbedConfig.md)
- [PatchPagesPageIdStatusEmbedConfigStatusEmbedConfig](docs/Model/PatchPagesPageIdStatusEmbedConfigStatusEmbedConfig.md)
- [PatchPagesPageIdSubscribers](docs/Model/PatchPagesPageIdSubscribers.md)
- [Permissions](docs/Model/Permissions.md)
- [PermissionsData](docs/Model/PermissionsData.md)
- [PermissionsDataPages](docs/Model/PermissionsDataPages.md)
- [PostOrganizationsOrganizationIdUsers](docs/Model/PostOrganizationsOrganizationIdUsers.md)
- [PostOrganizationsOrganizationIdUsersUser](docs/Model/PostOrganizationsOrganizationIdUsersUser.md)
- [PostPagesPageIdComponentGroups](docs/Model/PostPagesPageIdComponentGroups.md)
- [PostPagesPageIdComponentGroupsComponentGroup](docs/Model/PostPagesPageIdComponentGroupsComponentGroup.md)
- [PostPagesPageIdComponents](docs/Model/PostPagesPageIdComponents.md)
- [PostPagesPageIdComponentsComponent](docs/Model/PostPagesPageIdComponentsComponent.md)
- [PostPagesPageIdIncidentTemplates](docs/Model/PostPagesPageIdIncidentTemplates.md)
- [PostPagesPageIdIncidentTemplatesTemplate](docs/Model/PostPagesPageIdIncidentTemplatesTemplate.md)
- [PostPagesPageIdIncidents](docs/Model/PostPagesPageIdIncidents.md)
- [PostPagesPageIdIncidentsIncident](docs/Model/PostPagesPageIdIncidentsIncident.md)
- [PostPagesPageIdIncidentsIncidentComponents](docs/Model/PostPagesPageIdIncidentsIncidentComponents.md)
- [PostPagesPageIdIncidentsIncidentIdSubscribers](docs/Model/PostPagesPageIdIncidentsIncidentIdSubscribers.md)
- [PostPagesPageIdIncidentsIncidentIdSubscribersSubscriber](docs/Model/PostPagesPageIdIncidentsIncidentIdSubscribersSubscriber.md)
- [PostPagesPageIdMetricsData](docs/Model/PostPagesPageIdMetricsData.md)
- [PostPagesPageIdMetricsMetricIdData](docs/Model/PostPagesPageIdMetricsMetricIdData.md)
- [PostPagesPageIdMetricsMetricIdDataData](docs/Model/PostPagesPageIdMetricsMetricIdDataData.md)
- [PostPagesPageIdMetricsProviders](docs/Model/PostPagesPageIdMetricsProviders.md)
- [PostPagesPageIdMetricsProvidersMetricsProvider](docs/Model/PostPagesPageIdMetricsProvidersMetricsProvider.md)
- [PostPagesPageIdMetricsProvidersMetricsProviderIdMetrics](docs/Model/PostPagesPageIdMetricsProvidersMetricsProviderIdMetrics.md)
- [PostPagesPageIdMetricsProvidersMetricsProviderIdMetricsMetric](docs/Model/PostPagesPageIdMetricsProvidersMetricsProviderIdMetricsMetric.md)
- [PostPagesPageIdPageAccessGroups](docs/Model/PostPagesPageIdPageAccessGroups.md)
- [PostPagesPageIdPageAccessGroupsPageAccessGroup](docs/Model/PostPagesPageIdPageAccessGroupsPageAccessGroup.md)
- [PostPagesPageIdPageAccessGroupsPageAccessGroupIdComponents](docs/Model/PostPagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)
- [PostPagesPageIdPageAccessUsers](docs/Model/PostPagesPageIdPageAccessUsers.md)
- [PostPagesPageIdPageAccessUsersPageAccessUser](docs/Model/PostPagesPageIdPageAccessUsersPageAccessUser.md)
- [PostPagesPageIdPageAccessUsersPageAccessUserIdComponents](docs/Model/PostPagesPageIdPageAccessUsersPageAccessUserIdComponents.md)
- [PostPagesPageIdPageAccessUsersPageAccessUserIdMetrics](docs/Model/PostPagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)
- [PostPagesPageIdSubscribers](docs/Model/PostPagesPageIdSubscribers.md)
- [PostPagesPageIdSubscribersReactivate](docs/Model/PostPagesPageIdSubscribersReactivate.md)
- [PostPagesPageIdSubscribersResendConfirmation](docs/Model/PostPagesPageIdSubscribersResendConfirmation.md)
- [PostPagesPageIdSubscribersSubscriber](docs/Model/PostPagesPageIdSubscribersSubscriber.md)
- [PostPagesPageIdSubscribersUnsubscribe](docs/Model/PostPagesPageIdSubscribersUnsubscribe.md)
- [Postmortem](docs/Model/Postmortem.md)
- [PutOrganizationsOrganizationIdPermissions](docs/Model/PutOrganizationsOrganizationIdPermissions.md)
- [PutOrganizationsOrganizationIdPermissionsPages](docs/Model/PutOrganizationsOrganizationIdPermissionsPages.md)
- [PutOrganizationsOrganizationIdPermissionsPagesPageId](docs/Model/PutOrganizationsOrganizationIdPermissionsPagesPageId.md)
- [PutPages](docs/Model/PutPages.md)
- [PutPagesPageIdComponentGroups](docs/Model/PutPagesPageIdComponentGroups.md)
- [PutPagesPageIdComponents](docs/Model/PutPagesPageIdComponents.md)
- [PutPagesPageIdIncidents](docs/Model/PutPagesPageIdIncidents.md)
- [PutPagesPageIdIncidentsIncidentIdIncidentUpdates](docs/Model/PutPagesPageIdIncidentsIncidentIdIncidentUpdates.md)
- [PutPagesPageIdIncidentsIncidentIdPostmortem](docs/Model/PutPagesPageIdIncidentsIncidentIdPostmortem.md)
- [PutPagesPageIdIncidentsIncidentIdPostmortemPostmortem](docs/Model/PutPagesPageIdIncidentsIncidentIdPostmortemPostmortem.md)
- [PutPagesPageIdIncidentsIncidentIdPostmortemPublish](docs/Model/PutPagesPageIdIncidentsIncidentIdPostmortemPublish.md)
- [PutPagesPageIdIncidentsIncidentIdPostmortemPublishPostmortem](docs/Model/PutPagesPageIdIncidentsIncidentIdPostmortemPublishPostmortem.md)
- [PutPagesPageIdMetrics](docs/Model/PutPagesPageIdMetrics.md)
- [PutPagesPageIdMetricsProviders](docs/Model/PutPagesPageIdMetricsProviders.md)
- [PutPagesPageIdPageAccessGroups](docs/Model/PutPagesPageIdPageAccessGroups.md)
- [PutPagesPageIdPageAccessGroupsPageAccessGroupIdComponents](docs/Model/PutPagesPageIdPageAccessGroupsPageAccessGroupIdComponents.md)
- [PutPagesPageIdPageAccessUsersPageAccessUserIdComponents](docs/Model/PutPagesPageIdPageAccessUsersPageAccessUserIdComponents.md)
- [PutPagesPageIdPageAccessUsersPageAccessUserIdMetrics](docs/Model/PutPagesPageIdPageAccessUsersPageAccessUserIdMetrics.md)
- [PutPagesPageIdStatusEmbedConfig](docs/Model/PutPagesPageIdStatusEmbedConfig.md)
- [SingleMetricAddResponse](docs/Model/SingleMetricAddResponse.md)
- [StatusEmbedConfig](docs/Model/StatusEmbedConfig.md)
- [Subscriber](docs/Model/Subscriber.md)
- [SubscriberCountByState](docs/Model/SubscriberCountByState.md)
- [SubscriberCountByType](docs/Model/SubscriberCountByType.md)
- [SubscriberCountByTypeAndState](docs/Model/SubscriberCountByTypeAndState.md)
- [User](docs/Model/User.md)

## Authorization

Authentication schemes defined for the API:
### api_key

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
