<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PollMessage
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageType
     */
    public $msgType;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = $val;
    }

    /**
     * @param MessageType $val
     * @throws Exception
     */
    public function setMsgType($val)
    {
        $this->msgType = $val;
    }
}
