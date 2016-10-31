<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VerifyEmailResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReturnIndicator
     */
    public $verifyemailresult;
    /**
     * @param ReturnIndicator $val
     * @throws Exception
     */
    public function setVerifyEmailResult($val)
    {
        $this->verifyemailresult = (int)$val;
    }
}
