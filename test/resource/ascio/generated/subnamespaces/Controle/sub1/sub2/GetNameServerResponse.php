<?php

namespace Controle\sub1\sub2;

class GetNameServerResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $getnameserverresult;
	/**
	 * @var \Controle\sub1\sub2\NameServer
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
