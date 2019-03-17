# Messente API Library

- Messente API version: 0.0.1
- PHP artifact version: 0.0.1

[Messente](https://messente.com) is a global provider of messaging and user verification services. Use Messente API library to send and receive SMS, Viber and WhatsApp messages, blacklist phone numbers to make sure you&#39;re not sending any unwanted messages, manage contacts and groups.  Messente builds [tools](https://messente.com/documentation) to help organizations connect their services to people anywhere in the world.

## Installation

Install Messente API library with `TODO`.

## Features

Messente API has the following features:

- Omnichannel ([external docs](https://messente.com/omnichannel-api)),
- Phonebook ([external docs](https://messente.com/phonebook-api)).

Messente API Library provides the operations described below to access the features.

### BlacklistApi

1. Adds a phone number to the blacklist. [`addToBlacklist`](docs/ApiBlacklistApi.md#addtoblacklist)
1. Deletes a phone number from the blacklist. [`deleteFromBlacklist`](docs/ApiBlacklistApi.md#deletefromblacklist)
1. Returns all blacklisted phone numbers. [`fetchBlacklist`](docs/ApiBlacklistApi.md#fetchblacklist)
1. Checks if a phone number is blacklisted. [`isBlacklisted`](docs/ApiBlacklistApi.md#isblacklisted)

### ContactsApi

1. Adds a contact to a group. [`addContactToGroup`](docs/ApiContactsApi.md#addcontacttogroup)
1. Creates a new contact. [`createContact`](docs/ApiContactsApi.md#createcontact)
1. Deletes a contact. [`deleteContact`](docs/ApiContactsApi.md#deletecontact)
1. Lists a contact. [`fetchContact`](docs/ApiContactsApi.md#fetchcontact)
1. Lists groups of a contact. [`fetchContactGroups`](docs/ApiContactsApi.md#fetchcontactgroups)
1. Returns all contacts. [`fetchContacts`](docs/ApiContactsApi.md#fetchcontacts)
1. Removes a contact from a group. [`removeContactFromGroup`](docs/ApiContactsApi.md#removecontactfromgroup)
1. Updates a contact. [`updateContact`](docs/ApiContactsApi.md#updatecontact)

### DeliveryReportApi

1. Retrieves the delivery report for the Omnimessage. [`retrieveDeliveryReport`](docs/ApiDeliveryReportApi.md#retrievedeliveryreport)

### GroupsApi

1. Creates a new group with the provided name. [`createGroup`](docs/ApiGroupsApi.md#creategroup)
1. Deletes a group. [`deleteGroup`](docs/ApiGroupsApi.md#deletegroup)
1. Lists a group. [`fetchGroup`](docs/ApiGroupsApi.md#fetchgroup)
1. Returns all groups. [`fetchGroups`](docs/ApiGroupsApi.md#fetchgroups)
1. Updates a group with the provided name. [`updateGroup`](docs/ApiGroupsApi.md#updategroup)

### OmnimessageApi

1. Cancels a scheduled Omnimessage. [`cancelScheduledMessage`](docs/ApiOmnimessageApi.md#cancelscheduledmessage)
1. Sends an Omnimessage. [`sendOmnimessage`](docs/ApiOmnimessageApi.md#sendomnimessage)

## Auth

**Type**: HTTP basic authentication

Read the [external getting-started article](https://messente.com/documentation/getting-started) which explains API keys and Sender ID logic.

## Getting started: sending an omnimessage

```php
<?php
$txt = "Hello!";
echo "$txt!";
?>
# TODO

```

## License

[Apache 2.0](http://www.apache.org/licenses/LICENSE-2.0.html)

## Terms

[https://messente.com/terms-and-conditions](https://messente.com/terms-and-conditions)
