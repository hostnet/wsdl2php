<?php

namespace Controle;
class SearchDomainResponse {
	/**
	 * @var \Controle\Response
	 */
	public $SearchDomainResult;
	/**
	 * @var array \Controle\Domain
	 */
	public $domains;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val) {
		
		$this->SearchDomainResult = (int)$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val) {
		
		$this->domains = (int)$val;
	}

}

