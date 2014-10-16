<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Noun;
use Orukusaki\TwiML\Node;

/**
 * Class Dial
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/dial
 */
class Dial extends Node
{
    /**
     * @param $number
     *
     * @return Noun\Number
     */
    public function withNumber($number)
    {
        return new Noun\Number($this, $number);
    }

    /**
     * @param string $timeout
     *
     * @return Dial
     */
    public function withTimeout($timeout)
    {
        $this->attributes['timeout'] = $timeout;

        return $this;
    }

    /**
     * @param string $timeLimit
     *
     * @return Dial
     */
    public function withTimeLimit($timeLimit)
    {
        $this->attributes['timeLimit'] = $timeLimit;

        return $this;
    }

    /**
     * @param string $trim
     *
     * @return Dial
     */
    public function withTrim($trim)
    {
        $this->attributes['trim'] = $trim;

        return $this;
    }

    /**
     * @param string $record
     *
     * @return Dial
     */
    public function withRecord($record)
    {
        $this->attributes['record'] = $record;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Dial
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $hangupOnStar
     *
     * @return Dial
     */
    public function withHangupOnStar($hangupOnStar)
    {
        $this->attributes['hangupOnStar'] = $hangupOnStar;

        return $this;
    }

    /**
     * @param string $callerId
     *
     * @return Dial
     */
    public function withCallerId($callerId)
    {
        $this->attributes['callerId'] = $callerId;

        return $this;
    }

    /**
     * @param string $action
     *
     * @return Dial
     */
    public function withAction($action)
    {
        $this->attributes['action'] = $action;

        return $this;
    }
}
