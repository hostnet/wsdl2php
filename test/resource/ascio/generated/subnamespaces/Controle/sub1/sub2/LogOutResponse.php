<?php

namespace Controle\sub1\sub2;

class LogOutResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $LogOutResult;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogOutResult($val)
	{
        $this->LogOutResult = (Response)$val;
	}
}
