<?php

namespace Controle;

class SearchDnsSecKeyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $SearchDnsSecKeyResult;
    /**
     * @var array \Controle\DnsSecKey
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
