<?php

namespace Controle\sub1\sub2;

class GetDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetDnsSecKeyResult;
	/**
	 * @var \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsSecKey;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws \Exception
	 */
	public function setGetDnsSecKeyResult($val)
	{
        $this->GetDnsSecKeyResult = $val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws \Exception
	 */
	public function setDnsSecKey($val)
	{
        $this->dnsSecKey = $val;
	}
}
