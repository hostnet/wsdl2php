<?php

namespace Controle;
class SearchDnsSecKeyResponse {
    /**
     * @var \Controle\Response
     */
    public $SearchDnsSecKeyResult;
    /**
     * @var array \Controle\DnsSecKey
     */
    public $dnsSecKeys;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchDnsSecKeyResult($val) {
        
        $this->SearchDnsSecKeyResult = (int)$val;
    }

    /**
     * @param ArrayOfDnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKeys($val) {
        
        $this->dnsSecKeys = (int)$val;
    }

}

