<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetOrderResponse
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $GetOrderResult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Order
     */
    public $order;
    // @codingStandardsIgnoreEnd

    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetOrderResult($val)
    {
        $this->GetOrderResult = ()$val;
    }

    /**
     * @param Order $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->order = ()$val;
    }
}
