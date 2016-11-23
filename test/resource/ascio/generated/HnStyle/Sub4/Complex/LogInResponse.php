<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class LogInResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $LogInResult;
    /**
     * @var string
     */
    public $sessionId;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setLogInResult($val)
    {
        $this->LogInResult = (int)$val;
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
        $this->sessionId = (int)$val;
    }
}
