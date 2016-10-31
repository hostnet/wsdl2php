<?php

namespace Controle;

class LogOutResponse
{
    /**
     * @var \Controle\Response
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
