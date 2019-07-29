<?php

namespace Messente\Api\Model;

class Contact
{
    public function __construct(array $jsonData)
    {
        $this->setPhoneNumber($jsonData['phoneNumber'])
            ->setEmail($jsonData)
            ->setFirstName($jsonData)
            ->setLastName($jsonData)
            ->setCompany($jsonData)
            ->setTitle($jsonData)
            ->setCustom($jsonData)
            ->setCustom2($jsonData)
            ->setCustom3($jsonData)
            ->setCustom4($jsonData);

        return $this;
    }

    public function setPhoneNumber(string $phoneNumber): Contact
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setEmail(array $fields): Contact
    {
        $this->setIfExists('email', $fields);

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setFirstName(array $fields): Contact
    {
        $this->setIfExists('firstName', $fields);

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setLastName(array $fields): Contact
    {
        $this->setIfExists('lastName', $fields);

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setCompany(array $fields): Contact
    {
        $this->setIfExists('company', $fields);

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setTitle(array $fields): Contact
    {
        $this->setIfExists('title', $fields);

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setCustom(array $fields): Contact
    {
        $this->setIfExists('custom', $fields);

        return $this;
    }

    public function getCustom(): ?string
    {
        return $this->custom;
    }

    public function setCustom2(array $fields): Contact
    {
        $this->setIfExists('custom2', $fields);

        return $this;
    }

    public function getCustom2(): ?string
    {
        return $this->custom2;
    }

    public function setCustom3(array $fields): Contact
    {
        $this->setIfExists('custom3', $fields);

        return $this;
    }

    public function getCustom3(): ?string
    {
        return $this->custom3;
    }

    public function setCustom4(array $fields): Contact
    {
        $this->setIfExists('custom4', $fields);

        return $this;
    }

    public function getCustom4(): ?string
    {
        return $this->custom4;
    }

    public function setIfExists(string $variableName, array $fields): Contact
    {
        if (array_key_exists($variableName, $fields)) {
            $this->{$variableName} = $fields[$variableName];
        }

        return $this;
    }

    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}
