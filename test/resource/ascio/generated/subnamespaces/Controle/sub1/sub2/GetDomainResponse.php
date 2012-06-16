<?php

namespace Controle\sub1\sub2;
class GetDomainResponse {
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $GetDomainResult;
	/**
	 * @var \Controle\sub1\sub2\Domain
	 */
	public $domain;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDomainResult($val) {
		
		$this->GetDomainResult = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val) {
		
		$this->domain = (int)$val;
	}

}

