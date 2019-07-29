<?php

namespace Messente\Api;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Messente\Api\Model\ErrorPhonebook;
use Messente\Api\Model\ContactEnvelope;
use Psr\Http\Message\StreamFactoryInterface;

class ContactsApi
{
    const CONTACTS = 'contacts';

    public function __construct(
        Configuration $config,
        ClientInterface $client,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactoryInterface
        ) {
        $this->config = $config;
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->streamFactoryInterface = $streamFactoryInterface;
    }

    public function fetchContact(string $phoneNumber): ContactEnvelope
    {
        $uri = $this->config->getHost().'/'.Configuration::PHONEBOOK.'/'.self::CONTACTS.'/'.$phoneNumber;

        $request = $this->requestFactory->createRequest('GET', $uri)
            ->withHeader(Configuration::AUTH_HEADER_KEY, $this->config->getBasicAuthValue())
            ->withProtocolVersion(Configuration::PROTOCOL_VERSION);

        $response = $this->client->sendRequest($request);
        $responseStatusCode = $response->getStatusCode();

        if ($responseStatusCode == 200) {
            return new ContactEnvelope($response->getBody()->getContents());
        }

        throw new ErrorPhonebook($response->getBody()->getContents());
    }

    public function updateContact(string $phoneNumber, array $fields)
    {
        $uri = $this->config->getHost().'/'.Configuration::PHONEBOOK.'/'.self::CONTACTS.'/'.$phoneNumber;
        $request = $this->requestFactory->createRequest('PATCH', $uri)
            ->withHeader(Configuration::AUTH_HEADER_KEY, $this->config->getBasicAuthValue())
            ->withAddedHeader(Configuration::JSON_CONTENT_TYPE_KEY, Configuration::JSON_CONTENT_TYPE_VALUE)
            ->withProtocolVersion(Configuration::PROTOCOL_VERSION)
            ->withBody($this->requestFactory->createStream(json_encode($fields)));

        $response = $this->client->sendRequest($request);
        $responseStatusCode = $response->getStatusCode();

        if ($responseStatusCode == 200) {
            return new ContactEnvelope($response->getBody()->getContents());
        }

        throw new ErrorPhonebook($response->getBody()->getContents());
    }
}
