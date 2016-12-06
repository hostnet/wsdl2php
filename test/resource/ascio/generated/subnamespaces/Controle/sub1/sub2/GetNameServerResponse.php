<?php

namespace Controle\sub1\sub2;

class GetNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetNameServerResult;
	/**
	 * @var \Controle\sub1\sub2\NameServer
	 */
	public $nameServer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetNameServerResult($val)
	{
        $this->GetNameServerResult = $val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = $val;
	}
}
