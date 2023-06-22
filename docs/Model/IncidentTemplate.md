# # IncidentTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Incident Template Identifier | [optional]
**components** | [**\OpenAPI\Client\Model\Component[]**](Component.md) | Affected components | [optional]
**name** | **string** | Name of the template, as shown in the list on the \&quot;Templates\&quot; tab of the \&quot;Incidents\&quot; page | [optional]
**title** | **string** | Title to be applied to the incident or maintenance when selecting this template | [optional]
**body** | **string** | Body of the incident or maintenance update to be applied when selecting this template | [optional]
**group_id** | **string** | Identifier of Template Group this template belongs to | [optional]
**update_status** | **string** | The status the incident or maintenance should transition to when selecting this template | [optional]
**should_tweet** | **bool** | Whether the \&quot;tweet update\&quot; checkbox should be selected when selecting this template | [optional]
**should_send_notifications** | **bool** | Whether the \&quot;deliver notifications\&quot; checkbox should be selected when selecting this template | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
