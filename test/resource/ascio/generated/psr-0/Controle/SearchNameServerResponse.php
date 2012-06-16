<?php

namespace Controle;
class SearchNameServerResponse {
	/**
	 * @var \Controle\Response
	 */
	public $SearchNameServerResult;
	/**
	 * @var array \Controle\NameServer
	 */
	public $nameServers;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchNameServerResult($val) {
		
		$this->SearchNameServerResult = (int)$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val) {
		
		$this->nameServers = (int)$val;
	}

}

