# # WhatsApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | Phone number or alphanumeric sender name | [optional]
**validity** | **int** | After how many minutes this channel is   considered as failed and the next channel is attempted | [optional]
**text** | [**\Messente\Api\Model\WhatsAppText**](WhatsAppText.md) |  | [optional]
**image** | [**\Messente\Api\Model\WhatsAppImage**](WhatsAppImage.md) |  | [optional]
**document** | [**\Messente\Api\Model\WhatsAppDocument**](WhatsAppDocument.md) |  | [optional]
**audio** | [**\Messente\Api\Model\WhatsAppAudio**](WhatsAppAudio.md) |  | [optional]
**channel** | **string** | The channel used to deliver the message | [optional] [default to 'whatsapp']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
