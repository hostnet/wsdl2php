<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchContact
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchCriteria
     */
    public $criteria;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = (int)$val;
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
