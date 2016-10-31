<?php

namespace Controle\sub1\sub2;
class WhoisResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $WhoisResult;
	/**
	 * @var string
	 */
	public $whoisData;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setWhoisResult($val) {
		
		$this->WhoisResult = (int)$val;
	}

	/**
	 * @param string $val
	 * @throws Exception
	 */
	public function setWhoisData($val) {
		if(!is_string($val)) throw new Exception('POJO Proxy need a string for whoisData');
		$this->whoisData = (int)$val;
	}

}

