<?php

namespace Controle;
class LogInResponse {
    /**
     * @var \Controle\Response
     */
    public $LogInResult;
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setLogInResult($val) {
        
        $this->LogInResult = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for sessionId');
        $this->sessionId = (int)$val;
    }

}

