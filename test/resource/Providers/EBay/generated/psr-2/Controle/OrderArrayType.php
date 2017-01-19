<?php

namespace Controle;

/**
 * OrderArrayType
 * An array of Orders.
 */
class OrderArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\OrderType | Order in which the page is displayed in the list of custom pages.
     */
    public $Order;
    // @codingStandardsIgnoreEnd

    /**
     * @param OrderType $val
     * @throws \Exception
     */
    public function setOrder($val)
    {
        $this->Order = $val;
    }
}
