<?php

namespace Controle;
class CreateDnsSecKeyResponse {
    /**
     * @var \Controle\Response
     */
    public $CreateDnsSecKeyResult;
    /**
     * @var \Controle\DnsSecKey
     */
    public $dnsSecKey;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateDnsSecKeyResult($val) {
        
        $this->CreateDnsSecKeyResult = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey($val) {
        
        $this->dnsSecKey = (int)$val;
    }

}

