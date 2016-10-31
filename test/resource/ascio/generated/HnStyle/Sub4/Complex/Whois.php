<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Whois
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var string
     */
    public $domainname;
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
    public function setDomainName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for domainName');
        }
        $this->domainname = (int)$val;
    }
}
