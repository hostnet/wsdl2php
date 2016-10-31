<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class CreateOrderResponse
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Response
     */
    public $createorderresult;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\Order
     */
    public $order;
    /**
     * @param Response $val
     * @throws Exception
     */
    public function setCreateOrderResult($val)
    {
        $this->createorderresult = (int)$val;
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
