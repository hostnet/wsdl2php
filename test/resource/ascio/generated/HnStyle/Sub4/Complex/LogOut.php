<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogOut
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
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
}
