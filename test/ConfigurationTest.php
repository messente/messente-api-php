<?php

namespace test\Messente\Api;

use PHPUnit\Framework\TestCase;
use Messente\Api\Configuration;
use Messente\Api\BlacklistApi;
use Nyholm\Psr7\Factory\Psr17Factory;
use Buzz\Client\Curl;

require_once __DIR__.'/ResponseMock.php';

class ConfigurationTest extends TestCase
{
    protected function setUp(): void
    {
        $config = new Configuration('any_username', 'any_password');
        $factory = new Psr17Factory();
        $this->stub_client = $this->createMock(Curl::class, array('sendRequest'));
        $this->api = new BlacklistApi($config, $this->stub_client, $factory);
    }

    public function testItUsesDefaultHostIfHostNotProvided(): void
    {
        // given
        $config = new Configuration('any_username', 'any_password');

        // when
        $result = $config->getHost();

        // then
        $this->assertEquals($result, Configuration::HOST);
    }

    public function testItUsesHostIfHostProvided(): void
    {
        // given
        $host = 'any_host';
        $config = new Configuration('any_username', 'any_password', $host);

        // when
        $result = $config->getHost();

        // then
        $this->assertEquals($result, $host);
    }

    public function testItCalculatesBasicAuthBasedOnCredentials(): void
    {
        // given
        $config = new Configuration('any_username', 'any_password');

        // when
        $result = $config->getBasicAuthValue();

        // then
        $this->assertEquals($result, 'Basic YW55X3VzZXJuYW1lOmFueV9wYXNzd29yZA==');
    }
}
