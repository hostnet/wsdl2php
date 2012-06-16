<?php

namespace Controle;
class CreateNameServerResponse {
    /**
     * @var \Controle\Response
     */
    public $CreateNameServerResult;
    /**
     * @var \Controle\NameServer
     */
    public $nameServer;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateNameServerResult($val) {
        
        $this->CreateNameServerResult = (int)$val;
    }

    /**
     * @param NameServer $val
     * @throws Exception
     */
    public function setNameServer($val) {
        
        $this->nameServer = (int)$val;
    }

}

