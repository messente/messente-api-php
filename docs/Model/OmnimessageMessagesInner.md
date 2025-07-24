# # OmnimessageMessagesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | Phone number or alphanumeric sender name | [optional]
**validity** | **int** | After how many minutes this channel is considered as failed and the next channel is attempted | [optional]
**ttl** | **int** | After how many seconds this channel is considered as failed and the next channel is attempted.       Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**text** | **string** | Plaintext content for Telegram |
**imageUrl** | **string** | URL for the embedded image. Mutually exclusive with \&quot;document_url\&quot; and \&quot;audio_url\&quot; | [optional]
**buttonUrl** | **string** | URL of the button, must be specified along with &#39;&#39;text&#39;&#39;, &#39;&#39;button_text&#39;&#39; and &#39;&#39;image_url&#39;&#39; (optional) | [optional]
**buttonText** | **string** | Must be specified along with &#39;&#39;text&#39;&#39;, &#39;&#39;button_url&#39;&#39;, &#39;&#39;button_text&#39;&#39;, &#39;&#39;image_url&#39;&#39; (optional) | [optional]
**channel** | **string** | The channel used to deliver the message | [optional] [default to 'telegram']
**video** | [**\Messente\Api\Model\WhatsAppVideo**](WhatsAppVideo.md) |  | [optional]
**autoconvert** | **string** | Defines how non-GSM characters will be treated:    - \&quot;on\&quot; Use replacement settings from the account&#39;s [API Auto Replace settings page](https://dashboard.messente.com/api-settings/auto-replace) (default)   - \&quot;full\&quot; All non GSM 03.38 characters will be replaced with suitable alternatives   - \&quot;off\&quot; Message content is not modified in any way | [optional]
**udh** | **string** | hex-encoded string containing SMS UDH | [optional]
**template** | [**\Messente\Api\Model\WhatsAppTemplate**](WhatsAppTemplate.md) |  | [optional]
**image** | [**\Messente\Api\Model\WhatsAppImage**](WhatsAppImage.md) |  | [optional]
**audio** | [**\Messente\Api\Model\WhatsAppAudio**](WhatsAppAudio.md) |  | [optional]
**document** | [**\Messente\Api\Model\WhatsAppDocument**](WhatsAppDocument.md) |  | [optional]
**sticker** | [**\Messente\Api\Model\WhatsAppSticker**](WhatsAppSticker.md) |  | [optional]
**documentUrl** | **string** | URL for the embedded image. Mutually exclusive with \&quot;audio_url\&quot; and \&quot;image_url\&quot; | [optional]
**audioUrl** | **string** | URL for the embedded image. Mutually exclusive with \&quot;document_url\&quot; and \&quot;image_url\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
