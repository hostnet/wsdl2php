<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetDomainResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getdomainresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Domain
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
