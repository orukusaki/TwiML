<?php

namespace Orukusaki\TwiML\Sms\Verb;

use Orukusaki\TwiML\Sms\Noun;
use Orukusaki\TwiML\Node;

/**
 * Class Sms
 * @package Orukusaki\TwiML\Sms\Verb
 * @see https://www.twilio.com/docs/api/twiml/sms/message
 */
class Message extends Node
{
    /**
     * @param string $text
     *
     * @return Noun\Body
     */
    public function withBody($text)
    {
        return new Noun\Body($this, $text);
    }

    /**
     * @param string $url
     *
     * @return Noun\Media
     */
    public function withMedia($url)
    {
        return new Noun\Media($this, $url);
    }

    /**
     * @param string $to
     *
     * @return Message
     */
    public function withTo($to)
    {
        $this->attributes['to'] = $to;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return Message
     */
    public function withFrom($from)
    {
        $this->attributes['from'] = $from;

        return $this;
    }

    /**
     * @param string $action
     *
     * @return Message
     */
    public function withAction($action)
    {
        $this->attributes['action'] = $action;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Message
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $statusCallback
     *
     * @return Message
     */
    public function withStatusCallback($statusCallback)
    {
        $this->attributes['statusCallback'] = $statusCallback;

        return $this;
    }
}
