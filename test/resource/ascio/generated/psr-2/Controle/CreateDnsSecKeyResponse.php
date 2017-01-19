<?php

namespace Controle;

class CreateDnsSecKeyResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $CreateDnsSecKeyResult;
    /**
     * @var \Controle\DnsSecKey
     */
    public $dnsSecKey;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setCreateDnsSecKeyResult($val)
    {
        $this->CreateDnsSecKeyResult = $val;
    }

    /**
     * @param DnsSecKey $val
     * @throws \Exception
     */
    public function setDnsSecKey($val)
    {
        $this->dnsSecKey = $val;
    }
}
