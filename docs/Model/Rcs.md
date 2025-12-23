# # Rcs

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | The channel used to deliver the message | [optional] [default to 'rcs']
**sender** | **string** | Phone number or alphanumeric sender name |
**validity** | **int** | After how many minutes this channel is considered as failed and the next channel is attempted.Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**ttl** | **int** | After how many seconds this channel is considered as failed and the next channel is attempted. Only one of \&quot;ttl\&quot; and \&quot;validity\&quot; can be used. | [optional]
**text** | **string** | Text content of the RCS message | [optional]
**suggestions** | [**\Messente\Api\Model\RcsSuggestion[]**](RcsSuggestion.md) | List of suggestions to include with the message | [optional]
**richCard** | [**\Messente\Api\Model\RcsRichCard**](RcsRichCard.md) |  | [optional]
**contentInfo** | [**\Messente\Api\Model\RcsContentInfo**](RcsContentInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
