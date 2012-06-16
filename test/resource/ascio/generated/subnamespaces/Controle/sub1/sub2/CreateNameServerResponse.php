<?php

namespace Controle\sub1\sub2;
class CreateNameServerResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateNameServerResult;
	/**
	 * @var \Controle\sub1\sub2\NameServer
	 */
	public $nameServer;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateNameServerResult($val) {
		
		$this->CreateNameServerResult = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val) {
		
		$this->nameServer = (int)$val;
	}

}

