<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogOutResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $LogOutResult;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setLogOutResult($val)
    {
        $this->LogOutResult = (int)$val;
    }
}
