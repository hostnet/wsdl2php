<?php

namespace Controle;

/**
 * PlaceOfferResponseType
 * The PlaceOffer result set provides feedback on the success and result of the offer made.
 */
class PlaceOfferResponseType extends
 \Controle\AbstractResponseType
{
	/**
	 * @var \Controle\SellingStatusType | Various details about the current status of the listing, such as the current number of
	 * bids and the current high bidder. Not applicable to Half.com.<br> <br> For GetSearchResultsExpress,
	 * this is always returned when ItemArray.Item is returned.
	 */
	public $sellingstatus;
	/**
	 * @param SellingStatusType $val
	 * @throws Exception
	 */
	public function setSellingStatus($val)
	{
        $this->sellingstatus = (int)$val;
	}
}
