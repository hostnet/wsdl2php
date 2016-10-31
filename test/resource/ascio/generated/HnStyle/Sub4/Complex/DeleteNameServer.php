<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteNameServer
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $nameserverhandle;
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
    public function setNameServerHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for nameServerHandle');
        }
        $this->nameserverhandle = (int)$val;
    }
}
