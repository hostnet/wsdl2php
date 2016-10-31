<?php

namespace Controle;

class SearchNameServerResponse
{
    /**
     * @var \Controle\Response
     */
    public $searchnameserverresult;
    /**
     * @var array \Controle\NameServer
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
