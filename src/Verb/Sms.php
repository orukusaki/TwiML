<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Sms
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/sms
 */
class Sms extends Node
{
    /**
     * @param string $to
     *
     * @return Sms
     */
    public function withTo($to)
    {
        $this->attributes['to'] = $to;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return Sms
     */
    public function withFrom($from)
    {
        $this->attributes['from'] = $from;

        return $this;
    }

    /**
     * @param string $action
     *
     * @return Sms
     */
    public function withAction($action)
    {
        $this->attributes['action'] = $action;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Sms
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $statusCallback
     *
     * @return Sms
     */
    public function withStatusCallback($statusCallback)
    {
        $this->attributes['statusCallback'] = $statusCallback;

        return $this;
    }
}
