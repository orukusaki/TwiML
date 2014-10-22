<?php

namespace Orukusaki\TwiML\Voice\Noun;

use Orukusaki\TwiML\Node;

/**
 * Class Client
 * @package Orukusaki\TwiML\Noun
 * @see https://www.twilio.com/docs/api/twiml/client
 */
class Client extends Node
{
    /**
     * @param string $url
     *
     * @return Client
     */
    public function withUrl($url)
    {
        $this->attributes['url'] = $url;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Client
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }
}
