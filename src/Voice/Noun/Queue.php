<?php

namespace Orukusaki\TwiML\Voice\Noun;

use Orukusaki\TwiML\Node;

/**
 * Class Queue
 * @package Orukusaki\TwiML\Noun
 * @see https://www.twilio.com/docs/api/twiml/queue
 */
class Queue extends Node
{
    /**
     * @param string $url
     *
     * @return Queue
     */
    public function withUrl($url)
    {
        $this->attributes['url'] = $url;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Queue
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }
}
