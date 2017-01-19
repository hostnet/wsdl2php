<?php

namespace Controle\sub1\sub2;

/**
 * BestOfferArrayType
 * A collection of Best Offers. Empty if there are no best offers.
 */
class BestOfferArrayType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BestOfferType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the item
	 * .
	 */
	public $BestOffer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BestOfferType $val
	 * @throws \Exception
	 */
	public function setBestOffer($val)
	{
        $this->BestOffer = $val;
	}
}
