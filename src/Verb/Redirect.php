<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Redirect
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/redirect
 */
class Redirect extends Node
{
    /**
     * @param string $method
     *
     * @return Redirect
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }
}
