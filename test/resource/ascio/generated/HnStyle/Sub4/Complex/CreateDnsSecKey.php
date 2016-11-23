<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDnsSecKey
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsSecKey;
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
        $this->sessionId = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey($val)
    {
        $this->dnsSecKey = (int)$val;
    }
}
