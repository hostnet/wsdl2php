<?php

namespace Controle;

class SearchDnsSecKeyResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $searchdnsseckeyresult;
	/**
	 * @var array \Controle\DnsSecKey
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
