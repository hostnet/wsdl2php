<?php

namespace Controle;

class GetDomainResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Response
     */
    public $GetDomainResult;
    /**
     * @var \Controle\Domain
     */
    public $domain;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws \Exception
     */
    public function setGetDomainResult($val)
    {
        $this->GetDomainResult = $val;
    }

    /**
     * @param Domain $val
     * @throws \Exception
     */
    public function setDomain($val)
    {
        $this->domain = $val;
    }
}
