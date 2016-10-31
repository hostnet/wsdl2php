<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogOut
{
    /**
     * @var string
     */
    public $sessionid;
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
}
