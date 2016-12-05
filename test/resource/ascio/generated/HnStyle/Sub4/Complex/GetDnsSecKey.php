<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDnsSecKey
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $dnsSecKeyHandle;
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
        $this->sessionId = (string)$val;
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
        $this->dnsSecKeyHandle = (string)$val;
    }
}
