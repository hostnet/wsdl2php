<?php

namespace Controle\sub1\sub2;

class SearchNameServerResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $searchnameserverresult;
	/**
	 * @var array \Controle\sub1\sub2\NameServer
	 */
	public $nameservers;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchNameServerResult($val)
	{
        $this->searchnameserverresult = (int)$val;
	}

	/**
	 * @param ArrayOfNameServer $val
	 * @throws Exception
	 */
	public function setNameServers($val)
	{
        $this->nameservers = (int)$val;
	}
}
