<?php

namespace Orukusaki\TwiML\Voice\Verb;

use Orukusaki\TwiML\Node;

class Reject extends Node
{
    /**
     * @param string $reason
     *
     * @return Reject
     */
    public function withReason($reason)
    {
        $this->attributes['reason'] = $reason;

        return $this;
    }
}
