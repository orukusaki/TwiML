<?php

namespace Orukusaki\TwiML;

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
}
