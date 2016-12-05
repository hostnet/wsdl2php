<?php

namespace Controle\sub1\sub2;

class LogInResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
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
        $this->LogInResult = (Response)$val;
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
        $this->sessionId = (string)$val;
	}
}
