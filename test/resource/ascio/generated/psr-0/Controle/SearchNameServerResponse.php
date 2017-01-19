<?php

namespace Controle;

class SearchNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $SearchNameServerResult;
	/**
	 * @var array \Controle\NameServer
	 */
	public $nameServers;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setSearchNameServerResult($val)
	{
        $this->SearchNameServerResult = $val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws \Exception
	 */
	public function setNameServers($val)
	{
        $this->nameServers = $val;
	}
}
