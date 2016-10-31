<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class PollMessage
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MessageType
     */
    public $msgtype;
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
     * @param MessageType $val
     * @throws Exception
     */
    public function setMsgType($val)
    {
        $this->msgtype = (int)$val;
    }
}
