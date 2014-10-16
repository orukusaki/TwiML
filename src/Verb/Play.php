<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Play
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/play
 */
class Play extends Node
{
    /**
     * @param string $loop
     *
     * @return Play
     */
    public function withLoop($loop)
    {
        $this->attributes['loop'] = $loop;

        return $this;
    }

    /**
     * @param string $digits
     *
     * @return Play
     */
    public function withDigits($digits)
    {
        $this->attributes['digits'] = $digits;

        return $this;
    }
}
