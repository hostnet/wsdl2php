<?php

namespace Controle\sub1\sub2;

class CreateNameServerResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $createnameserverresult;
	/**
	 * @var \Controle\sub1\sub2\NameServer
	 */
	public $nameserver;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateNameServerResult($val)
	{
        $this->createnameserverresult = (int)$val;
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
