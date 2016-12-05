<?php

namespace Controle;

class WhoisResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $WhoisResult;
	/**
	 * @var string
	 */
	public $whoisData;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setWhoisResult($val)
	{
        $this->WhoisResult = ()$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setWhoisData($val)
	{
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for whoisData');
        }
        $this->whoisData = ()$val;
	}
}
