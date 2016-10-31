<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class AdvancedVerifyEmailResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\ReturnIndicator
     */
    public $advancedverifyemailresult;
    /**
     * @param ReturnIndicator $val
     * @throws Exception
     */
    public function setAdvancedVerifyEmailResult($val)
    {
        $this->advancedverifyemailresult = (int)$val;
    }
}
