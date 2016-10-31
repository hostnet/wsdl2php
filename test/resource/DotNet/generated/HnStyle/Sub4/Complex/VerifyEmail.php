<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VerifyEmail
{
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $licensekey;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setEmail($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for email');
        }
        $this->email = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setLicenseKey($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for LicenseKey');
        }
        $this->licensekey = (int)$val;
    }
}
