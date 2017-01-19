<?php

namespace Controle;

class LogInResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $LogInResult;
    /**
     * @var string
     */
    public $sessionId;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setLogInResult($val)
    {
        $this->LogInResult = $val;
    }

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = $val;
    }
}
