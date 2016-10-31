<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDnsSecKeyResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getdnsseckeyresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
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
