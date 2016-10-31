<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchDnsSecKey
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchCriteria
     */
    public $criteria;
    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionid = (int)$val;
    }

    /**
     * @param SearchCriteria $val
     * @throws Exception
     */
    public function setCriteria($val)
    {
        $this->criteria = (int)$val;
    }
}
