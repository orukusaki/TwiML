<?php

namespace Orukusaki\TwiML\Verb;

use Orukusaki\TwiML\Node;

/**
 * Class Record
 * @package Orukusaki\TwiML\Verb
 * @see https://www.twilio.com/docs/api/twiml/record
 */
class Record extends Node
{
    /**
     * @param string $action
     *
     * @return Record
     */
    public function withAction($action)
    {
        $this->attributes['action'] = $action;

        return $this;
    }

    /**
     * @param string $method
     *
     * @return Record
     */
    public function withMethod($method)
    {
        $this->attributes['method'] = $method;

        return $this;
    }

    /**
     * @param string $timeout
     *
     * @return Record
     */
    public function withTimeout($timeout)
    {
        $this->attributes['timeout'] = $timeout;

        return $this;
    }

    /**
     * @param string $finishOnKey
     *
     * @return Record
     */
    public function withFinishOnKey($finishOnKey)
    {
        $this->attributes['finishOnKey'] = $finishOnKey;

        return $this;
    }

    /**
     * @param string $maxLength
     *
     * @return Record
     */
    public function withMaxLength($maxLength)
    {
        $this->attributes['maxLength'] = $maxLength;

        return $this;
    }

    /**
     * @param string $transcribe
     *
     * @return Record
     */
    public function withTranscribe($transcribe)
    {
        $this->attributes['transcribe'] = $transcribe;

        return $this;
    }

    /**
     * @param string $transcribeCallback
     *
     * @return Record
     */
    public function withTranscribeCallback($transcribeCallback)
    {
        $this->attributes['transcribeCallback'] = $transcribeCallback;

        return $this;
    }

    /**
     * @param string $playBeep
     *
     * @return Record
     */
    public function withPlayBeep($playBeep)
    {
        $this->attributes['playBeep'] = $playBeep;

        return $this;
    }

    /**
     * @param string $trim
     *
     * @return Record
     */
    public function withTrim($trim)
    {
        $this->attributes['trim'] = $trim;

        return $this;
    }
}
