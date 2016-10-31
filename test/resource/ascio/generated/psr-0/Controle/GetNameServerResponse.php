<?php

namespace Controle;

class GetNameServerResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $getnameserverresult;
	/**
	 * @var \Controle\NameServer
	 */
	public $nameserver;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetNameServerResult($val)
	{
        $this->getnameserverresult = (int)$val;
	}

	/**
	 * @param NameServer $val
	 * @throws Exception
	 */
	public function setNameServer($val)
	{
        $this->nameserver = (int)$val;
	}
}
