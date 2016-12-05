<?php

namespace Controle\sub1\sub2;

/**
 * CategoryFinanceOfferArrayType
 * A set of financing offers, each valid within one particular category.
 */
class CategoryFinanceOfferArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\CategoryFinanceOfferType | A financing offer valid within a particular category.
	 */
	public $CategoryFinanceOffer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param CategoryFinanceOfferType $val
	 * @throws Exception
	 */
	public function setCategoryFinanceOffer($val)
	{
        $this->CategoryFinanceOffer = ()$val;
	}
}
