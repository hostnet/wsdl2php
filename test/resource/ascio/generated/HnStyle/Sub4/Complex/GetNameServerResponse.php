<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetNameServerResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetNameServerResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\NameServer
     */
    public $nameServer;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetNameServerResult($val)
    {
        $this->GetNameServerResult = ()$val;
    }

    /**
     * @param NameServer $val
     * @throws Exception
     */
    public function setNameServer($val)
    {
        $this->nameServer = ()$val;
    }
}
