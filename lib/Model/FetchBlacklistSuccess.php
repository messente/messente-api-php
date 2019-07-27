<?php

namespace Messente\Api\Model;

class FetchBlacklistSuccess
{
    public $phoneNumbers;

    public function __construct($jsonData)
    {
        $result = json_decode($jsonData, true);
        $this->setPhoneNumbers($result['phoneNumbers']);

        return $this;
    }

    public function setPhoneNumbers(array $phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;

        return $this;
    }

    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}
