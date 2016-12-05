<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchDnsSecKeyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $SearchDnsSecKeyResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsSecKeys;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchDnsSecKeyResult($val)
    {
        $this->SearchDnsSecKeyResult = ()$val;
    }

    /**
     * @param ArrayOfDnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKeys($val)
    {
        $this->dnsSecKeys = ()$val;
    }
}
