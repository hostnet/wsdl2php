<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchNameServerResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $searchnameserverresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameservers;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchNameServerResult($val)
    {
        $this->searchnameserverresult = (int)$val;
    }

    /**
     * @param ArrayOfNameServer $val
     * @throws Exception
     */
    public function setNameServers($val)
    {
        $this->nameservers = (int)$val;
    }
}
