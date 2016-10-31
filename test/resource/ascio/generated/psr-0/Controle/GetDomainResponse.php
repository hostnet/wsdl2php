<?php

namespace Controle;

class GetDomainResponse
{
	/**
	 * @var \Controle\Response
	 */
	public $getdomainresult;
	/**
	 * @var \Controle\Domain
	 */
	public $domain;
	/**
	 * @param Response $val
	 * @throws Exception
	 */
	public function setGetDomainResult($val)
	{
        $this->getdomainresult = (int)$val;
	}

	/**
	 * @param Domain $val
	 * @throws Exception
	 */
	public function setDomain($val)
	{
        $this->domain = (int)$val;
	}
}
