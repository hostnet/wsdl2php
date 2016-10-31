<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchDomainResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $searchdomainresult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Domain
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
