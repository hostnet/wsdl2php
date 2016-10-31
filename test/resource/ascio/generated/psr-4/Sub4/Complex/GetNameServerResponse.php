<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetNameServerResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getnameserverresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameserver;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetNameServerResult($val)
    {
        $this->getnameserverresult = (int)$val;
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
