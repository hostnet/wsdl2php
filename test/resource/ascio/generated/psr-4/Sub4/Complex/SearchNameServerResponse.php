<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchNameServerResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $SearchNameServerResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameServers;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setSearchNameServerResult($val)
    {
        $this->SearchNameServerResult = (int)$val;
    }

    /**
     * @param ArrayOfNameServer $val
     * @throws Exception
     */
    public function setNameServers($val)
    {
        $this->nameServers = (int)$val;
    }
}
