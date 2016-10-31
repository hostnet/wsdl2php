<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ItemTotalsType
 * Details about items involved in the summary for the specified time period.
 */
class ItemTotalsType
{
    /**
     * @var long | Number of items involved in the summary.
     */
    public $totalquantity;
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\AmountType | Total value associated with the items in this summary.
     */
    public $totalvalue;
    /**
     * @param long $val
     * @throws Exception
     */
    public function setTotalQuantity($val)
    {
        $this->totalquantity = (int)$val;
    }

    /**
     * @param AmountType $val
     * @throws Exception
     */
    public function setTotalValue($val)
    {
        $this->totalvalue = (int)$val;
    }
}
