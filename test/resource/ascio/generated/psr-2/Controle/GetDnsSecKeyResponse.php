<?php

namespace Controle;

class GetDnsSecKeyResponse
{
    /**
     * @var \Controle\Response
     */
    public $getdnsseckeyresult;
    /**
     * @var \Controle\DnsSecKey
     */
    public $dnsseckey;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetDnsSecKeyResult($val)
    {
        $this->getdnsseckeyresult = (int)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey($val)
    {
        $this->dnsseckey = (int)$val;
    }
}
