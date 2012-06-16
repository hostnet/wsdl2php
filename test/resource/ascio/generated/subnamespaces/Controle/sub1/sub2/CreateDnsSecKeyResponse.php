<?php

namespace Controle\sub1\sub2;
class CreateDnsSecKeyResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $CreateDnsSecKeyResult;
	/**
	 * @var \Controle\sub1\sub2\DnsSecKey
	 */
	public $dnsSecKey;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setCreateDnsSecKeyResult($val) {
		
		$this->CreateDnsSecKeyResult = (int)$val;
	}

	/**
	 * @param DnsSecKey $val
	 * @throws Exception
	 */
	public function setDnsSecKey($val) {
		
		$this->dnsSecKey = (int)$val;
	}

}

