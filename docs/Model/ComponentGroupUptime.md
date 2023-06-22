# # ComponentGroupUptime

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**range_start** | **\DateTime** | Start date used for uptime calculation (see the warnings field in the response if this value does not match the start parameter you provided). | [optional]
**range_end** | **\DateTime** | End date used for uptime calculation (see the warnings field in the response if this value does not match the end parameter you provided). | [optional]
**uptime_percentage** | **float** | Uptime percentage for a component | [optional]
**major_outage** | **int** | Seconds of major outage | [optional]
**partial_outage** | **int** | Seconds of partial outage | [optional]
**warnings** | **string** | Warning messages related to the uptime query that may occur | [optional]
**id** | **string** | Component group identifier | [optional]
**name** | **string** | Component group display name | [optional]
**related_events** | [**\OpenAPI\Client\Model\ComponentGroupUptimeRelatedEvents**](ComponentGroupUptimeRelatedEvents.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
