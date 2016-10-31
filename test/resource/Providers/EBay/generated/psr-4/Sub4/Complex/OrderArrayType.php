<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * OrderArrayType
 * An array of Orders.
 */
class OrderArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderType | Order in which the page is displayed in the list of custom pages.
     */
    public $order;
    /**
     * @param OrderType $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->order = (int)$val;
    }
}
