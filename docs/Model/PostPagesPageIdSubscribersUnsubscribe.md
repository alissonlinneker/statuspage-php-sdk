# # PostPagesPageIdSubscribersUnsubscribe

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subscribers** | **string** | The array of subscriber codes to unsubscribe (limited to 100), or \&quot;all\&quot; to unsubscribe all subscribers if the number of subscribers is less than 100. |
**type** | **string** | If this is present, only unsubscribe subscribers of this type. | [optional]
**state** | **string** | If this is present, only unsubscribe subscribers in this state. Specify state \&quot;all\&quot; to unsubscribe subscribers in any states. | [optional] [default to 'active']
**skip_unsubscription_notification** | **bool** | If skip_unsubscription_notification is true, the subscribers do not receive any notifications when they are unsubscribed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
