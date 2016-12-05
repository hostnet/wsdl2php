<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetRegistrantVerificationStatusResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetRegistrantVerificationStatusResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationStatus
     */
    public $verificationStatus;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantVerificationStatusResult($val)
    {
        $this->GetRegistrantVerificationStatusResult = (Response)$val;
    }

    /**
     * @param RegistrantVerificationStatus $val
     * @throws Exception
     */
    public function setVerificationStatus($val)
    {
        $this->verificationStatus = (RegistrantVerificationStatus)$val;
    }
}
