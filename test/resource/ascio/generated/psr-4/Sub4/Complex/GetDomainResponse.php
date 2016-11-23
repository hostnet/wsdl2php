<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDomainResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetDomainResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Domain
     */
    public $domain;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetDomainResult($val)
    {
        $this->GetDomainResult = (int)$val;
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
