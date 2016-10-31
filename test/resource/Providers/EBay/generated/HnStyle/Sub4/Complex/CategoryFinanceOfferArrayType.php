<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * CategoryFinanceOfferArrayType
 * A set of financing offers, each valid within one particular category.
 */
class CategoryFinanceOfferArrayType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\CategoryFinanceOfferType | A financing offer valid within a particular category.
     */
    public $categoryfinanceoffer;
    /**
     * @param CategoryFinanceOfferType $val
     * @throws Exception
     */
    public function setCategoryFinanceOffer($val)
    {
        $this->categoryfinanceoffer = (int)$val;
    }
}
