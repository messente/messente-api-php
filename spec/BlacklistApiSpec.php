<?php

namespace spec\Messente\Api;

use Messente\Api\BlacklistApi;
use PhpSpec\ObjectBehavior;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Messente\Api\Configuration;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class BlacklistApiSpec extends ObjectBehavior
{
    public function let(HttpClient $client, MessageFactory $messageFactory)
    {
        $username = 'any_username';
        $password = 'any_password';
        $config = new Configuration($username, $password);

        $this->beConstructedWith($config, $client, $messageFactory);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(BlacklistApi::class);
    }

    public function it_does_fetch_blacklist(
        HttpClient $client, MessageFactory $messageFactory,
        RequestInterface $request, ResponseInterface $response, StreamInterface $stream
        ) {
        // given
        $data = ['phoneNumbers' => ['+37251000000', '+37251000001']];
        $uri = Configuration::HOST.Configuration::PHONEBOOK.'/'.BlacklistApi::BLACKLIST;
        $headers = ['Authorization' => 'Basic YW55X3VzZXJuYW1lOmFueV9wYXNzd29yZA=='];
        $messageFactory->createRequest('GET', $uri, $headers, null, '1.1')->willReturn($request);
        $client->sendRequest($request)->willReturn($response);
        $response->getStatusCode()->willReturn(200);
        $response->getBody()->willReturn($stream);
        $stream->getContents()->willReturn(json_encode($data));

        // when
        $result = $this->fetchBlacklist();
        $phoneNumbers = $result->getPhoneNumbers();

        // then
        $phoneNumbers->shouldEqual($data['phoneNumbers']);
    }
}
