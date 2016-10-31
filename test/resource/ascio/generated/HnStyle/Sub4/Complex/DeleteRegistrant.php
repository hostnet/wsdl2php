<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteRegistrant
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $registranthandle;
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
    public function setRegistrantHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for registrantHandle');
        }
        $this->registranthandle = (int)$val;
    }
}
