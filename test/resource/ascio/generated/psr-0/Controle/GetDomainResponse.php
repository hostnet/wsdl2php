<?php

namespace Controle;
class GetDomainResponse {
	/**
	 * @var \Controle\Response
	 */
	public $GetDomainResult;
	/**
	 * @var \Controle\Domain
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

