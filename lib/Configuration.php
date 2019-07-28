<?php

namespace Messente\Api;

class Configuration
{
    const PHONEBOOK = 'phonebook';
    const HOST = 'https://api.messente.com/v1';
    const AUTH_HEADER_KEY = 'Authorization';
    const PROTOCOL_VERSION = '1.1';

    protected $host;
    protected $username;
    protected $password;

    public function __construct(string $username, string $password = null, string $host = self::HOST)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function setHost(string $host)
    {
        $this->host = $host;

        return $host;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    public function getBasicAuthValue()
    {
        return 'Basic '.base64_encode($this->username.':'.$this->password);
    }
}
