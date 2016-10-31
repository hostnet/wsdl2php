<?php

namespace Controle\sub1\sub2;

class LogOutResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
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
