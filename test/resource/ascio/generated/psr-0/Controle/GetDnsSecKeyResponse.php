<?php

namespace Controle;

class GetDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $GetDnsSecKeyResult;
	/**
	 * @var \Controle\DnsSecKey
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
