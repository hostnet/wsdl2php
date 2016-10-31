<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateDnsSecKeyResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $creatednsseckeyresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckey;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateDnsSecKeyResult($val)
    {
        $this->creatednsseckeyresult = (int)$val;
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
