<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteNameServer
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $nameServerHandle;
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
     * @param string $val
     * @throws Exception
     */
    public function setNameServerHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for nameServerHandle');
        }
        $this->nameServerHandle = (int)$val;
    }
}
