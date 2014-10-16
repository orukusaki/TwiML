<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Say
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/say
 */
class Say extends Node
{
    /**
     * @param string $voice
     *
     * @return Say
     */
    public function withVoice($voice)
    {
        $this->attributes['voice'] = $voice;

        return $this;
    }

    /**
     * @param string $loop
     *
     * @return Say
     */
    public function withLoop($loop)
    {
        $this->attributes['loop'] = $loop;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return Say
     */
    public function withLanguage($language)
    {
        $this->attributes['language'] = $language;

        return $this;
    }
}
