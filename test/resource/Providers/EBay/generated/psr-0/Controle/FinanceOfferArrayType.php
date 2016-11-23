<?php

namespace Controle;

/**
 * FinanceOfferArrayType
 * A set of financing offers: promotional offers that allow a buyer to purchase items on credit.
 */
class FinanceOfferArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\FinanceOfferType | A financing offer.
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
