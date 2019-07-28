<?php

namespace Messente\Api\Model;

use Exception;

class ErrorPhonebook extends Exception
{
    public $errors;

    public function __construct($jsonData)
    {
        $result = json_decode($jsonData, true);
        $this->setErrors($result['errors']);

        return $this;
    }

    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }
}
