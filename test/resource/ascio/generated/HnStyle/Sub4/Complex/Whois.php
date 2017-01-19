<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class Whois
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $domainName;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setDomainName($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for domainName');
        }
        $this->domainName = $val;
    }
}
