# # WhatsApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | Phone number or alphanumeric sender name | [optional]
**validity** | **int** | After how many minutes this channel is   considered as failed and the next channel is attempted | [optional]
**ttl** | **int** | After how many seconds this channel is considered as failed and the next channel is attempted.       Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**template** | [**\Messente\Api\Model\WhatsAppTemplate**](WhatsAppTemplate.md) |  | [optional]
**text** | [**\Messente\Api\Model\WhatsAppText**](WhatsAppText.md) |  | [optional]
**channel** | **string** | The channel used to deliver the message | [optional] [default to 'whatsapp']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
