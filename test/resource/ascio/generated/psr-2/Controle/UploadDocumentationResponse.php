<?php

namespace Controle;
class UploadDocumentationResponse {
    /**
     * @var \Controle\Response
     */
    public $UploadDocumentationResult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUploadDocumentationResult($val) {
        
        $this->UploadDocumentationResult = (int)$val;
    }

}

