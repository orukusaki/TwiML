<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Enqueue
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/enqueue
 */
class Enqueue extends Node
{
    /**
     * @param string $action
     *
     * @return Enqueue
     */
    public function withAction($action)
    {
        $this->attributes['action'] = $action;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Enqueue
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $waitUrl
     *
     * @return Enqueue
     */
    public function withWaitUrl($waitUrl)
    {
        $this->attributes['waitUrl'] = $waitUrl;

        return $this;
    }

    /**
     * @param string $waitUrlMethod
     *
     * @return Enqueue
     */
    public function withWaitUrlMethod($waitUrlMethod)
    {
        $this->attributes['waitUrlMethod'] = $waitUrlMethod;

        return $this;
    }
}
