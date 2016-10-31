<?php

namespace Controle\sub1\sub2;

/**
 * BestOfferArrayType
 * A collection of Best Offers. Empty if there are no best offers.
 */
class BestOfferArrayType
{
	/**
	 * @var \Controle\sub1\sub2\BestOfferType | (GetMyeBayBuying only) Indicates the latest BestOffer the user has provided for the item
	 * .
	 */
	public $bestoffer;
	/**
	 * @param BestOfferType $val
	 * @throws Exception
	 */
	public function setBestOffer($val)
	{
        $this->bestoffer = (int)$val;
	}
}
