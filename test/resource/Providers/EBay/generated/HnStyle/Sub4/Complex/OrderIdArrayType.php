<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

class OrderIdArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderIDType | ID of the Half.com order associated with the payment. Returns 0 for single-transaction
     * orders.
     */
    public $orderid;
    /**
     * @param OrderIDType $val
     * @throws Exception
     */
    public function setOrderID($val)
    {
        $this->orderid = (int)$val;
    }
}
