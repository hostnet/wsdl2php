<?php

namespace Controle;
class GetNameServerResponse {
    /**
     * @var \Controle\Response
     */
    public $GetNameServerResult;
    /**
     * @var \Controle\NameServer
     */
    public $nameServer;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetNameServerResult($val) {
        
        $this->GetNameServerResult = (int)$val;
    }

    /**
     * @param NameServer $val
     * @throws Exception
     */
    public function setNameServer($val) {
        
        $this->nameServer = (int)$val;
    }

}

