<?php

namespace Messente\Api;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Messente\Api\Model\ErrorPhonebook;
use Messente\Api\Model\FetchBlacklistSuccess;

class BlacklistApi
{
    const BLACKLIST = 'blacklist';

    public function __construct(Configuration $config, ClientInterface $client, RequestFactoryInterface $requestFactory)
    {
        $this->config = $config;
        $this->client = $client;
        $this->requestFactory = $requestFactory;
    }

    public function fetchBlacklist(): FetchBlacklistSuccess
    {
        $uri = $this->config->getHost().'/'.Configuration::PHONEBOOK.'/'.self::BLACKLIST;

        $request = $this->requestFactory->createRequest('GET', $uri)
            ->withHeader(Configuration::AUTH_HEADER_KEY, $this->config->getBasicAuthValue())
            ->withProtocolVersion(Configuration::PROTOCOL_VERSION);

        $response = $this->client->sendRequest($request);
        $responseStatusCode = $response->getStatusCode();

        if ($responseStatusCode == 200) {
            return new FetchBlacklistSuccess($response->getBody()->getContents());
        }

        throw new ErrorPhonebook($response->getBody()->getContents());
    }
}
