<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class UploadRegistrantVerificationMessage
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $value;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationDetails
     */
    public $details;
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
    public function setValue($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for value');
        }
        $this->value = (string)$val;
    }

    /**
     * @param RegistrantVerificationDetails $val
     * @throws Exception
     */
    public function setDetails($val)
    {
        $this->details = (RegistrantVerificationDetails)$val;
    }
}
