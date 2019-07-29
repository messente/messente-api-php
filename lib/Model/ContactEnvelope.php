<?php

namespace Messente\Api\Model;

class ContactEnvelope
{
    public $contact;

    public function __construct(string $jsonData)
    {
        $result = json_decode($jsonData, true);
        $contact = new Contact($result['contact']);
        $this->setContact($contact);

        return $this;
    }

    public function setContact(Contact $contact): ContactEnvelope
    {
        $this->contact = $contact;

        return $this;
    }

    public function getContact(): Contact
    {
        return $this->contact;
    }

    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}
