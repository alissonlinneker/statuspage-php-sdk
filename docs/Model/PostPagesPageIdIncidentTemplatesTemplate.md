# # PostPagesPageIdIncidentTemplatesTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the template, as shown in the list on the \&quot;Templates\&quot; tab of the \&quot;Incidents\&quot; page |
**title** | **string** | Title to be applied to the incident or maintenance when selecting this template |
**body** | **string** | The initial message, created as the first incident or maintenance update. |
**group_id** | **string** | Identifier of Template Group this template belongs to | [optional]
**update_status** | **string** | The status the incident or maintenance should transition to when selecting this template | [optional]
**should_tweet** | **bool** | Whether the \&quot;tweet update\&quot; checkbox should be selected when selecting this template | [optional]
**should_send_notifications** | **bool** | Whether the \&quot;deliver notifications\&quot; checkbox should be selected when selecting this template | [optional]
**component_ids** | **string[]** | List of component_ids affected by this incident | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
