<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateNameServerResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $createnameserverresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameserver;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateNameServerResult($val)
    {
        $this->createnameserverresult = (int)$val;
    }

    /**
     * @param NameServer $val
     * @throws Exception
     */
    public function setNameServer($val)
    {
        $this->nameserver = (int)$val;
    }
}
