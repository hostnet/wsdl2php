<?php

namespace Controle;

class RegistrantVerificationInfo
{
    /**
     * @var string
     */
    public $emailaddress;
    /**
     * @var \Controle\RegistrantVerificationStatus
     */
    public $verificationstatus;
    /**
     * @var \Controle\RegistrantVerificationDetails
     */
    public $verificationdetails;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmailAddress($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for EmailAddress');
        }
        $this->emailaddress = (int)$val;
    }

    /**
     * @param RegistrantVerificationStatus $val
     * @throws Exception
     */
    public function setVerificationStatus($val)
    {
        $this->verificationstatus = (int)$val;
    }

    /**
     * @param RegistrantVerificationDetails $val
     * @throws Exception
     */
    public function setVerificationDetails($val)
    {
        $this->verificationdetails = (int)$val;
    }
}
