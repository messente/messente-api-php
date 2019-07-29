<?php

namespace test\Messente\Api;

use PHPUnit\Framework\TestCase;
use Messente\Api\Configuration;
use Nyholm\Psr7\Factory\Psr17Factory;
use Buzz\Client\Curl;
use Messente\Api\ContactsApi;

require_once __DIR__.'/ResponseMock.php';

class ContactsApiTest extends TestCase
{
    const AUTH_HEADER_VALUE = 'Basic YW55X3VzZXJuYW1lOmFueV9wYXNzd29yZA==';

    protected function setUp(): void
    {
        $config = new Configuration('any_username', 'any_password');
        $this->factory = new Psr17Factory();
        $this->stub_client = $this->createMock(Curl::class, array('sendRequest'));
        $this->api = new ContactsApi($config, $this->stub_client, $this->factory, $this->factory);
    }

    public function testFetchContactReturnsContact(): void
    {
        // given
        $contactPhone = '+37251000000';
        $data = [
            'contact' => [
                'phoneNumber' => $contactPhone,
                'email' => 'anyone@messente.com',
                'firstName' => 'Any',
                'lastName' => 'One',
                'company' => 'Messente',
                'title' => 'Sir',
                'custom' => 'any custom value',
                'custom2' => null,
                'custom3' => null,
                'custom4' => null,
            ],
        ];
        $response = new ResponseMock(json_encode($data), 200);
        $uri = Configuration::HOST.'/'.Configuration::PHONEBOOK.'/'.$this->api::CONTACTS.'/'.$contactPhone;

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
        $result = $this->api->fetchContact($contactPhone);
        $resultContact = $result->getContact();

        // then
        $this->assertEquals($resultContact->getphoneNumber(), $contactPhone);
        $this->assertEquals($resultContact->getEmail(), $data['contact']['email']);
        $this->assertEquals($resultContact->getFirstName(), $data['contact']['firstName']);
        $this->assertEquals($resultContact->getLastName(), $data['contact']['lastName']);
        $this->assertEquals($resultContact->getCompany(), $data['contact']['company']);
        $this->assertEquals($resultContact->getTitle(), $data['contact']['title']);
        $this->assertEquals($resultContact->getCustom(), $data['contact']['custom']);
        $this->assertEquals($resultContact->getCustom2(), $data['contact']['custom2']);
        $this->assertEquals($resultContact->getCustom3(), $data['contact']['custom3']);
        $this->assertEquals($resultContact->getCustom4(), $data['contact']['custom4']);
    }

    public function testUpdateContactReturnsContact(): void
    {
        // given
        $contactPhone = '+37251000000';
        $updatedLastName = 'New-LastName';
        $updatedFields = ['lastName' => $updatedLastName];
        $data = [
            'contact' => [
                'phoneNumber' => $contactPhone,
                'email' => 'anyone@messente.com',
                'firstName' => 'Any',
                'lastName' => 'One',
                'company' => 'Messente',
                'title' => 'Sir',
                'custom' => 'any custom value',
                'custom2' => null,
                'custom3' => null,
                'custom4' => null,
            ],
        ];
        $response = new ResponseMock(json_encode($data), 200);
        $uri = Configuration::HOST.'/'.Configuration::PHONEBOOK.'/'.$this->api::CONTACTS.'/'.$contactPhone;

        // then
        $this->stub_client->expects($this->once())
            ->method('sendRequest')
            ->willReturn($response);

        // when
        $result = $this->api->updateContact($contactPhone, $updatedFields);
        $resultContact = $result->getContact();

        // then
        $this->assertEquals($resultContact->getphoneNumber(), $contactPhone);
        $this->assertEquals($resultContact->getEmail(), $data['contact']['email']);
        $this->assertEquals($resultContact->getFirstName(), $data['contact']['firstName']);
        $this->assertEquals($resultContact->getLastName(), $data['contact']['lastName']);
        $this->assertEquals($resultContact->getCompany(), $data['contact']['company']);
        $this->assertEquals($resultContact->getTitle(), $data['contact']['title']);
        $this->assertEquals($resultContact->getCustom(), $data['contact']['custom']);
        $this->assertEquals($resultContact->getCustom2(), $data['contact']['custom2']);
        $this->assertEquals($resultContact->getCustom3(), $data['contact']['custom3']);
        $this->assertEquals($resultContact->getCustom4(), $data['contact']['custom4']);
    }
}
