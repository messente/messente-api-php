# # WhatsApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | Phone number or alphanumeric sender name | [optional]
**validity** | **int** | After how many minutes this channel is   considered as failed and the next channel is attempted | [optional]
**ttl** | **int** | After how many seconds this channel is considered as failed and the next channel is attempted.       Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**template** | [**\Messente\Api\Model\WhatsAppTemplate**](WhatsAppTemplate.md) |  | [optional]
**channel** | **string** | The channel used to deliver the message | [optional] [default to 'whatsapp']
**text** | [**\Messente\Api\Model\WhatsAppText**](WhatsAppText.md) |  | [optional]
**image** | [**\Messente\Api\Model\WhatsAppImage**](WhatsAppImage.md) |  | [optional]
**video** | [**\Messente\Api\Model\WhatsAppVideo**](WhatsAppVideo.md) |  | [optional]
**audio** | [**\Messente\Api\Model\WhatsAppAudio**](WhatsAppAudio.md) |  | [optional]
**document** | [**\Messente\Api\Model\WhatsAppDocument**](WhatsAppDocument.md) |  | [optional]
**sticker** | [**\Messente\Api\Model\WhatsAppSticker**](WhatsAppSticker.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
