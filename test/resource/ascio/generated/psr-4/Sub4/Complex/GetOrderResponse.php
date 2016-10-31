<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class GetOrderResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $getorderresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Order
     */
    public $order;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setGetOrderResult($val)
    {
        $this->getorderresult = (int)$val;
    }

    /**
     * @param Order $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->order = (int)$val;
    }
}
