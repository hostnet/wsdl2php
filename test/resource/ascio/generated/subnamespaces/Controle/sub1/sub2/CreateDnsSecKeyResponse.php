<?php

namespace Controle\sub1\sub2;

class CreateDnsSecKeyResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $creatednsseckeyresult;
	/**
	 * @var \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsseckey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDnsSecKeyResult($val)
	{
        $this->creatednsseckeyresult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsseckey = (int)$val;
	}
}
