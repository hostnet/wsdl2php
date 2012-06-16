<?php

namespace Controle;
class GetContactResponse {
    /**
     * @var \Controle\Response
     */
    public $GetContactResult;
    /**
     * @var \Controle\Contact
     */
    public $contact;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetContactResult($val) {
        
        $this->GetContactResult = (int)$val;
    }

    /**
     * @param Contact $val
     * @throws Exception
     */
    public function setContact($val) {
        
        $this->contact = (int)$val;
    }

}

