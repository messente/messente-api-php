# Messente API Library

- Messente API version: 1.0.2
- PHP artifact version: 1.0.4

[Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber and WhatsApp messages, blacklist phone numbers to make sure you&#39;re not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.

## Installation

Install Messente API library with `composer require messente/messente-api-php`.

## Features

Messente API has the following features:

- Omnichannel ([external docs](https://messente.com/documentation/omnichannel-api)),
- Phonebook ([external docs](https://messente.com/documentation/phonebook-api)).

Messente API Library provides the operations described below to access the features.

### BlacklistApi

1. Adds a phone number to the blacklist [`addToBlacklist`](docs/Api/BlacklistApi.md#addtoblacklist)
1. Deletes a phone number from the blacklist [`deleteFromBlacklist`](docs/Api/BlacklistApi.md#deletefromblacklist)
1. Returns all blacklisted phone numbers [`fetchBlacklist`](docs/Api/BlacklistApi.md#fetchblacklist)
1. Checks if a phone number is blacklisted [`isBlacklisted`](docs/Api/BlacklistApi.md#isblacklisted)

### ContactsApi

1. Adds a contact to a group [`addContactToGroup`](docs/Api/ContactsApi.md#addcontacttogroup)
1. Creates a new contact [`createContact`](docs/Api/ContactsApi.md#createcontact)
1. Deletes a contact [`deleteContact`](docs/Api/ContactsApi.md#deletecontact)
1. Lists a contact [`fetchContact`](docs/Api/ContactsApi.md#fetchcontact)
1. Lists groups of a contact [`fetchContactGroups`](docs/Api/ContactsApi.md#fetchcontactgroups)
1. Returns all contacts [`fetchContacts`](docs/Api/ContactsApi.md#fetchcontacts)
1. Removes a contact from a group [`removeContactFromGroup`](docs/Api/ContactsApi.md#removecontactfromgroup)
1. Updates a contact [`updateContact`](docs/Api/ContactsApi.md#updatecontact)

### DeliveryReportApi

1. Retrieves the delivery report for the Omnimessage [`retrieveDeliveryReport`](docs/Api/DeliveryReportApi.md#retrievedeliveryreport)

### GroupsApi

1. Creates a new group with the provided name [`createGroup`](docs/Api/GroupsApi.md#creategroup)
1. Deletes a group [`deleteGroup`](docs/Api/GroupsApi.md#deletegroup)
1. Lists a group [`fetchGroup`](docs/Api/GroupsApi.md#fetchgroup)
1. Returns all groups [`fetchGroups`](docs/Api/GroupsApi.md#fetchgroups)
1. Updates a group with the provided name [`updateGroup`](docs/Api/GroupsApi.md#updategroup)

### OmnimessageApi

1. Cancels a scheduled Omnimessage [`cancelScheduledMessage`](docs/Api/OmnimessageApi.md#cancelscheduledmessage)
1. Sends an Omnimessage [`sendOmnimessage`](docs/Api/OmnimessageApi.md#sendomnimessage)

## Auth

**Type**: HTTP basic authentication

Read the [external getting-started article](https://messente.com/documentation/getting-started) which explains API keys and Sender ID logic.

## Getting started: sending an omnimessage

```php
<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use \Messente\Api\Api\OmnimessageApi;
use \Messente\Api\Configuration;
use \Messente\Api\Model\Omnimessage;
use \Messente\Api\Model\Viber;
use \Messente\Api\Model\SMS;
use \Messente\Api\Model\WhatsApp;
use \Messente\Api\Model\WhatsAppText;


// Configure HTTP basic authorization: basicAuth
$config = Configuration::getDefaultConfiguration()
    ->setUsername('<MESSENTE_API_USERNAME>')
    ->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new OmnimessageApi(
    new GuzzleHttp\Client(),
    $config
);

$omnimessage = new Omnimessage([
    "to" => "<phone number in e.164 format>"
]);

$viber = new Viber(
    ["text" => "Hello Viber!", "sender" => "MyViberSender"]
);

$sms = new SMS(
    ["text" => "Hello SMS!", "sender" => "MySmsSender"]
);


$whatsAppText = new WhatsAppText(["body" => "Hello WhatsApp!"]);

$whatsapp = new WhatsApp(
    ['text' => $whatsAppText, "sender" => "MyWhatsAppSender"]
);

$omnimessage->setMessages([$whatsapp, $viber, $sms]);


try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}
?>

```

## License

[Apache-2.0](http://www.apache.org/licenses/LICENSE-2.0.html)

## Terms

[https://messente.com/terms-and-conditions](https://messente.com/terms-and-conditions)
