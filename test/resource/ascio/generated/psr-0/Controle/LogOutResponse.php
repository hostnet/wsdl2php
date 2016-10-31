<?php

namespace Controle;
class LogOutResponse {
	/**
	 * @var \Controle\Response
	 */
	public $LogOutResult;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setLogOutResult($val) {
		
		$this->LogOutResult = (int)$val;
	}

}

