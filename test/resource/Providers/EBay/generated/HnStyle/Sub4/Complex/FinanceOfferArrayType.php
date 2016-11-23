<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * FinanceOfferArrayType
 * A set of financing offers: promotional offers that allow a buyer to purchase items on credit.
 */
class FinanceOfferArrayType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\FinanceOfferType | A financing offer.
     */
    public $FinanceOffer;
    // @codingStandardsIgnoreEnd

    /**
     * @param FinanceOfferType $val
     * @throws Exception
     */
    public function setFinanceOffer($val)
    {
        $this->FinanceOffer = (int)$val;
    }
}
