# # PostPagesPageIdSubscribersSubscriber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address for creating Email and Webhook subscribers. | [optional]
**endpoint** | **string** | The endpoint URI for creating Webhook subscribers. | [optional]
**phone_country** | **string** | The two-character country where the phone number is located to use for the new SMS subscriber. | [optional]
**phone_number** | **string** | The phone number (as you would dial from the phone_country) to use for the new SMS subscriber. | [optional]
**skip_confirmation_notification** | **bool** | If skip_confirmation_notification is true, the subscriber does not receive any notifications when their subscription changes.  Email subscribers will be automatically opted in. This option is only available for paid pages. This option has no effect for trial customers. | [optional]
**page_access_user** | **string** | The code of the page access user to which the subscriber belongs. | [optional]
**component_ids** | **string[]** | A list of component ids for which the subscriber should recieve updates for. Components must be an array with at least one element if it is passed at all. Each component must belong to the page indicated in the path. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
