<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetRegistrantVerificationStatusResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getregistrantverificationstatusresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationStatus
     */
    public $verificationstatus;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantVerificationStatusResult($val)
    {
        $this->getregistrantverificationstatusresult = (int)$val;
    }

    /**
     * @param RegistrantVerificationStatus $val
     * @throws Exception
     */
    public function setVerificationStatus($val)
    {
        $this->verificationstatus = (int)$val;
    }
}
