<?php

namespace Controle;
class WhoisResponse {
    /**
     * @var \Controle\Response
     */
    public $WhoisResult;
    /**
     * @var string
     */
    public $whoisData;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setWhoisResult($val) {
        
        $this->WhoisResult = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setWhoisData($val) {
        if(!is_string($val)) throw new Exception('POJO Proxy need a string for whoisData');
        $this->whoisData = (int)$val;
    }

}

