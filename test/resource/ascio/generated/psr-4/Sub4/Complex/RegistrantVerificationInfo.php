<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class RegistrantVerificationInfo
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $EmailAddress;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationStatus
     */
    public $VerificationStatus;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationDetails
     */
    public $VerificationDetails;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmailAddress($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailAddress');
        }
        $this->EmailAddress = ()$val;
    }

    /**
     * @param RegistrantVerificationStatus $val
     * @throws Exception
     */
    public function setVerificationStatus($val)
    {
        $this->VerificationStatus = ()$val;
    }

    /**
     * @param RegistrantVerificationDetails $val
     * @throws Exception
     */
    public function setVerificationDetails($val)
    {
        $this->VerificationDetails = ()$val;
    }
}
