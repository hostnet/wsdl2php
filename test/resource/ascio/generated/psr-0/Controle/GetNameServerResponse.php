<?php

namespace Controle;

class GetNameServerResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $GetNameServerResult;
	/**
	 * @var \Controle\NameServer
	 */
	public $nameServer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setGetNameServerResult($val)
	{
        $this->GetNameServerResult = $val;
	}

	/**
	 * @param NameServer $val
	 * @throws \Exception
	 */
	public function setNameServer($val)
	{
        $this->nameServer = $val;
	}
}
