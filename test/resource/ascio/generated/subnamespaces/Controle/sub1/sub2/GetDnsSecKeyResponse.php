<?php

namespace Controle\sub1\sub2;

class GetDnsSecKeyResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $getdnsseckeyresult;
	/**
	 * @var \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsseckey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDnsSecKeyResult($val)
	{
        $this->getdnsseckeyresult = (int)$val;
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
