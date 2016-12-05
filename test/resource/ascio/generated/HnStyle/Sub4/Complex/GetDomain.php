<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDomain
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $domainHandle;
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

    /**
     * @param string $val
     * @throws Exception
     */
    public function setDomainHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for domainHandle');
        }
        $this->domainHandle = ()$val;
    }
}
