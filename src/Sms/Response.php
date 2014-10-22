<?php

namespace Orukusaki\TwiML\Sms;

use Orukusaki\TwiML\Node;

/**
 * Class Response
 * @package Orukusaki\TwiML
 * https://www.twilio.com/docs/api/twiml/sms/your_response
 */
class Response extends Node
{
    /**
     * @param string $message
     *
     * @return Verb\Message
     */
    public function message($message)
    {
        return new Verb\Message($this, $message);
    }

    /**
     * @param string $url
     *
     * @return Verb\Redirect
     */
    public function redirect($url)
    {
        return new Verb\Redirect($this, $url);
    }
}
