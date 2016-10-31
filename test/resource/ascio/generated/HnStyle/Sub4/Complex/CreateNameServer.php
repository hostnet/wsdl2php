<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateNameServer
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameserver;
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
     * @param NameServer $val
     * @throws Exception
     */
    public function setNameServer($val)
    {
        $this->nameserver = (int)$val;
    }
}
