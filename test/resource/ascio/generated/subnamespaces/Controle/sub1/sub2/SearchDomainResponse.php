<?php

namespace Controle\sub1\sub2;

class SearchDomainResponse
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $SearchDomainResult;
	/**
	 * @var array \Controle\sub1\sub2\Domain
	 */
	public $domains;
	// @codingStandardsIgnoreEnd

	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val)
	{
        $this->SearchDomainResult = $val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = $val;
	}
}
