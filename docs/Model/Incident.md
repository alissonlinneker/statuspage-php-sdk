# # Incident

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Incident Identifier | [optional]
**components** | [**\OpenAPI\Client\Model\Component[]**](Component.md) | Incident components | [optional]
**created_at** | **\DateTime** | The timestamp when the incident was created at. | [optional]
**impact** | **string** | The impact of the incident. | [optional]
**impact_override** | **string** | value to override calculated impact value | [optional]
**incident_updates** | [**\OpenAPI\Client\Model\IncidentUpdate[]**](IncidentUpdate.md) | The incident updates for incident. | [optional]
**metadata** | [**Object**](Object.md) | Metadata attached to the incident. Top level values must be objects. | [optional]
**monitoring_at** | **\DateTime** | The timestamp when incident entered monitoring state. | [optional]
**name** | **string** | Incident Name. There is a maximum limit of 255 characters. | [optional]
**page_id** | **string** | Incident Page Identifier | [optional]
**postmortem_body** | **string** | Body of the Postmortem. | [optional]
**postmortem_body_last_updated_at** | **\DateTime** | The timestamp when the incident postmortem body was last updated at. | [optional]
**postmortem_ignored** | **bool** | Controls whether the incident will have postmortem. | [optional]
**postmortem_notified_subscribers** | **bool** | Indicates whether subscribers are already notificed about postmortem. | [optional]
**postmortem_notified_twitter** | **bool** | Controls whether to decide if notify postmortem on twitter. | [optional]
**postmortem_published_at** | **bool** | The timestamp when the postmortem was published. | [optional]
**resolved_at** | **\DateTime** | The timestamp when incident was resolved. | [optional]
**scheduled_auto_completed** | **bool** | Controls whether the incident is scheduled to automatically change to complete. | [optional]
**scheduled_auto_in_progress** | **bool** | Controls whether the incident is scheduled to automatically change to in progress. | [optional]
**scheduled_for** | **\DateTime** | The timestamp the incident is scheduled for. | [optional]
**auto_transition_deliver_notifications_at_end** | **bool** | Controls whether send notification when scheduled maintenances auto transition to completed. | [optional]
**auto_transition_deliver_notifications_at_start** | **bool** | Controls whether send notification when scheduled maintenances auto transition to started. | [optional]
**auto_transition_to_maintenance_state** | **bool** | Controls whether change components status to under_maintenance once scheduled maintenance is in progress. | [optional]
**auto_transition_to_operational_state** | **bool** | Controls whether change components status to operational once scheduled maintenance completes. | [optional]
**scheduled_remind_prior** | **bool** | Controls whether to remind subscribers prior to scheduled incidents. | [optional]
**scheduled_reminded_at** | **\DateTime** | The timestamp when the scheduled incident reminder was sent at. | [optional]
**scheduled_until** | **\DateTime** | The timestamp the incident is scheduled until. | [optional]
**shortlink** | **string** | Incident Shortlink. | [optional]
**status** | **string** | The incident status. For realtime incidents, valid values are investigating, identified, monitoring, and resolved. For scheduled incidents, valid values are scheduled, in_progress, verifying, and completed. | [optional]
**updated_at** | **\DateTime** | The timestamp when the incident was updated at. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
