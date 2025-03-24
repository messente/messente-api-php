# # DeliveryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\Messente\Api\Model\Status**](Status.md) |  | [optional]
**channel** | [**\Messente\Api\Model\Channel**](Channel.md) |  | [optional]
**messageId** | **string** | Unique identifier for the message | [optional]
**error** | **string** | Human-readable description of what went wrong, *null* in case of success or if the message has not been processed yet | [optional]
**err** | [**\Messente\Api\Model\ErrorCodeOmnichannelMachine**](ErrorCodeOmnichannelMachine.md) |  | [optional]
**timestamp** | **\DateTime** | When this status was received by Omnichannel API | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
