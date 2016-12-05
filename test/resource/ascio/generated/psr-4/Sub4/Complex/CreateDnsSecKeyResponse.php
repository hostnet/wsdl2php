<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDnsSecKeyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $CreateDnsSecKeyResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsSecKey;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateDnsSecKeyResult($val)
    {
        $this->CreateDnsSecKeyResult = ()$val;
    }

    /**
     * @param DnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKey($val)
    {
        $this->dnsSecKey = ()$val;
    }
}
