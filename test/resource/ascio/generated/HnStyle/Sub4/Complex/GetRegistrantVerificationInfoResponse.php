<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetRegistrantVerificationInfoResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetRegistrantVerificationInfoResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\RegistrantVerificationInfo
     */
    public $verificationInfo;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setGetRegistrantVerificationInfoResult($val)
    {
        $this->GetRegistrantVerificationInfoResult = $val;
    }

    /**
     * @param RegistrantVerificationInfo $val
     * @throws \Exception
     */
    public function setVerificationInfo($val)
    {
        $this->verificationInfo = $val;
    }
}
