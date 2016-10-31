<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteContact
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $contacthandle;
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
    public function setContactHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for contactHandle');
        }
        $this->contacthandle = (int)$val;
    }
}
