<?php

namespace Controle;

class AdvancedVerifyEmailResponse
{
    /**
     * @var \Controle\ReturnIndicator
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
