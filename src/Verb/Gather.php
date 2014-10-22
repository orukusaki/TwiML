<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Gather
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/gather
 */
class Gather extends Node
{
    /**
     * @param $url
     *
     * @return Play
     */
    public function play($url)
    {
        return new Play($this, $url);
    }

    /**
     * @param $message
     *
     * @return Say
     */
    public function say($message)
    {
        return new Say($this, $message);
    }

    /**
     * @param $length
     *
     * @return Pause
     */
    public function pause($length)
    {
        return (new Pause($this))->withLength($length);
    }

    /**
     * @param string $action
     *
     * @return Gather
     */
    public function withAction($action)
    {
        $this->attributes['action'] = $action;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Gather
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $timeout
     *
     * @return Gather
     */
    public function withTimeout($timeout)
    {
        $this->attributes['timeout'] = $timeout;

        return $this;
    }

    /**
     * @param string $finishOnKey
     *
     * @return Gather
     */
    public function withFinishOnKey($finishOnKey)
    {
        $this->attributes['finishOnKey'] = $finishOnKey;

        return $this;
    }

    /**
     * @param string $numDigits
     *
     * @return Gather
     */
    public function withNumDigits($numDigits)
    {
        $this->attributes['numDigits'] = $numDigits;

        return $this;
    }
}
