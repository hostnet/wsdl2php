<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * AddOrderRequestType
 * Combines two or more transactions into a single order, enabling a buyer to pay for all of
 * those transactions with a single payment (and, if so arranged, ship all of the items together). <br><br> Strong
 * recommendation: avoid mixing digital and non-digital listings in the same order. (In the
 * future, AddOrder may enforce this recommendation.)
 */
class AddOrderRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\OrderType | Order in which the page is displayed in the list of custom pages.
     */
    public $Order;
    // @codingStandardsIgnoreEnd

    /**
     * @param OrderType $val
     * @throws Exception
     */
    public function setOrder($val)
    {
        $this->Order = ()$val;
    }
}
