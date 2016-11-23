<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class RegistrantVerificationDetails
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $VerifiedBy;
    /**
     * @var dateTime
     */
    public $VerificationDate;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Message
     */
    public $Messages;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setVerifiedBy($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for VerifiedBy');
        }
        $this->VerifiedBy = (int)$val;
    }

    /**
     * @param dateTime $val
     * @throws Exception
     */
    public function setVerificationDate($val)
    {
        $this->VerificationDate = (int)$val;
    }

    /**
     * @param ArrayOfMessage $val
     * @throws Exception
     */
    public function setMessages($val)
    {
        $this->Messages = (int)$val;
    }
}
