# # RcsViewLocationAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**latLong** | [**\Messente\Api\Model\RcsLatLng**](RcsLatLng.md) |  | [optional]
**label** | **string** | The label of the pin dropped at latLong. | [optional]
**query** | **string** | (Optional, only supported on Android Messages clients) Instead of specifying a latLong (and optionally, a label), the agent can specify a query string. For default map apps that support search functionality (including Google Maps), tapping this suggested action results in a location search centered around the user&#39;s current location.              For instance, setting the query string to \&quot;Growing Tree Bank\&quot; will show all Growing Tree Bank locations in the user&#39;s vicinity. Setting the query string to \&quot;1600 Amphitheater Parkway, Mountain View, CA 94043\&quot; will select that specific address, regardless of the user&#39;s location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
