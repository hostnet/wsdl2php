<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetContact
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $contactHandle;
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
    public function setContactHandle($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for contactHandle');
        }
        $this->contactHandle = ()$val;
    }
}
