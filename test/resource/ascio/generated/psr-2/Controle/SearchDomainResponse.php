<?php

namespace Controle;

class SearchDomainResponse
{
    /**
     * @var \Controle\Response
     */
    public $searchdomainresult;
    /**
     * @var array \Controle\Domain
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
