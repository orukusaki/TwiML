<?php

namespace Orukusaki\TwiML\Voice;

use Orukusaki\TwiML\Node;

/**
 * Class Response
 * @package Orukusaki\TwiML
 * @see https://www.twilio.com/docs/api/twiml/your_response
 */
class Response extends Node
{
    /**
     * @param $number
     *
     * @return Verb\Dial
     */
    public function dial($number)
    {
        return new Verb\Dial($this, $number);
    }

    /**
     * @param string $message
     *
     * @return Verb\Say
     */
    public function say($message)
    {
        return new Verb\Say($this, $message);
    }

    /**
     * @param string $url
     *
     * @return Verb\Play
     */
    public function play($url)
    {
        return new Verb\Play($this, $url);
    }

    /**
     * @return Verb\Gather
     */
    public function gather()
    {
        return new Verb\Gather($this);
    }

    /**
     * @return Verb\Record
     */
    public function record()
    {
        return new Verb\Record($this);
    }

    /**
     * @param string $message
     *
     * @return Verb\Sms
     */
    public function sms($message)
    {
        return new Verb\Sms($this, $message);
    }

    /**
     * @param string $name
     *
     * @return Verb\Enqueue
     */
    public function enqueue($name)
    {
        return new Verb\Enqueue($this, $name);
    }

    /**
     * @return Verb\Leave
     */
    public function leave()
    {
        return new Verb\Leave($this);
    }

    /**
     * @return Verb\Hangup
     */
    public function hangup()
    {
        return new Verb\Hangup($this);
    }

    /**
     * @return Verb\Hangup
     */
    public function reject()
    {
        return new Verb\Reject($this);
    }

    /**
     * @param string $url
     *
     * @return Verb\Hangup
     */
    public function redirect($url)
    {
        return new Verb\Redirect($this, $url);
    }

    /**
     * @param $length
     *
     * @return Verb\Pause
     */
    public function pause($length)
    {
        return (new Verb\Pause($this))->withLength($length);
    }
}
