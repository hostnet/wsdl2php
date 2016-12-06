<?php

namespace Controle\sub1\sub2;

/**
 * RespondToBestOfferResponseType
 * Contains a list of BestOffers that were either accepted or declined.
 */
class RespondToBestOfferResponseType extends
 \Controle\sub1\sub2\AbstractResponseType
{
	// @codingStandardsIgnoreStart
	/**
	 * @var \Controle\sub1\sub2\BestOfferArrayType | A list of BestOffers that were either accepted or declined.
	 */
	public $RespondToBestOffer;
	// @codingStandardsIgnoreEnd

	/**
	 * @param BestOfferArrayType $val
	 * @throws Exception
	 */
	public function setRespondToBestOffer($val)
	{
        $this->RespondToBestOffer = $val;
	}
}
