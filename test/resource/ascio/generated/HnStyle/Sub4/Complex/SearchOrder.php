<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchOrder
{
    /**
     * @var string
     */
    public $sessionid;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchOrderRequest
     */
    public $orderrequest;
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
     * @param SearchOrderRequest $val
     * @throws Exception
     */
    public function setOrderRequest($val)
    {
        $this->orderrequest = (int)$val;
    }
}
