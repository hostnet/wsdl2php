<?php

namespace Controle\sub1\sub2;

class SearchDnsSecKeyResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $searchdnsseckeyresult;
	/**
	 * @var array \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsseckeys;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDnsSecKeyResult($val)
	{
        $this->searchdnsseckeyresult = (int)$val;
	}

	/**
	 * @param ArrayOfDnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKeys($val)
	{
        $this->dnsseckeys = (int)$val;
	}
}
