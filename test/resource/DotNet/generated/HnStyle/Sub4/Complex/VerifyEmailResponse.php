<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class VerifyEmailResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReturnIndicator
     */
    public $VerifyEmailResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param ReturnIndicator $val
     * @throws \Exception
     */
    public function setVerifyEmailResult($val)
    {
        $this->VerifyEmailResult = $val;
    }
}
