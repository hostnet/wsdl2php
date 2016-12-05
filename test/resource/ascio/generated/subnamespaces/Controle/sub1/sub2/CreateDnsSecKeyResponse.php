<?php

namespace Controle\sub1\sub2;

class CreateDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateDnsSecKeyResult;
	/**
	 * @var \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsSecKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDnsSecKeyResult($val)
	{
        $this->CreateDnsSecKeyResult = (Response)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = (DnsSecKey)$val;
	}
}
