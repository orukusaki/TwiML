<?php

namespace spec\Orukusaki\TwiML;

use Orukusaki\TwiML\Response;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin Response
 */
class ResponseSpec extends ObjectBehavior
{
    function it_is_a_twiml_node()
    {
        $this->shouldHaveType('Orukusaki\\TwiML\\Node');
    }

    function it_renders_to_xml()
    {
        $this->__toString()->shouldReturn("<?xml version=\"1.0\"?>\n<Response/>\n");
    }

    function it_adds_say_response()
    {
        $this->say('my message')->shouldReturnAnInstanceOf('Orukusaki\\TwiML\\Verb\\Say');
        $this->__toString()->shouldReturn("<?xml version=\"1.0\"?>\n<Response><Say>my message</Say></Response>\n");
    }

    function it_adds_dial_response()
    {
        $this->dial('+447769000000')->shouldReturnAnInstanceOf('Orukusaki\\TwiML\\Verb\\Dial');
        $this->__toString()->shouldReturn("<?xml version=\"1.0\"?>\n<Response><Dial>+447769000000</Dial></Response>\n");
    }

    function it_adds_play_response()
    {
        $this->play('http://www.example.com/message.mp3')->shouldReturnAnInstanceOf('Orukusaki\\TwiML\\Verb\\Play');
        $this->__toString()->shouldReturn("<?xml version=\"1.0\"?>\n<Response><Play>http://www.example.com/message.mp3</Play></Response>\n");
    }

    function it_adds_gather_response()
    {
        $this->gather()->shouldReturnAnInstanceOf('Orukusaki\\TwiML\\Verb\\Gather');
        $this->__toString()->shouldReturn("<?xml version=\"1.0\"?>\n<Response><Gather/></Response>\n");
    }

    function it_adds_sms_response()
    {
        $this->sms('text message')->shouldReturnAnInstanceOf('Orukusaki\\TwiML\\Verb\\Sms');
        $this->__toString()->shouldReturn("<?xml version=\"1.0\"?>\n<Response><Sms>text message</Sms></Response>\n");
    }
}
