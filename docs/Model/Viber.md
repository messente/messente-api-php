# # Viber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sender** | **string** | Phone number or alphanumeric sender name | [optional]
**validity** | **int** | After how many minutes this channel is considered as failed and the next channel is attempted.       Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**ttl** | **int** | After how many seconds this channel is considered as failed and the next channel is attempted.       Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**text** | **string** | Plaintext content for Viber | [optional]
**imageUrl** | **string** | URL for the embedded image. | [optional]
**buttonUrl** | **string** | URL of the button, must be specified along with &#39;&#39;text&#39;&#39;, &#39;&#39;button_text&#39;&#39; and &#39;&#39;image_url&#39;&#39; (optional) | [optional]
**buttonText** | **string** | Must be specified along with &#39;&#39;text&#39;&#39;, &#39;&#39;button_url&#39;&#39;, &#39;&#39;button_text&#39;&#39;, &#39;&#39;image_url&#39;&#39; (optional) | [optional]
**channel** | **string** | The channel used to deliver the message | [optional] [default to 'viber']
**video** | [**\Messente\Api\Model\ViberVideo**](ViberVideo.md) |  | [optional]
**template** | [**\Messente\Api\Model\ViberTemplate**](ViberTemplate.md) |  | [optional]
**carousel** | [**\Messente\Api\Model\ViberCarousel**](ViberCarousel.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
