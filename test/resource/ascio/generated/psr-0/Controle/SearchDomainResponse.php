<?php

namespace Controle;

class SearchDomainResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\Response
	 */
	public $SearchDomainResult;
	/**
	 * @var array \Controle\Domain
	 */
	public $domains;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val)
	{
        $this->SearchDomainResult = (Response)$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = (ArrayOfDomain)$val;
	}
}
