<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDnsSecKey
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $dnsseckeyhandle;
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
    public function setDnsSecKeyHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for dnsSecKeyHandle');
        }
        $this->dnsseckeyhandle = (int)$val;
    }
}
