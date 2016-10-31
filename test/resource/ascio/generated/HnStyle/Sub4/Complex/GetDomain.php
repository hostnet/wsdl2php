<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDomain
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $domainhandle;
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
    public function setDomainHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for domainHandle');
        }
        $this->domainhandle = (int)$val;
    }
}
