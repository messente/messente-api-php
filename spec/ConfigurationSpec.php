<?php

namespace spec\Messente\Api;

use PhpSpec\ObjectBehavior;

class ConfigurationSpec extends ObjectBehavior
{
    public function it_should_have_default_host()
    {
        // given
        $username = 'any_username';
        $password = 'any_password';

        // when
        $this->beConstructedWith($username, $password);

        // then
        $this->getHost()->shouldReturn('https://api.messente.com/v1');
    }
}
