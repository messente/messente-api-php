<?php

namespace Messente\Api;

use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use Messente\Api\Model\FetchBlacklistSuccess;

class BlacklistApi
{
    const BLACKLIST = 'blacklist';

    public function __construct(Configuration $config, HttpClient $client = null, MessageFactory $messageFactory = null)
    {
        $this->config = $config;
        $this->client = $client ?: HttpClientDiscovery::find();
        $this->messageFactory = $messageFactory ?: MessageFactoryDiscovery::find();
    }

    public function fetchBlacklist(): FetchBlacklistSuccess
    {
        $uri = $this->config->getHost().Configuration::PHONEBOOK.'/'.self::BLACKLIST;
        $headers = array(Configuration::AUTH_HEADER_KEY => $this->config->getBasicAuthValue());
        $body = null;
        $request = $this->messageFactory->createRequest(
            'GET',
            $uri,
            $headers,
            $body,
            $this->config->getProtocolVersion()
        );

        $response = $this->client->sendRequest($request);
        $result = new FetchBlacklistSuccess($response->getBody()->getContents());

        return $result;
    }
}
