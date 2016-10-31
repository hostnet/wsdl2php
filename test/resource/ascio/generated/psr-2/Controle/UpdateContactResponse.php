<?php

namespace Controle;
class UpdateContactResponse {
    /**
     * @var \Controle\Response
     */
    public $UpdateContactResult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setUpdateContactResult($val) {
        
        $this->UpdateContactResult = (int)$val;
    }

}

