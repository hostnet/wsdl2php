<?php

namespace Controle;
class GetDnsSecKeyResponse {
	/**
	 * @var \Controle\Response
	 */
	public $GetDnsSecKeyResult;
	/**
	 * @var \Controle\DnsSecKey
	 */
	public $dnsSecKey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDnsSecKeyResult($val) {
		
		$this->GetDnsSecKeyResult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val) {
		
		$this->dnsSecKey = (int)$val;
	}

}

