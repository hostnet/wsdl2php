<?php

namespace Controle;
class GetRegistrantVerificationInfoResponse {
    /**
     * @var \Controle\Response
     */
    public $GetRegistrantVerificationInfoResult;
    /**
     * @var \Controle\RegistrantVerificationInfo
     */
    public $verificationInfo;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetRegistrantVerificationInfoResult($val) {
        
        $this->GetRegistrantVerificationInfoResult = (int)$val;
    }

    /**
     * @param RegistrantVerificationInfo $val
     * @throws Exception
     */
    public function setVerificationInfo($val) {
        
        $this->verificationInfo = (int)$val;
    }

}

