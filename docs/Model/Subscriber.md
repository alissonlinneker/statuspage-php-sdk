# # Subscriber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Subscriber Identifier | [optional]
**skip_confirmation_notification** | **bool** | If this is true, do not notify the user with changes to their subscription. | [optional]
**mode** | **string** | The communication mode of the subscriber. | [optional]
**email** | **string** | The email address to use to contact the subscriber. Used for Email and Webhook subscribers. | [optional]
**endpoint** | **string** | The URL where a webhook subscriber elects to receive updates. | [optional]
**phone_number** | **string** | The phone number used to contact an SMS subscriber | [optional]
**phone_country** | **string** | The two-character country code representing the country of which the phone_number is a part. | [optional]
**display_phone_number** | **string** | A formatted version of the phone_number and phone_country pair, nicely formatted for display. | [optional]
**obfuscated_channel_name** | **string** | Obfuscated slack channel name | [optional]
**workspace_name** | **string** | The workspace name of the slack subscriber. | [optional]
**quarantined_at** | **\DateTime** | The timestamp when the subscriber was quarantined due to an issue reaching them. | [optional]
**purge_at** | **\DateTime** | The timestamp when a quarantined subscriber will be purged (unsubscribed). | [optional]
**components** | **string** | The components for which the subscriber has elected to receive updates. | [optional]
**page_access_user_id** | **string** | The Page Access user this subscriber belongs to (only for audience-specific pages). | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
