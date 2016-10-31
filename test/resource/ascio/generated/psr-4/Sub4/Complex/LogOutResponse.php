<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogOutResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $logoutresult;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setLogOutResult($val)
    {
        $this->logoutresult = (int)$val;
    }
}
