<?php

namespace Orukusaki\TwiML\Voice\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Pause
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/pause
 */
class Pause extends Node
{
    public function withLength($length)
    {
        $this->attributes['length'] = $length;

        return $this;
    }
}
