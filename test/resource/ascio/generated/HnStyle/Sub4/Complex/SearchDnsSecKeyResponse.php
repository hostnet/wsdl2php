<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchDnsSecKeyResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $searchdnsseckeyresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\DnsSecKey
     */
    public $dnsseckeys;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchDnsSecKeyResult($val)
    {
        $this->searchdnsseckeyresult = (int)$val;
    }

    /**
     * @param ArrayOfDnsSecKey $val
     * @throws Exception
     */
    public function setDnsSecKeys($val)
    {
        $this->dnsseckeys = (int)$val;
    }
}
