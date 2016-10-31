<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DoRegistrantVerification
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $value;
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
     * @param string $val
     * @throws Exception
     */
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for value');
        }
        $this->value = (int)$val;
    }
}
