<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetMessageQueue
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var int
     */
    public $msgid;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
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
        $this->msgid = (int)$val;
    }
}
