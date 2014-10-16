<?php

namespace Orukusaki\TwiML\Noun;

use Orukusaki\TwiML\Node;

/**
 * Class Number
 * @package Orukusaki\TwiML\Noun
 * @see https://www.twilio.com/docs/api/twiml/number
 */
class Number extends Node
{
    /**
     * @param string $sendDigits
     *
     * @return Number
     */
    public function withSendDigits($sendDigits)
    {
        $this->attributes['sendDigits'] = $sendDigits;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return Number
     */
    public function withUrl($url)
    {
        $this->attributes['url'] = $url;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Number
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }
}
