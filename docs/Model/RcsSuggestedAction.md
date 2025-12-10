# # RcsSuggestedAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**text** | **string** | The text of the suggested action. Exactly one of the action fields (types) must be provided. |
**postbackData** | **string** | The postback data associated with the suggested action. This is sent back to the sender when the user selects the suggested action. |
**fallbackUrl** | **string** | The fallback URL to open if the suggested action is not supported. | [optional]
**dialAction** | [**\Messente\Api\Model\RcsDialAction**](RcsDialAction.md) |  | [optional]
**viewLocationAction** | [**\Messente\Api\Model\RcsViewLocationAction**](RcsViewLocationAction.md) |  | [optional]
**createCalendarEventAction** | [**\Messente\Api\Model\RcsCreateCalendarEventAction**](RcsCreateCalendarEventAction.md) |  | [optional]
**openUrlAction** | [**\Messente\Api\Model\RcsOpenUrlAction**](RcsOpenUrlAction.md) |  | [optional]
**shareLocationAction** | **object** | This action does not have any properties. It simply triggers the share location action. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
