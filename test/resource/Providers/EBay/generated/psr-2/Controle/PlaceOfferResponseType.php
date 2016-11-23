<?php

namespace Controle;

/**
 * PlaceOfferResponseType
 * The PlaceOffer result set provides feedback on the success and result of the offer made.
 */
class PlaceOfferResponseType extends
 \Controle\AbstractResponseType
{
    // @codingStandardsIgnoreStart
    /**
     * @var \Controle\SellingStatusType | Various details about the current status of the listing, such as the current number
     * of bids and the current high bidder. Not applicable to Half.com.<br> <br> For GetSearchResultsExpress,
     * this is always returned when ItemArray.Item is returned.
     */
    public $SellingStatus;
    // @codingStandardsIgnoreEnd

    /**
     * @param SellingStatusType $val
     * @throws Exception
     */
    public function setSellingStatus($val)
    {
        $this->SellingStatus = (int)$val;
    }
}
