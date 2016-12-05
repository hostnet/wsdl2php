<?php

namespace Controle\sub1\sub2;

class SearchNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $SearchNameServerResult;
	/**
	 * @var array \Controle\sub1\sub2\NameServer
	 */
	public $nameServers;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchNameServerResult($val)
	{
        $this->SearchNameServerResult = (Response)$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->nameServers = (ArrayOfNameServer)$val;
	}
}
