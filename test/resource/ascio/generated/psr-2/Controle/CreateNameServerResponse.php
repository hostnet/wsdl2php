<?php

namespace Controle;

class CreateNameServerResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $CreateNameServerResult;
    /**
     * @var \Controle\NameServer
     */
    public $nameServer;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setCreateNameServerResult($val)
    {
        $this->CreateNameServerResult = $val;
    }

    /**
     * @param NameServer $val
     * @throws \Exception
     */
    public function setNameServer($val)
    {
        $this->nameServer = $val;
    }
}
