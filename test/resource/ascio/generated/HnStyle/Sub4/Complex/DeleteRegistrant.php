<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class DeleteRegistrant
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $registrantHandle;
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
    public function setRegistrantHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for registrantHandle');
        }
        $this->registrantHandle = (int)$val;
    }
}
