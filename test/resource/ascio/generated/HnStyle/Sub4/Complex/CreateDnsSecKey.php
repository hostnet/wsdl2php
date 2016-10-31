<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDnsSecKey
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey;
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
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey($val)
    {
        $this->dnsseckey = (int)$val;
    }
}
