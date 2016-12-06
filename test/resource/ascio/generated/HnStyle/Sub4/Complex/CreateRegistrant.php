<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateRegistrant
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Registrant
     */
    public $registrant;
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
        $this->sessionId = $val;
    }

    /**
     * @param Registrant $val
     * @throws Exception
     */
    public function setRegistrant($val)
    {
        $this->registrant = $val;
    }
}
