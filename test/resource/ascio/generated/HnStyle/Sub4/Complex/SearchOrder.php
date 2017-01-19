<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class SearchOrder
{
    // @codingStandardsIgnoreStart
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\SearchOrderRequest
     */
    public $orderRequest;
    // @codingStandardsIgnoreEnd

    /**
     * @param string $val
     * @throws \Exception
     */
    public function setSessionId($val)
    {
        if (!is_string($val)) {
            throw new \Exception('POJO Proxy need a string for sessionId');
        }
        $this->sessionId = $val;
    }

    /**
     * @param SearchOrderRequest $val
     * @throws \Exception
     */
    public function setOrderRequest($val)
    {
        $this->orderRequest = $val;
    }
}
