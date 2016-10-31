<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetRegistrantVerificationInfoResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getregistrantverificationinforesult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationInfo
     */
    public $verificationinfo;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantVerificationInfoResult($val)
    {
        $this->getregistrantverificationinforesult = (int)$val;
    }

    /**
     * @param RegistrantVerificationInfo $val
     * @throws Exception
     */
    public function setVerificationInfo($val)
    {
        $this->verificationinfo = (int)$val;
    }
}
