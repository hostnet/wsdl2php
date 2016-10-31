<?php

namespace Controle;
class CreateRegistrantResponse {
    /**
     * @var \Controle\Response
     */
    public $CreateRegistrantResult;
    /**
     * @var \Controle\Registrant
     */
    public $registrant;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateRegistrantResult($val) {
        
        $this->CreateRegistrantResult = (int)$val;
    }

    /**
     * @param Registrant $val
     * @throws Exception
     */
    public function setRegistrant($val) {
        
        $this->registrant = (int)$val;
    }

}

