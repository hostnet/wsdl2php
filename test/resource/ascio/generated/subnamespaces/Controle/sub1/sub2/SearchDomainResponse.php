<?php

namespace Controle\sub1\sub2;

class SearchDomainResponse
{
	/**
	 * @var \Controle\sub1\sub2\Response
	 */
	public $searchdomainresult;
	/**
	 * @var array \Controle\sub1\sub2\Domain
	 */
	public $domains;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setSearchDomainResult($val)
	{
        $this->searchdomainresult = (int)$val;
	}

	/**
	 * @param ArrayOfDomain $val
	 * @throws Exception
	 */
	public function setDomains($val)
	{
        $this->domains = (int)$val;
	}
}
