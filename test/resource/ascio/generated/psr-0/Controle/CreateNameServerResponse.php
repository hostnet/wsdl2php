<?php

namespace Controle;

class CreateNameServerResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $createnameserverresult;
	/**
	 * @var \Controle\NameServer
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
