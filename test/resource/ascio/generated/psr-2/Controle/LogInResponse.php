<?php

namespace Controle;

class LogInResponse
{
    /**
     * @var \Controle\Response
     */
    public $loginresult;
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setLogInResult($val)
    {
        $this->loginresult = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
    }
}
