<?php

namespace Orukusaki\TwiML\Voice\Noun;

use Orukusaki\TwiML\Node;

/**
 * Class Conference
 * @package Orukusaki\TwiML\Noun
 * @see https://www.twilio.com/docs/api/twiml/conference
 */
class Conference extends Node
{
    /**
     * @param string $muted
     *
     * @return Conference
     */
    public function withMuted($muted)
    {
        $this->attributes['muted'] = $muted;

        return $this;
    }

    /**
     * @param string $beep
     *
     * @return Conference
     */
    public function withBeep($beep)
    {
        $this->attributes['beep'] = $beep;

        return $this;
    }

    /**
     * @param string $startConferenceOnEnter
     *
     * @return Conference
     */
    public function withStartConferenceOnEnter($startConferenceOnEnter)
    {
        $this->attributes['startConferenceOnEnter'] = $startConferenceOnEnter;

        return $this;
    }

    /**
     * @param string $endConferenceOnExit
     *
     * @return Conference
     */
    public function withEndConferenceOnExit($endConferenceOnExit)
    {
        $this->attributes['endConferenceOnExit'] = $endConferenceOnExit;

        return $this;
    }

    /**
     * @param string $waitUrl
     *
     * @return Conference
     */
    public function withWaitUrl($waitUrl)
    {
        $this->attributes['waitUrl'] = $waitUrl;

        return $this;
    }

    /**
     * @param string $waitMethod
     *
     * @return Conference
     */
    public function withWaitMethod($waitMethod)
    {
        $this->attributes['waitMethod'] = $waitMethod;

        return $this;
    }

    /**
     * @param string $maxParticipants
     *
     * @return Conference
     */
    public function withMaxParticipants($maxParticipants)
    {
        $this->attributes['maxParticipants'] = $maxParticipants;

        return $this;
    }

    /**
     * @param string $record
     *
     * @return Conference
     */
    public function withRecord($record)
    {
        $this->attributes['record'] = $record;

        return $this;
    }

    /**
     * @param string $trim
     *
     * @return Conference
     */
    public function withTrim($trim)
    {
        $this->attributes['trim'] = $trim;

        return $this;
    }

    /**
     * @param string $eventCallbackUrl
     *
     * @return Conference
     */
    public function withEventCallbackUrl($eventCallbackUrl)
    {
        $this->attributes['eventCallbackUrl'] = $eventCallbackUrl;

        return $this;
    }
}
