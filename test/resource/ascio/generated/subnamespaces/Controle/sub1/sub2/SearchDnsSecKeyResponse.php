<?php

namespace Controle\sub1\sub2;

class SearchDnsSecKeyResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $SearchDnsSecKeyResult;
	/**
	 * @var array \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsSecKeys;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDnsSecKeyResult($val)
	{
        $this->SearchDnsSecKeyResult = (int)$val;
	}

	/**
	 * @param ArrayOfDnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->dnsSecKeys = (int)$val;
	}
}
