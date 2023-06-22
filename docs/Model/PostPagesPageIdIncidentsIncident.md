# # PostPagesPageIdIncidentsIncident

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Incident Name. There is a maximum limit of 255 characters. |
**status** | **string** | The incident status. For realtime incidents, valid values are investigating, identified, monitoring, and resolved. For scheduled incidents, valid values are scheduled, in_progress, verifying, and completed. | [optional]
**impact_override** | **string** | value to override calculated impact value | [optional]
**scheduled_for** | **\DateTime** | The timestamp the incident is scheduled for. | [optional]
**scheduled_until** | **\DateTime** | The timestamp the incident is scheduled until. | [optional]
**scheduled_remind_prior** | **bool** | Controls whether to remind subscribers prior to scheduled incidents. | [optional]
**auto_transition_to_maintenance_state** | **bool** | Controls whether change components status to under_maintenance once scheduled maintenance is in progress. | [optional]
**auto_transition_to_operational_state** | **bool** | Controls whether change components status to operational once scheduled maintenance completes. | [optional]
**scheduled_auto_in_progress** | **bool** | Controls whether the incident is scheduled to automatically change to in progress. | [optional]
**scheduled_auto_completed** | **bool** | Controls whether the incident is scheduled to automatically change to complete. | [optional]
**auto_transition_deliver_notifications_at_start** | **bool** | Controls whether send notification when scheduled maintenances auto transition to started. | [optional]
**auto_transition_deliver_notifications_at_end** | **bool** | Controls whether send notification when scheduled maintenances auto transition to completed. | [optional]
**metadata** | **object** | Attach a json object to the incident. All top-level values in the object must also be objects. | [optional]
**deliver_notifications** | **bool** | Deliver notifications to subscribers if this is true. If this is false, create an incident without notifying customers. | [optional] [default to true]
**auto_tweet_at_beginning** | **bool** | Controls whether tweet automatically when scheduled maintenance starts. | [optional]
**auto_tweet_on_completion** | **bool** | Controls whether tweet automatically when scheduled maintenance completes. | [optional]
**auto_tweet_on_creation** | **bool** | Controls whether tweet automatically when scheduled maintenance is created. | [optional]
**auto_tweet_one_hour_before** | **bool** | Controls whether tweet automatically one hour before scheduled maintenance starts. | [optional]
**backfill_date** | **string** | TimeStamp when incident was backfilled. | [optional]
**backfilled** | **bool** | Controls whether incident is backfilled. If true, components cannot be specified. | [optional]
**body** | **string** | The initial message, created as the first incident update. There is a maximum limit of 25000 characters | [optional]
**components** | [**\OpenAPI\Client\Model\PostPagesPageIdIncidentsIncidentComponents**](PostPagesPageIdIncidentsIncidentComponents.md) |  | [optional]
**component_ids** | **string[]** | List of component_ids affected by this incident | [optional]
**scheduled_auto_transition** | **bool** | Same as :scheduled_auto_transition_in_progress. Controls whether the incident is scheduled to automatically change to in progress. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
