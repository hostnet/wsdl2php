<?php

namespace Controle\sub1\sub2;

class CreateNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateNameServerResult;
	/**
	 * @var \Controle\sub1\sub2\NameServer
	 */
	public $nameServer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateNameServerResult($val)
	{
        $this->CreateNameServerResult = (Response)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = (NameServer)$val;
	}
}
