<?php

namespace Controle;
class UploadRegistrantVerificationMessageResponse {
    /**
     * @var \Controle\Response
     */
    public $UploadRegistrantVerificationMessageResult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUploadRegistrantVerificationMessageResult($val) {
        
        $this->UploadRegistrantVerificationMessageResult = (int)$val;
    }

}

