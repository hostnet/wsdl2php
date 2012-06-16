<?php

namespace Controle;
class VerifyEmailResponse {
    /**
     * @var \Controle\ReturnIndicator
     */
    public $VerifyEmailResult;
    /**
     * @param ReturnIndicator $val
     * @throws Exception
     */
    public function setVerifyEmailResult($val) {
        
        $this->VerifyEmailResult = (int)$val;
    }

}

