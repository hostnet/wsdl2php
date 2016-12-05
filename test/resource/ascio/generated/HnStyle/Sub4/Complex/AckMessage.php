<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AckMessage
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var int
     */
    public $msgId;
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
        $this->sessionId = ()$val;
    }

    /**
     * @param int $val
     * @throws Exception
     */
    public function setMsgId($val)
    {
        if (!is_int($val)) {
            throw new Exception('POJO Proxy need a integer');
        }
        $this->msgId = ()$val;
    }
}
