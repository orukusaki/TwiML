<?php

namespace Orukusaki\TwiML\Noun;

use Orukusaki\TwiML\Node;

/**
 * Class Sip
 * @package Orukusaki\TwiML\Noun
 * @see https://www.twilio.com/docs/api/twiml/sip
 */

class Sip extends Node
{
    /**
     * @param string $username
     *
     * @return Sip
     */
    public function withUsername($username)
    {
        $this->attributes['username'] = $username;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return Sip
     */
    public function withPassword($password)
    {
        $this->attributes['password'] = $password;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Sip
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return Sip
     */
    public function withUrl($url)
    {
        $this->attributes['url'] = $url;

        return $this;
    }
}
