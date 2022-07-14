# # Omnimessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** | Phone number in e.164 format | 
**messages** | [**OneOfViberSMSWhatsAppTelegram[]**](OneOfViberSMSWhatsAppTelegram.md) | An array of messages | 
**dlrUrl** | **string** | URL where the delivery report will be sent | [optional] 
**textStore** | [**\Messente\Api\Model\TextStore**](TextStore.md) |  | [optional] 
**timeToSend** | [**\DateTime**](\DateTime.md) | Optional parameter for sending messages at some specific time in the future.   Time must be specified in the ISO-8601 format.   If no timezone is specified, then the timezone is assumed to be UTC    Examples:    * Time specified with timezone: 2018-06-22T09:05:07+00:00 Time specified in UTC: 2018-06-22T09:05:07Z   * Time specified without timezone: 2018-06-22T09:05 (equivalent to 2018-06-22T09:05+00:00) | [optional] 
**priority** | [**\Messente\Api\Model\Priority**](Priority.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


