<?php

namespace Controle;

/**
 * GetHighBiddersResponseType
 * Returns a list of high bidders for the Dutch auction specified in the ItemId property of
 * the request.
 */
class GetHighBiddersResponseType extends
 \Controle\AbstractResponseType
{
    /**
     * @var \Controle\OfferArrayType | Contains a list of zero, one, or multiple OfferType objects. Each OfferType object represents
     * the data for one high bidder. See the schema documentation for OfferType for details
     * on its properties and their meanings.
     */
    public $bidarray;
    /**
     * @var \Controle\ListingStatusCodeType | Specifies an active or ended listing's status in eBay's processing workflow. If a listing
     * ends with a sale (or sales), eBay needs to update the sale details (e.g., total price
     * and buyer/high bidder) and the final value fee. This processing can take several minutes.
     * If you retrieve a sold item and no details about the buyer/high bidder are returned
     * or no final value fee is available, use this listing status information to determine
     * whether eBay has finished processing the listing.
     */
    public $listingstatus;
    /**
     * @param OfferArrayType $val
     * @throws Exception
     */
    public function setBidArray($val)
    {
        $this->bidarray = (int)$val;
    }

    /**
     * @param ListingStatusCodeType $val
     * @throws Exception
     */
    public function setListingStatus($val)
    {
        $this->listingstatus = (int)$val;
    }
}
