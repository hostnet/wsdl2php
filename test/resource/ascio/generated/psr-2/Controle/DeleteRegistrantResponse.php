<?php

namespace Controle;
class DeleteRegistrantResponse {
    /**
     * @var \Controle\Response
     */
    public $DeleteRegistrantResult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setDeleteRegistrantResult($val) {
        
        $this->DeleteRegistrantResult = (int)$val;
    }

}

