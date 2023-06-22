# # IncidentUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Incident Update Identifier. | [optional]
**incident_id** | **string** | Incident Identifier. | [optional]
**affected_components** | **object[]** | Affected components associated with the incident update. | [optional]
**body** | **string** | Incident update body. | [optional]
**created_at** | **\DateTime** | The timestamp when the incident update was created at. | [optional]
**custom_tweet** | **string** | An optional customized tweet message for incident postmortem. | [optional]
**deliver_notifications** | **bool** | Controls whether to delivery notifications. | [optional]
**display_at** | **\DateTime** | Timestamp when incident update is happened. | [optional]
**status** | **string** | The incident status. For realtime incidents, valid values are investigating, identified, monitoring, and resolved. For scheduled incidents, valid values are scheduled, in_progress, verifying, and completed. | [optional]
**tweet_id** | **string** | Tweet identifier associated to this incident update. | [optional]
**twitter_updated_at** | **\DateTime** | The timestamp when twitter updated at. | [optional]
**updated_at** | **\DateTime** | The timestamp when the incident update is updated. | [optional]
**wants_twitter_update** | **bool** | Controls whether to create twitter update. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
