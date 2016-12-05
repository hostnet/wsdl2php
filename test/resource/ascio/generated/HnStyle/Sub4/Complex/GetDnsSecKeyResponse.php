<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDnsSecKeyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetDnsSecKeyResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsSecKey;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetDnsSecKeyResult($val)
    {
        $this->GetDnsSecKeyResult = (Response)$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey($val)
    {
        $this->dnsSecKey = (DnsSecKey)$val;
    }
}
