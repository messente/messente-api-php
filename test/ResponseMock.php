<?php

namespace test\Messente\Api;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

final class ResponseMock implements ResponseInterface
{
    public function __construct(string $contents, int $statusCode)
    {
        $this->statusCode = $statusCode;
        $this->contents = $contents;

        return $this;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getBody()
    {
        return $this;
    }

    public function getContents(): string
    {
        return $this->contents;
    }

    public function withStatus($code, $reasonPhrase = '')
    {
    }

    public function getReasonPhrase()
    {
    }

    public function getProtocolVersion()
    {
    }

    public function withProtocolVersion($version)
    {
    }

    public function hasHeader($name)
    {
    }

    public function getHeader($name)
    {
    }

    public function getHeaders()
    {
    }

    public function getHeaderLine($name)
    {
    }

    public function withHeader($name, $value)
    {
    }

    public function withAddedHeader($name, $value)
    {
    }

    public function withoutHeader($name)
    {
    }

    public function withBody(StreamInterface $body)
    {
    }
}
