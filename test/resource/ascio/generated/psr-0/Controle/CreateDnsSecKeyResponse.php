<?php

namespace Controle;

class CreateDnsSecKeyResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $creatednsseckeyresult;
	/**
	 * @var \Controle\DnsSecKey
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
