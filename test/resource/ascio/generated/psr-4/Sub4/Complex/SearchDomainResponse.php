<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchDomainResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $SearchDomainResult;
    /**
     * @var array \Controle\Hostnet\Namesp\Sub4\Complex\Domain
     */
    public $domains;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setSearchDomainResult($val)
    {
        $this->SearchDomainResult = $val;
    }

    /**
     * @param ArrayOfDomain $val
     * @throws \Exception
     */
    public function setDomains($val)
    {
        $this->domains = $val;
    }
}
