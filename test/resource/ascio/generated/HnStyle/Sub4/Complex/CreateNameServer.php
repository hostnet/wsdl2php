<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateNameServer
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameServer;
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
     * @param NameServer $val
     * @throws Exception
     */
    public function setNameServer($val)
    {
        $this->nameServer = (NameServer)$val;
    }
}
