<?php

namespace test\Messente\Api;

use PHPUnit\Framework\TestCase;
use Messente\Api\Configuration;
use Messente\Api\BlacklistApi;
use Nyholm\Psr7\Factory\Psr17Factory;
use Buzz\Client\Curl;

require_once __DIR__.'/ResponseMock.php';

class BlacklistApiTest extends TestCase
{
    const AUTH_HEADER_VALUE = 'Basic YW55X3VzZXJuYW1lOmFueV9wYXNzd29yZA==';

    protected function setUp(): void
    {
        $config = new Configuration('any_username', 'any_password');
        $this->factory = new Psr17Factory();
        $this->stub_client = $this->createMock(Curl::class, array('sendRequest'));
        $this->api = new BlacklistApi($config, $this->stub_client, $this->factory);
    }

    public function testFetchBlacklistReturnsPhoneNumbers(): void
    {
        // given
        $data = ['phoneNumbers' => ['+37251000000', '+37251000001']];
        $response = new ResponseMock(json_encode($data), 200);
        $uri = Configuration::HOST.'/'.Configuration::PHONEBOOK.'/'.$this->api::BLACKLIST;

        // then
        $this->stub_client->expects($this->once())
            ->method('sendRequest')
            ->withConsecutive(
                [
                    $this->factory->createRequest('GET', $uri)
                    ->withHeader(Configuration::AUTH_HEADER_KEY, self::AUTH_HEADER_VALUE)
                    ->withProtocolVersion(Configuration::PROTOCOL_VERSION),
                ]
            )
            ->willReturn($response);

        // when
        $result = $this->api->fetchBlacklist();

        // then
        $this->assertEquals($result->getPhoneNumbers(), $data['phoneNumbers']);
    }
}
