<?php

namespace Controle\sub1\sub2;

/**
 * FinanceOfferArrayType
 * A set of financing offers: promotional offers that allow a buyer to purchase items on credit.
 */
class FinanceOfferArrayType
{
	/**
	 * @var \Controle\sub1\sub2\FinanceOfferType | A financing offer.
	 */
	public $financeoffer;
	/**
	 * @param FinanceOfferType $val
	 * @throws Exception
	 */
	public function setFinanceOffer($val)
	{
        $this->financeoffer = (int)$val;
	}
}
